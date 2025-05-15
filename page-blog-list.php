<?php get_header(); ?>
    <main class="blog-list">
        <!-- ====================
            SecondaryFV
        ===================== -->
        <section class="secondary-fv">
            <div class="secondary-fv__contents">
                <div class="secondary-fv__image">
                    <picture>
                        <source srcset="<?php echo esc_url(get_theme_file_uri('/images/blog-list/blog_fv-sp.jpg')); ?>" media="(max-width: 767px)">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/blog-list/blog_fv-pc.jpg')); ?>" alt="plan-fv">
                    </picture>
                </div>
                <div class="secondary-fv__text">
                    <h1 class="secondary-fv__heading">ブログ</h1>
                </div>
            </div>
            <?php get_template_part('template-parts/breadcrumb'); ?>
        </section>
        <!-- ====================
            BlogList
        ===================== -->
        <section class="blog-list__sec">
            <div class="inner">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'paged' => $paged,
                    'post_type' => 'blog',
                    'posts_per_page' => 10,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );
                $the_query = new WP_Query($args);
                ?>
                <h2 class="blog-list__heading secondary__heading">ブログ一覧</h2>
                <div class="blog-list__contents">
                    <?php if($the_query->have_posts()):
                    while ($the_query->have_posts()): $the_query->the_post(); ?>
                    <a href="<?php echo esc_url(get_permalink()); ?>" class="blog-list__item">
                        <div class="blog-list__thumbnail">
                            <div class="blog-list__image">
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
                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/images/noimage2.jpg'); ?>" alt="<?php echo esc_attr__('noimage'); ?>">
                                <?php endif; ?>
                            </div>
                            <?php
                            $terms = get_the_terms(get_the_ID(), 'blog_tag');
                            if (!empty($terms)): ?>
                            <div class="blog-list__tag c-post__tag">
                                <span>
                                    <?php foreach ($terms as $term): ?>
                                        <?php echo $term->name; ?>
                                    <?php endforeach; ?>
                                </span>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="blog-list__content">
                            <h3 class="blog-list__title">
                                <?php
                                if(mb_strlen($post->post_title)>55) {
                                $title = mb_substr($post->post_title,0,55); echo $title . '...';
                                } else {
                                echo esc_html($post->post_title);
                                }
                                ?>
                            </h3>
                            <p class="blog-list__date">
                                <time datetime="<?php echo get_the_time('Y-m-d'); ?>"><?php the_time('Y.m.d') ?></time>
                            </p>
                            <?php
                            $content = apply_filters('the_content', $post->post_content);
                            $trimmed_content = wp_trim_words( wp_strip_all_tags($content), 120, '...' );
                            echo '<p>' . esc_html($trimmed_content) . '</p>';
                            ?>
                        </div>
                    </a>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
        </section>
        <?php get_template_part('template-parts/pager', '', $the_query); ?>
    </main>
<?php get_footer(); ?>