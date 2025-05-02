<aside class="blog-details__aside blog-details-aside">
    <div class="blog-details__banner blog-details-banner">
        <div class="blog-details-aside__heading">
            <p>
                無料メールマガジン
            </p>
        </div>
        <div class="blog-details-banner__content">
            <a href="#" class="blog-details-banner__link">
                <span>バナー広告</span>
            </a>
        </div>
    </div>
    <?php get_search_form(); ?>
    <div class="blog-details__recommend blog-details-recommend">
        <?php
        $args = array(
            'posts_per_page' => 3,
            'post_type' => 'blog',
            'taxonomy' => 'blog_recommend',
            'term' => 'on',
            'orderby' => 'date',
            'order' => 'DESC'
        );
        $the_query = new WP_Query($args);
        ?>
        <div class="blog-details-aside__heading">
            <p>
                おすすめの記事
            </p>
        </div>
        <div>
            <?php if($the_query->have_posts()):
            while ($the_query->have_posts()): $the_query->the_post(); ?>
            <a href="<?php echo esc_url(get_permalink()); ?>" class="blog-details-recommend__link">
                <div class="blog-details-recommend__image">
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
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/images/noimage.jpg'); ?>" alt="noimage">
                    <?php endif; ?>
                </div>
                <div class="blog-details-recommend__text">
                    <p>
                        <?php
                        if(mb_strlen($post->post_title)>15) {
                        $title = mb_substr($post->post_title,0,15); echo $title . '...';
                        } else {
                        echo esc_html(get_the_title());
                        }
                        ?>
                    </p>
                </div>
            </a>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="blog-details__category blog-details-category">
        <div class="blog-details-aside__heading">
            <p>カテゴリー</p>
        </div>
        <div class="blog-details-category__list">
            <ul>
                <?php
                $terms = get_terms(array(
                    'taxonomy' => 'blog_tag',
                    'hide_empty' => false, // 空のタームも取得
                ));
                if (!empty($terms) && !is_wp_error($terms)) :
                ?>
                <?php foreach ($terms as $term) : ?>
                    <li><a href="<?php echo esc_url(get_term_link($term->slug, 'blog_tag')); ?>"><?php echo esc_html($term->name); ?></a></li>
                <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</aside>