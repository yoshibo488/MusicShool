<?php get_header(); ?>
    <main class="result-details">
    <?php get_template_part('template-parts/breadcrumb'); ?>
        <!-- ====================
            ResultDetails
        ===================== -->
        <section class="result-details__sec">
            <div class="inner">
                <?php if ( have_posts() ) : ?>
                <?php while(have_posts()): the_post(); ?>
                <div class="result-details__wrap">
                    <div class="result-details__thumbnail">
                        <div class="result-details__image">
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
                        $terms = get_the_terms($post->ID, 'result_tag');
                        if (!empty($terms)) : ?>
                            <div class="result-details-head__tag c-post__tag">
                                <span><?php echo esc_html($terms[0]->name); ?></span>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div>
                        <h1 class="result-details__title">
                            <?php the_title(); ?>
                        </h1>
                        <p class="result-details__time">
                            <time datetime="<?php echo get_the_time('Y-m-d'); ?>"><?php the_time('Y.m.d') ?></time>
                        </p>
                    </div>
                </div>
                <div class="result-details__profile">
                    <dl class="result-details__introduction result-details-introduction">
                        <div class="result-details-introduction__item">
                            <dt>名前</dt>
                            <dd><?php echo get_field('name', $post->ID); ?></dd>
                        </div>
                        <div class="result-details-introduction__item">
                            <dt>職業</dt>
                            <dd><?php echo get_field('works', $post->ID); ?></dd>
                        </div>
                        <div class="result-details-introduction__item">
                            <dt>ジャンル</dt>
                            <dd><?php echo get_field('result_genre', $post->ID); ?></dd>
                        </div>
                        <div class="result-details-introduction__item">
                            <dt>実績</dt>
                            <dd><?php echo get_field('result_achievements', $post->ID); ?></dd>
                        </div>
                        <div class="result-details-introduction__item result-details-introduction__border">
                            <dt>SNS</dt>
                            <dd><?php echo get_field('sns', $post->ID); ?></dd>
                        </div>
                    </dl>
                    <div class="result-details__thought">
                        <p><?php the_content(); ?></p>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>

                <div class="post-navigation">
                    <?php get_template_part('template-parts/post-navigation-arrow', '', $args = array('image_area' => 'has', 'post_type' => 'result')); ?>
                    <?php get_template_part('template-parts/post-navigation-related', '', $args = array('post_type' => 'result')); ?>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>