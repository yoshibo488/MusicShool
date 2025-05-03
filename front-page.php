<?php get_header(); ?>
    <main class="top">
        <!-- ====================
            top-fv
        ===================== -->
        <section id="top-fv" class="top-fv">
            <div class="top-fv__image">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri() ?>/images/top-page/fv-sp.jpg" media="(max-width: 767px)">
                    <img src="<?php echo get_template_directory_uri() ?>/images/top-page/fv.jpg" alt="FV画像">
                </picture>
            </div>
            <div class="top-fv__text">
                <h1 class="top-fv__heading">
                    「音楽で生きる」<br class="c-pc-none">
                    を叶える<br>
                    ミュージックスクール
                </h1>
            </div>
        </section>
        <!-- ====================
            top-concept
        ===================== -->
        <section class="top-concept">
            <div class="top-concept__contents">
                <h2 class="top-concept__heading">全人類、<br class="c-pc-none">ミュージシャン計画。</h2>
                <h3 class="top-concept__note">私たちは音楽を愛するすべての人が、音楽に熱狂できる世界を目指しています。</h3>
                <div class="top-concept__image">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/images/top-page/semicircle-sp.jpg" media="(max-width: 767px)">
                        <img src="<?php echo get_template_directory_uri() ?>/images/top-page/semicircle.jpg" alt="Semicircle">
                    </picture>
                </div>
                <ul class="top-concept__vision top-concept-vision">
                    <div class="top-concept-vision__line"></div>
                    <div class="dot dot-1"></div>
                    <div class="dot dot-2"></div>
                    <div class="dot dot-3"></div>
                    <li class="top-concept-vision__item">
                        <span>Enthusiasm</span>
                        <span>熱狂し</span>
                    </li>
                    <li class="top-concept-vision__item">
                        <span>Envision</span>
                        <span>想像し</span>
                    </li>
                    <li class="top-concept-vision__item">
                        <span>Effulgent</span>
                        <span>輝く存在へ</span>
                    </li>
                    <span class="top-concept__triangle c-triangle"></span>
                </ul>
            </div>
        </section>
        <!-- ====================
            top-message
        ===================== -->
        <section class="top-message c-bg-color">
            <div class="inner">
                <div class="top-message__contents">
                    <h2 class="top-message__heading c-index-heading">
                        音楽業界初！<br>
                        収益化までサポートする<br class="c-pc-none">ミュージックスクール
                    </h2>
                    <p class="top-message__text">
                        楽器や作詞作曲などの<br class="c-pc-none">技術・知識はもちろんのこと<br>
                        自分で稼ぎつづけるための<br class="c-pc-none">ビジネス面もサポートします！
                    </p>
                </div>
            </div>
        </section>
        <!-- ====================
            top-reason
        ===================== -->
        <section class="top-reason">
            <div class="inner">
                <div class="top-reason__heading">
                    <h2 class="c-index-heading">
                        きたむらミュージック<br class="c-pc-none">スクールが選ばれる理由
                    </h2>
                </div>
                <div class="top-reason__contents">
                    <ul>
                        <li class="top-reason__item reason-card">
                            <div class="reason-card__image">
                                <picture>
                                    <source srcset="<?php echo get_template_directory_uri() ?>/images/top-page/reason01-sp.jpg" media="(max-width: 767px)">
                                    <img src="<?php echo get_template_directory_uri() ?>/images/top-page/reason01.jpg" alt="技術面はプロによるマンツーマン授業！">
                                </picture>
                            </div>
                            <div class="reason-card__text">
                                <h3 class="reason-card__heading">技術面はプロによるマンツーマン授業！</h3>
                                <p>
                                    第一線で活躍するプロによるマンツーマン授業で、きめ細かな技術指導が受けられます。
                                </p>
                            </div>
                        </li>
                        <li class="top-reason__item reason-card">
                            <div class="reason-card__image">
                                <picture>
                                    <source srcset="<?php echo get_template_directory_uri() ?>/images/top-page/reason02-sp.jpg" media="(max-width: 767px)">
                                    <img src="<?php echo get_template_directory_uri() ?>/images/top-page/reason02.jpg" alt="収益化するためのビジネスサポート！">
                                </picture>
                            </div>
                            <div class="reason-card__text">
                                <h3 class="reason-card__heading">収益化するためのビジネスサポート！</h3>
                                <p>
                                    コンセプト設計や集客方法、マーケティングリサーチなど、音楽で稼ぎつづけるための方法やマインドセットをサポートするクラスをご用意。
                                </p>
                            </div>
                        </li>
                        <li class="top-reason__item reason-card">
                            <div class="reason-card__image">
                                <picture>
                                    <source srcset="<?php echo get_template_directory_uri() ?>/images/top-page/reason03-sp.jpg" media="(max-width: 767px)">
                                    <img src="<?php echo get_template_directory_uri() ?>/images/top-page/reason03.jpg" alt="24時間365日使える練習ROOMを完備！">
                                </picture>
                            </div>
                            <div class="reason-card__text">
                                <h3 class="reason-card__heading">24時間365日使える練習ROOMを完備！</h3>
                                <p>
                                    一年中使える個室の練習ROOMを完備しているため、お仕事帰りや合間の時間も自由に練習が可能です。（アプリで予約が必要です）
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- ====================
            top-result
        ===================== -->
        <section class="top-result c-bg-color">
            <div class="top-result__inner">
                <?php
                $args = array(
                    'posts_per_page' => 6,
                    'post_type' => 'result',
                    'orderby' => 'date',
                    'order' => 'DESC'
                );
                $the_query = new WP_Query($args);
                ?>
                <div class="top-result__heading">
                    <h2 class="c-index-heading">生徒さんたちの声</h2>
                </div>
                <div class="top-result__contents">
                    <div id="slider" class="slider">
                        <?php if($the_query->have_posts()):
                        while ($the_query->have_posts()): $the_query->the_post(); ?>
                        <a href="<?php echo get_permalink(get_the_ID()); ?>" class="top-result__item top-result-card">
                            <div class="top-result-card__image">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php
                                    $desktop = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                                    $mobile = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                                    ?>
                                    <picture>
                                        <source srcset="<?php echo esc_url($mobile[0]); ?>" media="(max-width: 767px)">
                                        <img src="<?php echo esc_url($desktop[0]); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                                    </picture>
                                <?php else : ?>
                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/images/noimage.jpg'); ?>" alt="<?php echo esc_attr__('noimage'); ?>">
                                <?php endif; ?>
                            </div>
                            <h3 class="top-result-card__heading">
                                <?php echo get_field('works', $post->ID); ?>
                                <?php echo get_field('name', $post->ID); ?>さん
                            </h3>
                            <p class="top-result-card__text">
                                <?php
                                $raw_content = wp_strip_all_tags(get_the_content());
                                if(mb_strlen($raw_content) > 43) {
                                $content = mb_substr($raw_content, 0, 43);
                                echo esc_html($content) . '...';
                                } else {
                                echo $post->post_content;
                                }
                                ?>
                            </p>
                        </a>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====================
            top-process
        ===================== -->
        <section class="top-process">
            <div class="inner">
                <div class="top-process__heading">
                    <h2 class="c-index-heading">ご利用の流れ</h2>
                </div>
                <div class="top-process__contents">
                    <ul class="top-process__items">
                        <li class="top-process__item top-process-card">
                            <h3 class="top-process-card__heading">
                                お問い合わせ
                            </h3>
                            <p class="top-process-card__text">
                                まずはフォームまたはメールにてお問い合わせください。<br>
                                ヒアリングの日程を調整します。
                            </p>
                        </li>
                        <li class="top-process__item top-process-card">
                            <h3 class="top-process-card__heading">
                                ヒアリング
                            </h3>
                            <p class="top-process-card__text">
                                現在の技術面や将来の目標などをお伺いします。<br>
                                悩みや不安な事もお気軽にご相談ください。
                            </p>
                        </li>
                        <li class="top-process__item top-process-card">
                            <h3 class="top-process-card__heading">
                                プランのご提案
                            </h3>
                            <p class="top-process-card__text">
                                ライフスタイルや目標によって最適なプランをご提案します。<br>
                                継続できるようサポートいたします。
                            </p>
                        </li>
                        <li class="top-process__item top-process-card">
                            <h3 class="top-process-card__heading">
                                ご入学
                            </h3>
                            <p class="top-process-card__text">
                                お申し込み完了後、レッスンがスタートします。<br>
                                マンツーマン指導なので、いつからでもスタートが可能です。
                            </p>
                        </li>
                        <span class="top-process__triangle c-triangle"></span>
                    </ul>
                </div>
            </div>
        </section>
        <!-- ====================
            top-faq
        ===================== -->
        <section class="top-faq">
            <div class="inner">
                <div class="top-faq__heading">
                    <h2 class="c-index-heading">よくあるご質問</h2>
                </div>
                <dl>
                    <div class="top-faq__item">
                        <dt class="top-faq__question top-faq-question">
                            <div class="top-faq-question__title">
                                <div class="top-faq-question__logo">
                                    <span>Q</span>
                                </div>
                                <p>どのような生徒さんがどれぐらいの期間で稼いでいますか？</p>
                            </div>
                        </dt>
                        <dd class="top-faq__answer top-faq-answer">
                            <div class="top-faq-answer__title">
                                <div class="top-faq-answer__logo">
                                    <span>A</span>
                                </div>
                                <p>稼ぐまでの期間は個人によって異なりますが、一般的には数ヶ月から1年程度で結果が見えてくることが多いです。</p>
                            </div>
                        </dd>
                    </div>
                    <div class="top-faq__item">
                        <dt class="top-faq__question top-faq-question">
                            <div class="top-faq-question__title">
                                <div class="top-faq-question__logo">
                                    <span>Q</span>
                                </div>
                                <p>途中でプランを変更することは可能ですか？</p>
                            </div>
                        </dt>
                        <dd class="top-faq__answer top-faq-answer">
                            <div class="top-faq-answer__title">
                                <div class="top-faq-answer__logo">
                                    <span>A</span>
                                </div>
                                <p>途中でプラン変更も可能です。毎月15日までに申請すれば翌月からプランが変更となります。</p>
                            </div>
                        </dd>
                    </div>
                    <div class="top-faq__item">
                        <dt class="top-faq__question top-faq-question">
                            <div class="top-faq-question__title">
                                <div class="top-faq-question__logo">
                                    <span>Q</span>
                                </div>
                                <p>入学金などの分割払いはできますか？</p>
                            </div>
                        </dt>
                        <dd class="top-faq__answer top-faq-answer">
                            <div class="top-faq-answer__title">
                                <div class="top-faq-answer__logo">
                                    <span>A</span>
                                </div>
                                <p>入会金の分割払いは可能です。ただし、具体的な条件や手続きはプランによって異なる場合があります。</p>
                            </div>
                        </dd>
                    </div>
                    <div class="top-faq__item">
                        <dt class="top-faq__question top-faq-question">
                            <div class="top-faq-question__title">
                                <div class="top-faq-question__logo">
                                    <span>Q</span>
                                </div>
                                <p>休学することも可能ですか？</p>
                            </div>
                        </dt>
                        <dd class="top-faq__answer top-faq-answer">
                            <div class="top-faq-answer__title">
                                <div class="top-faq-answer__logo">
                                    <span>A</span>
                                </div>
                                <p>休学することも可能です。詳細に関しましては事前にご相談下さい。</p>
                            </div>
                        </dd>
                    </div>
                </dl>
            </div>
        </section>
        <!-- ====================
            top-blog
        ===================== -->
        <section class="top-blog">
            <div class="inner">
                <?php
                $args = array(
                    'posts_per_page' => 3,
                    'post_type' => 'blog',
                    'orderby' => 'date',
                    'order' => 'DESC'
                );
                $the_query = new WP_Query($args);
                ?>
                <div class="top-blog__heading">
                    <h2 class="c-index-heading">ブログ</h2>
                </div>
                <div class="top-blog__items">
                    <?php if($the_query->have_posts()):
                    while ($the_query->have_posts()): $the_query->the_post(); ?>
                    <a href="<?php echo get_permalink(get_the_ID()); ?>" class="top-blog__item">
                        <div class="top-blog__image">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php
                            $desktop = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                            $mobile = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                            ?>
                            <picture>
                                <source srcset="<?php echo esc_url($mobile[0]); ?>" media="(max-width: 767px)">
                                <img src="<?php echo esc_url($desktop[0]); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                            </picture>
                        <?php else : ?>
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/images/noimage.jpg'); ?>" alt="<?php echo esc_attr__('noimage', 'your-text-domain'); ?>">
                        <?php endif; ?>
                        </div>
                        <div class="top-blog__text">
                            <h3>
                                <?php
                                if(mb_strlen($post->post_title)>25) {
                                $title = mb_substr($post->post_title,0,25); echo esc_html($title) . '...';
                                } else {
                                echo esc_html($post->post_title);
                                }
                                ?>
                            </h3>
                        </div>
                        <?php
                        $terms = get_the_terms(get_the_ID(), 'blog_tag');
                        if (!empty($terms)): ?>
                            <div class="top-blog__tag c-post__tag">
                                <span>
                                    <?php foreach ($terms as $term): ?>
                                        <?php echo $term->name; ?>
                                    <?php endforeach; ?>
                                </span>
                            </div>
                        <?php endif; ?>
                        <div class="top-blog__date">
                            <time datetime="<?php echo get_the_time('Y-m-d'); ?>"><?php the_time('Y.m.d') ?></time>
                        </div>
                    </a>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>
                <div class="top-blog__link">
                    <a href="<?php echo esc_url(home_url('/blog-list')); ?>">ブログ一覧へ</a>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>