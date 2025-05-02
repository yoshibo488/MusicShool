<?php get_header(); ?>
    <main class="search-page">
    <?php get_template_part('template-parts/breadcrumb'); ?>
        <!-- ====================
            Search
        ===================== -->
        <section class="search__sec">
            <div class="inner">
            <?php if ( !empty(get_search_query()) ): ?>
            <?php if (have_posts()): ?>
                <?php
                $paged = (get_query_var('paged')) ? absint(get_query_var('paged')): 1;
                $args = array(
                'paged' => $paged,
                'post_type' => array('blog','result'),
                'orderby' => 'date',
                'order' => 'DESC',
                's' => get_search_query()
                );
                $the_query = new WP_Query($args);
                ?>
                <div class="search__target">
                    <h1>「<span><?php echo esc_html(get_search_query()); ?></span>」の検索結果</h1>
                    <p><?php echo $the_query->found_posts; ?>件</p>
                </div>
                <div class="search__contents">
                    <?php if($the_query->have_posts()):
                    while ($the_query->have_posts()): $the_query->the_post(); ?>
                    <a href="<?php echo get_permalink($post->ID); ?>" class="search__link">
                        <div class="search__thumbnail">
                            <div class="search__image">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php
                                    $desktop = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large'); // デスクトップ用サイズ
                                    $mobile = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large'); // モバイル用サイズ
                                    ?>
                                    <picture>
                                        <source srcset="<?php echo esc_url($mobile[0]); ?>" media="(max-width: 767px)">
                                        <img src="<?php echo esc_url($desktop[0]); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                                    </picture>
                                <?php else : ?>
                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/images/noimage.jpg'); ?>" alt="<?php echo esc_attr__('noimage'); ?>">
                                <?php endif; ?>
                            </div>
                            <?php
                            $current_post_type = get_post_type();
                            if ($current_post_type === 'blog' || $current_post_type === 'result') {
                                $taxonomy = ($current_post_type === 'blog') ? 'blog_tag' : 'result_tag';
                                $terms = get_the_terms(get_the_ID(), $taxonomy);
                                
                                if (!empty($terms) && !is_wp_error($terms)) : ?>
                                <div class="search__tag c-post__tag">
                                    <span>
                                        <?php foreach ($terms as $term) {
                                            echo esc_html($term->name);
                                        } ?>
                                    </span>
                                </div>
                                <?php endif;
                            }
                            ?>
                        </div>
                        <div class="search__post search-post">
                            <h2 class="search__heading">
                                <?php
                                if(mb_strlen($post->post_title)>27) {
                                $title = mb_substr($post->post_title,0,27); echo $title . '...';
                                } else {
                                echo esc_html($post->post_title);
                                }
                                ?>
                            </h2>
                            <p class="search__time">
                                <time datetime="<?php echo get_the_time('Y-m-d'); ?>"><?php the_time('Y.m.d') ?></time>
                            </p>
                            <p class="search__text">
                                <?php
                                if(mb_strlen($post->post_content)>120) {
                                $content = mb_substr($post->post_content,0,120); echo $content . '...';
                                } else {
                                echo esc_html($post->post_content);
                                }
                                ?>
                            </p>
                        </div>
                    </a>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                    <?php else: ?>
                    <p class="search-error__text">検索されたキーワードにマッチする記事はありませんでした。</p>
                    <div class="search-error__btn c-btn"><a onclick="history.back()">戻る</a></div>
                    <?php endif; ?>
                    <?php else: ?>
                    <p class="search-error__text">検索キーワードが未入力です。</p>
                    <div class="search-error__btn c-btn"><a onclick="history.back()">戻る</a></div>
                    <?php endif; ?>
                </div>
                
                <?php if ( !empty(get_search_query()) ): ?>
                <?php if (have_posts()): ?>
                    <?php get_template_part('template-parts/pager', '', $the_query); ?>
                <?php endif; ?>
                <?php endif; ?>
            </div>
        </section>
    </main>
    <?php get_footer(); ?>