<?php get_header(); ?>
    <main class="blog-details">
    <?php get_template_part('template-parts/breadcrumb'); ?>
        <!-- ====================
            blog-details
        ===================== -->
        <section class="blog-details__sec">
            <div class="inner">
                <?php if ( have_posts() ) : ?>
                <?php while(have_posts()): the_post(); ?>
                <div class="blog-details__contents">
                    <article class="blog-details__article blog-details-article">
                        <div class="blog-details-article__thumbnail">
                            <div class="blog-details-article__image">
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
                            $terms = get_the_terms($post->ID, 'blog_tag');
                            if (!empty($terms)) : ?>
                                <div class="blog-details-head__tag c-post__tag">
                                    <span><?php echo esc_html($terms[0]->name); ?></span>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="blog-details__post blog-details-post">
                            <h1 class="blog-details__heading">
                                <?php the_title(); ?>
                            </h1>
                            <p class="blog-details__date">
                                <time datetime="the_time('Y-m-d')"><?php the_time('Y.m.d') ?></time>
                            </p>
                            <div class="blog-details__sns blog-details-sns">
                                <?php
                                $url = get_permalink();
                                $title = get_the_title();
                                ?>
                                <a href="<?php echo esc_url( 'https://www.facebook.com/share.php?u=' . $url ); ?>" target="_blank" rel="noopener" class="blog-details-sns__link blog-details__facebook">
                                    <picture>
                                        <source srcset="<?php echo get_template_directory_uri() ?>/images/blog-details/facebook-sp.jpg" media="(max-width: 767px)">
                                        <img src="<?php echo get_template_directory_uri() ?>/images/blog-details/facebook.jpg" alt="facebook">
                                    </picture>
                                </a>
                                <a href="<?php echo esc_url( 'https://twitter.com/share?url=' . $url . '&text=' . $title ); ?>" target="_blank" rel="noopener" class="blog-details-sns__link blog-details__twitter">
                                    <picture>
                                        <source srcset="<?php echo get_template_directory_uri() ?>/images/blog-details/twitter-sp.jpg" media="(max-width: 767px)">
                                        <img src="<?php echo get_template_directory_uri() ?>/images/blog-details/twitter.jpg" alt="twitter">
                                    </picture>
                                </a>
                                <a href="<?php echo esc_url( 'http://b.hatena.ne.jp/add?mode=confirm&url=' . $url . '&title=' . $title ); ?>" target="_blank" rel="noopener" class="blog-details-sns__link blog-details__hatena">
                                    <picture>
                                        <source srcset="<?php echo get_template_directory_uri() ?>/images/blog-details/hatena-sp.jpg" media="(max-width: 767px)">
                                        <img src="<?php echo get_template_directory_uri() ?>/images/blog-details/hatena.jpg" alt="hatena">
                                    </picture>
                                </a>
                                <a href="<?php echo esc_url( 'https://line.me/R/msg/text/?' . $title . $url ); ?>" target="_blank" rel="noopener" class="blog-details-sns__link blog-details__line">
                                    <picture>
                                        <source srcset="<?php echo get_template_directory_uri() ?>/images/blog-details/line-sp.jpg" media="(max-width: 767px)">
                                        <img src="<?php echo get_template_directory_uri() ?>/images/blog-details/line.jpg" alt="line">
                                    </picture>
                                </a>
                                <a href="<?php echo esc_url( 'http://getpocket.com/edit?url=' . $url . '&title=' . $title ); ?>" target="_blank" rel="noopener" class="blog-details-sns__link blog-details__pocket">
                                    <picture>
                                        <source srcset="<?php echo get_template_directory_uri() ?>/images/blog-details/pochet-sp.jpg" media="(max-width: 767px)">
                                        <img src="<?php echo get_template_directory_uri() ?>/images/blog-details/pochet.jpg" alt="pochet">
                                    </picture>
                                </a>
                            </div>

                            <div class="blog-details-post__content">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <div class="post-navigation">
                            <?php get_template_part('template-parts/post-navigation-arrow', '', $args = array('image_area' => 'has', 'post_type' => 'blog')); ?>
                            <?php get_template_part('template-parts/post-navigation-related', '', $args = array('post_type' => 'blog')); ?>
                        </div>
                    </article>
                    <?php get_sidebar(); ?>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </section>
    </main>
<?php get_footer(); ?>