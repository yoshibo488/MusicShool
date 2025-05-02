<!DOCTYPE html>
<html lang="ja" prefix="og: https://ogp.me/ns#">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">

    <!-- GoogleFont -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">
    <!-- favicon -->
    <link rel="icon" href="<?php echo esc_url(get_theme_file_uri('/images/top-page/favicon.svg')) ?>">

    <?php if(is_front_page()): ?>
    <title>きたむらミュージックスクール | 「音楽で生きる」を叶える ミュージックスクール</title>
    <meta name="description" content="「音楽で生きる」を叶える ミュージックスクール
    「きたむらミュージックスクール」の公式ホームページです。">
    <!-- 固定ページ -->
    <?php elseif(is_page()): ?>
        <?php if(get_field("title")): ?>
        <title><?php echo the_field('title'); ?></title>
        <?php else: ?>
        <title><?php the_title(); ?> | きたむらミュージックスクール</title>
        <?php endif; ?>
        <?php if(get_field("description")): ?>
        <meta name="description" content="<?php echo the_field('description'); ?>">
        <?php else: ?>
        <meta name="description" content="きたむらミュージックスクール公式ホームページの
        <?php the_title(); ?>ページです。">
        <?php endif; ?>
    <!-- 投稿ページ -->
    <?php elseif(is_single()): ?>
        <?php if(get_field("title")): ?>
        <title><?php echo the_field('title'); ?></title>
        <?php else: ?>
        <title><?php the_title(); ?> | きたむらミュージックスクール</title>
        <?php endif; ?>
        <?php if(get_field("description")): ?>
        <meta name="description" content="<?php echo the_field('description'); ?>">
        <?php else: ?>
        <meta name="description" content="<?php if(have_posts()): ?><?php while(have_posts()): the_post(); ?>
        <?php 
        $des = get_the_content();
        $des = strip_tags($des);
        $des = str_replace(array("\r\n"," "), '', $des);
        $desp = mb_substr($des, 0, 120, "UTF-8");
        echo $desp;
        ?>
        <?php endwhile; ?><?php endif; ?>">
        <?php endif; ?>
    <!-- アーカイブページ -->
    <?php elseif(is_archive()): ?>
        <?php if(!is_paged()): ?>
        <?php
        $cat_id = get_queried_object()->cat_ID;
        $post_id = 'category_'.$cat_id;
        ?>
        <title><?php single_cat_title( '', true ); ?> | きたむらミュージックスクール</title>
        <meta name="description" content="きたむらミュージックスクール公式ホームページの
        <?php single_cat_title( '', true ); ?>カテゴリアーカイブページです。">
        <?php else: ?>
        <title><?php single_cat_title( '', true ); ?>カテゴリアーカイブ 
        <?php show_page_number(''); ?>ページ目  | きたむらミュージックスクール</title>
        <meta name="description" content="きたむらミュージックスクール公式ホームページの
        <?php single_cat_title( '', true ); ?>カテゴリアーカイブ <?php show_page_number(''); ?>ページ目です。">
        <?php endif; ?>
    <!-- 検索結果ページ -->
    <?php elseif(is_search()): ?>
        <title>検索結果 | きたむらミュージックスクール</title>
        <meta name="description" content="きたむらミュージックスクール公式ホームページの検索結果ページです。">
    <!-- 404ページ -->
    <?php elseif(is_404()): ?>
        <title>お探しのページはございません | きたむらミュージックスクール</title>
        <meta name="description" content="きたむらミュージックスクール公式ホームページの404ページです。">
    <!-- その他 -->
    <?php else: ?>
        <title><?php the_title(); ?> | きたむらミュージックスクール</title>
        <meta name="description" content="きたむらミュージックスクール公式ホームページの
        <?php the_title(); ?>ページです。">
    <?php endif; ?>
    <?php wp_head(); ?>
</head>
<body style="display: none;">
    <!-- ====================
        header
    ===================== -->
    <header id="page-header" class="header">
        <div class="header__inner">
            <div class="header__contents">
                <div class="header__logo header-logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="header-logo__link">
                        <div class="header-logo__icon">
                            <img src="<?php echo get_template_directory_uri() ?>/images/top-page/symbol_logo.svg" alt="symbol">
                        </div>
                        <p class="header-logo__text">
                            きたむら<br class="c-sp-none">
                            <span>ミュージックスクール</span>
                        </p>
                    </a>
                </div>
                <?php
                wp_nav_menu(array(
                'menu' => 'header',
                'menu_class' => 'header-nav__list',
                'container' => 'nav',
                'container_class' => 'header__nav c-sp-none'
                ));
                ?>
            </div>
        </div>

        <!-- ハンバーガーメニュー -->
        <div class="c-pc-none">
            <button id="hamburger-block" class="c-hamburger">
                <span class="c-hamburger-line"></span>
            </button>
            <div class="c-header-menu">
                <?php
                wp_nav_menu(array(
                'menu' => 'header',
                'container' => 'nav',
                ));
                ?>
            </div>
        </div>
    </header>