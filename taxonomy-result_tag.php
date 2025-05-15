<?php get_header(); ?>
    <main class="result-list">
        <!-- ====================
            SecondaryFV
        ===================== -->
        <section class="secondary-fv">
            <div class="secondary-fv__contents">
                <div class="secondary-fv__image">
                    <picture>
                        <source srcset="<?php echo esc_url(get_theme_file_uri('/images/Result-list/Result-list--fv-sp.jpg')); ?>" media="(max-width: 767px)">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/Result-list/Result-list-fv.jpg')); ?>" alt="plan-fv">
                    </picture>
                </div>
                <div class="secondary-fv__text">
                    <h1 class="secondary-fv__heading">卒業実績</h1>
                </div>
            </div>
            <?php get_template_part('template-parts/breadcrumb'); ?>
        </section>
        <!-- ====================
            ResultList
        ===================== -->
        <section class="result-list__sec">
            <div class="inner">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged'): 1;
                $the_term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
                $term_name = $the_term->name;
                $args = array(
                'paged' => $paged,
                'post_type' => 'result',
                'tax_query' => array(
                    array(
                    'taxonomy' => 'result_tag',
                    'field'    => 'slug',
                    'terms'    => $the_term
                    )
                )
                );
                $the_query = new WP_Query($args);
                ?>
                <h2 class="result-list__heading secondary__heading"><?php echo $term_name; ?></h2>
                <div class="result-list__contents">
                    <?php if($the_query->have_posts()):
                    $i = 0;
                    $total_count = $the_query->post_count;
                    while ($the_query->have_posts()): $the_query->the_post();
                    if ($i % 2 == 0): // 偶数番目（0,2,4...）
                    ?>
                    <a href="<?php echo esc_url(get_permalink()); ?>" class="result-list__link">
                        <div class="result-list__thumbnail result-list__special">
                            <div class="result-list__image">
                                <?php if (has_post_thumbnail()) : ?>
                                <?php
                                $desktop = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large'); // デスクトップ用サイズ
                                $mobile = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large'); // モバイル用サイズ
                                ?>
                                <picture>
                                    <source srcset="<?php echo esc_url($mobile[0]); ?>" media="(max-width: 767px)">
                                    <img src="<?php echo esc_url($desktop[0]); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                                </picture>
                                <?php else: ?>
                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/images/noimage2.jpg'); ?>" alt="<?php echo esc_attr__('noimage'); ?>">
                                <?php endif; ?>
                            </div>
                            <?php
                            $terms = get_the_terms($post->ID, 'result_tag');
                            if (!empty($terms)): ?>
                            <div class="result-list__tag c-post__tag">
                                <span>
                                    <?php foreach ($terms as $term): ?>
                                        <?php echo esc_html($term->name); ?>
                                    <?php endforeach; ?>
                                </span>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="result-list__title">
                            <h3>
                                <?php
                                if(mb_strlen($post->post_title)>38) {
                                $title = mb_substr($post->post_title,0,38); echo $title . '...';
                                } else {
                                echo esc_html($post->post_title);
                                }
                                ?>
                            </h3>
                            <p>
                                <time datetime="<?php echo get_the_time('Y-m-d'); ?>"><?php the_time('Y.m.d') ?></time>
                            </p>
                        </div>
                    </a>
                    <?php if($i == $total_count - 1): ?>
                    <?php endif; ?>
                    <?php else: // 奇数番目?>
                    <a href="<?php echo esc_url(get_permalink()); ?>" class="result-list__link">
                        <div class="result-list__thumbnail result-list__special">
                            <div class="result-list__image">
                                <?php if (has_post_thumbnail()) : ?>
                                <?php
                                $desktop = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large'); // デスクトップ用サイズ
                                $mobile = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large'); // モバイル用サイズ
                                ?>
                                <picture>
                                    <source srcset="<?php echo esc_url($mobile[0]); ?>" media="(max-width: 767px)">
                                    <img src="<?php echo esc_url($desktop[0]); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                                </picture>
                                <?php else: ?>
                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/images/noimage2.jpg'); ?>" alt="<?php echo esc_attr__('noimage'); ?>">
                                <?php endif; ?>
                            </div>
                            <?php
                            $terms = get_the_terms($post->ID, 'result_tag');
                            if (!empty($terms)): ?>
                            <div class="result-list__tag c-post__tag">
                                <span>
                                    <?php foreach ($terms as $term): ?>
                                        <?php echo esc_html($term->name); ?>
                                    <?php endforeach; ?>
                                </span>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="result-list__title">
                            <h3>
                                <?php
                                if(mb_strlen($post->post_title)>38) {
                                $title = mb_substr($post->post_title,0,38); echo $title . '...';
                                } else {
                                echo esc_html($post->post_title);
                                }
                                ?>
                            </h3>
                            <p>
                                <time datetime="<?php echo get_the_time('Y-m-d'); ?>"><?php the_time('Y.m.d') ?></time>
                            </p>
                        </div>
                    </a>
                    <!-- </div> -->
                    <?php endif; ?>
                    <?php $i++; ?>
                    <?php wp_reset_postdata(); ?>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <?php get_template_part('template-parts/pager', '', $the_query); ?>
            </div>
        </section>
    </main>
<?php get_footer(); ?>