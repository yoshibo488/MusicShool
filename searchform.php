<form action="<?php echo esc_url(home_url('/')); ?>" method="get">
    <div class="blog-details__search blog-details-search">
        <div class="blog-details-aside__heading">
            <p>ブログ内を検索</p>
        </div>
        <div class="blog-details-search__contents">
            <div class="blog-details-search__input">
                <input type="search" name="s">
            </div>
            <div class="blog-details-search__image">
                <input type="image" src="<?php echo get_template_directory_uri() ?>/images/blog-details/icon-search.jpg" alt="検索">
            </div>
        </div>
    </div>
</form>