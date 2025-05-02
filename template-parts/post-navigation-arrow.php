<div class="post-navigation__arrow post-navigation-arrow
<?php if($args['post_type'] == 'blog'): echo "blog-details__arrow"; elseif
    ($args['post_type'] == 'result'): echo "result-details__arrow"; endif; ?>">
    <?php
    $prev_post = get_previous_post();
    $next_post = get_next_post();
    ?>
    <?php if (!empty($prev_post)): ?>
    <a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>" class="post-navigation-arrow__link
    <?php if($args['post_type'] == 'blog'): echo "blog-details-arrow__link"; elseif
    ($args['post_type'] == 'result'): echo "result-details-arrow__link"; endif; ?>">
        <div class="post-navigation-arrow__heading">
            <span class="post-navigation-arrow__previous">◀︎ 前の記事</span>
        </div>
        <div class="post-navigation-arrow__content">
            <?php if(!empty($args) && $args['image_area'] == 'has'): ?>
                <div class="post-navigation-arrow__image c-sp-none">
                    <?php if(get_the_post_thumbnail_url($prev_post->ID)): ?>
                        <img src="<?php echo get_the_post_thumbnail_url($prev_post->ID); ?>" alt="前の記事">
                    <?php else: ?>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/images/noimage.jpg'); ?>" alt="noimage">
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <div class="post-navigation-arrow__text">
                <?php
                if(mb_strlen($prev_post->post_title)>25) {
                $title = mb_substr($prev_post->post_title,0,25); echo $title . '...';
                } else {
                echo $prev_post->post_title;
                }
                ?>
            </div>
        </div>
    </a>
    <?php else: ?>
        <div class="post-navigation__arrow post-navigation-arrow
        <?php if($args['post_type'] == 'blog'): echo "blog-details__arrow"; elseif
            ($args['post_type'] == 'result'): echo "result-details__arrow"; endif; ?>">
            <a href="#" class="post-navigation-arrow__link
            <?php if($args['post_type'] == 'blog'): echo "blog-details-arrow__link"; elseif
            ($args['post_type'] == 'result'): echo "result-details-arrow__link"; endif; ?>">
                <div class="post-navigation-arrow__heading">
                    <span></span>
                </div>
                <div class="post-navigation-arrow__content">
                    <div class="post-navigation-arrow__image c-sp-none">
                    </div>
                    <div class="post-navigation-arrow__text">
                    </div>
                </div>
            </a>
        </div>
    <?php endif; ?>
    <?php if (!empty($next_post)): ?>
    <a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>" class="post-navigation-arrow__link
    <?php if($args['post_type'] == 'blog'): echo "blog-details-arrow__link"; elseif
    ($args['post_type'] == 'result'): echo "result-details-arrow__link"; endif; ?>">
        <div class="post-navigation-arrow__heading">
            <span class="post-navigation-arrow__next">次の記事 ▶︎</span>
        </div>
        <div class="post-navigation-arrow__content">
            <?php if(!empty($args) && $args['image_area'] == 'has'): ?>
                <div class="post-navigation-arrow__image c-sp-none">
                    <?php if(get_the_post_thumbnail_url($next_post->ID)): ?>
                        <img src="<?php echo get_the_post_thumbnail_url($next_post->ID); ?>" alt="次の記事">
                    <?php else: ?>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/images/noimage.jpg'); ?>" alt="noimage">
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <div class="post-navigation-arrow__text">
                <?php
                if(mb_strlen($next_post->post_title)>25) {
                $title = mb_substr($next_post->post_title,0,25); echo $title . '...';
                } else {
                echo $next_post->post_title;
                }
                ?>
            </div>
        </div>
    </a>
    <?php else: ?>
        <div class="post-navigation__arrow post-navigation-arrow
        <?php if($args['post_type'] == 'blog'): echo "blog-details__arrow"; elseif
            ($args['post_type'] == 'result'): echo "result-details__arrow"; endif; ?>">
            <a href="#" class="post-navigation-arrow__link
            <?php if($args['post_type'] == 'blog'): echo "blog-details-arrow__link"; elseif
            ($args['post_type'] == 'result'): echo "result-details-arrow__link"; endif; ?>">
                <div class="post-navigation-arrow__heading">
                    <span></span>
                </div>
                <div class="post-navigation-arrow__content">
                    <div class="post-navigation-arrow__image c-sp-none">
                    </div>
                    <div class="post-navigation-arrow__text">
                    </div>
                </div>
            </a>
        </div>
    <?php endif; ?>
</div>