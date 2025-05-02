<div class="post-navigation__related post-navigation-related 
    <?php if($args['post_type'] == 'blog'): echo 'blog-details__related'; endif; ?>">
    <?php
    $terms = get_the_terms($post->ID, $args['post_type'] .'_tag');
    if(!empty($terms)):
    foreach ( $terms as $term ):
        $args = array(
        'posts_per_page' => 3,
        'post_type' => $args['post_type'],
        'taxonomy' => $args['post_type'] . '_tag',
        'term' => $term->slug,
        'orderby' => 'date',
        'order' => 'DESC'
        );
        $the_query = new WP_Query($args);
    ?>
    <div class="post-navigation-related__heading">
        <span>関連記事</span>
    </div>
    <div class="post-navigation-related__contents">
        <?php if( $the_query->have_posts() ):
        while( $the_query->have_posts() ): $the_query->the_post(); ?>
        <a href="<?php echo esc_url(get_the_permalink()); ?>" class="post-navigation-related__link blog-details-related__link">
            <div class="post-navigation-related__thumbnail blog-details-related__thumbnail">
                <div class="post-navigation-related__image">
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
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/images/noimage.jpg'); ?>" alt="noimage">
                    <?php endif; ?>
                </div>
                <?php
                $current_post_type = get_post_type();
                if ($current_post_type === 'blog' || $current_post_type === 'result') {
                    $taxonomy = ($current_post_type === 'blog') ? 'blog_tag' : 'result_tag';
                    $terms = get_the_terms($post->ID, $taxonomy);
                    if (!empty($terms) && !is_wp_error($terms)): ?>
                        <div class="blog-details__tag c-post__tag">
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
            <div class="post-navigation-related__text 
            <?php if($args['post_type'] == 'blog'): echo "blog-details-related__text"; endif; ?>">
                <p class="title-desktop title-mobile">
                    <?php
                    $mobile_title = mb_strlen($post->post_title) > 25 ? mb_substr($post->post_title,0,25).'...' : $post->post_title;
                    $desktop_title = mb_strlen($post->post_title) > 34 ? mb_substr($post->post_title,0,34).'...' : $post->post_title;
                    ?>
                    <span class="mobile-text"><?php echo $mobile_title; ?></span>
                    <span class="desktop-text"><?php echo $desktop_title; ?></span>
                </p>
                <p><time datetime="<?php echo get_the_time('Y-m-d'); ?>"><?php the_time('Y.m.d') ?></time></p>
            </div>
        </a>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php else: //関連記事がない場合のダミーコンテンツ?>
        <div class="no-related-posts" style="height: 1px; visibility: hidden;"></div>
        <?php endif; ?>
    </div>
        <?php endforeach; ?>
        <?php else: // タームが存在しない場合のダミーコンテンツ ?>
        <div class="no-related-terms" style="height: 1px; visibility: hidden;"></div>
        <?php endif; ?>
</div>