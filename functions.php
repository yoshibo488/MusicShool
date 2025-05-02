<?php
//CSS読み込み
function add_stylesheet() {
  wp_enqueue_style (
    'main', get_theme_file_uri().'/css/style.css', array(), filemtime(get_theme_file_path('/css/style.css'))
  );
  wp_enqueue_style (
    'slick', get_theme_file_uri().'/slick/slick.css', array('main')
  );
  wp_enqueue_style (
    'slick-theme', get_theme_file_uri().'/slick/slick-theme.css', array('slick')
  );
}
add_action('wp_enqueue_scripts', 'add_stylesheet');

//JS読み込み
function add_script() {
  wp_enqueue_script('jquery');
  wp_register_script(
    'slick', get_theme_file_uri().'/slick/slick.min.js', array('jquery'), '', true
  );
  wp_enqueue_script(
    'original', get_theme_file_uri().'/js/main.js', array('slick'), '', true
  );
}
add_action('wp_enqueue_scripts', 'add_script');

//サムネイル（アイキャッチ）画像の設定機能を追加
add_theme_support('post-thumbnails');

//管理画面で 投稿メニュー を非表示
function remove_menus () {
    global $menu;
    remove_menu_page( 'edit.php' );
  }
add_action('admin_menu', 'remove_menus');


//contact form 7で自動でpタグを挿入しない
add_filter('wpcf7_autop_or_not', '__return_false');


//管理画面「外観＞メニュー」 を表示
add_action('after_setup_theme', 'register_menu');
function register_menu() {
  register_nav_menu('primary', __('Primary Menu', 'theme-slug'));
}

//現在のページ数の取得
function show_page_number() {
    global $wp_query;
    $paged = get_query_var('paged');
    echo $paged;
  }

//jsのsliderの画像パスを取得
function add_slider_paths() {
  wp_localize_script('original', 'sliderPaths', [
      'arrows' => [
          'desktop' => [
              'prev' => get_template_directory_uri() . '/images/top-page/arrow-l.svg',
              'next' => get_template_directory_uri() . '/images/top-page/arrow-r.svg'
          ],
          'mobile' => [
              'prev' => get_template_directory_uri() . '/images/top-page/arrow-l-sp.svg',
              'next' => get_template_directory_uri() . '/images/top-page/arrow-r-sp.svg'
          ]
      ]
  ]);
}
add_action('wp_enqueue_scripts', 'add_slider_paths'); 

// headerメニューのお問い合わせにクラスを追加する
add_filter('nav_menu_css_class', 'add_specific_menu_item_class', 10, 4);
function add_specific_menu_item_class($classes, $item, $args, $depth) {
    if ($item->ID == 154) {
        $classes[] = 'c-btn';
    }
    return $classes;
}

// 構造化データを出力
add_action('wp_head', 'add_music_school_structured_data');
function add_music_school_structured_data() {
  if (!is_page('plan')) return;

  // 組織情報
  $organization = [
    "@type" => "MusicSchool",
    "name" => "東京ミュージックアカデミー",
    "image" => esc_url(get_theme_file_uri('/images/top-page/favicon.svg')),
    "priceRange" => "￥39,000～￥128,000",
    "address" => [
      "@type" => "PostalAddress",
      "streetAddress" => "1234-5",
      "addressLocality" => "東京都",
      "addressRegion" => "東京都",
      "postalCode" => "000-0000"
    ],
    "telephone" => "+81-90-1234-5678",
    "openingHours" => ["Mo-Fr 10:00-21:00"]
  ];

  // 料金プラン情報
  $offers = array_map(function($plan) {
    return [
      "@type" => "Offer",
      "name" => $plan['name'],
      "price" => $plan['price'],
      "priceCurrency" => "JPY",
      "description" => implode("\n", $plan['features'])
    ];
  }, [
    [
      'name' => 'ベーシックプラン',
      'price' => 39000,
      'features' => [
        'マンツーマン授業：週1回',
        'ビジネス基本講座',
        '練習ROOM利用：月10時間'
      ]
    ],
    // 他のプランも同様に定義
  ]);

  // 構造化データ統合
  $structured_data = [
    "@context" => "https://schema.org",
    "@type" => "WebPage",
    "mainEntity" => [
      "@type" => "EducationEvent",
      "name" => "音楽レッスンプラン",
      "offers" => $offers,
      "organizer" => $organization
    ]
  ];

  // 安全な出力
  echo '<script type="application/ld+json">' . 
       wp_json_encode($structured_data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . 
       '</script>';
}

  // お問い合わせページのみにreCAPTCHAのロゴマークを表示する
  add_action('wp_enqueue_scripts', function() {
    if (is_page('contact')) return;
    wp_deregister_script('google-recaptcha');
  }, 100, 0);

?>