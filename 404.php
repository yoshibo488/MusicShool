<?php get_header(); ?>
    <main class="error-page">
        <!-- ====================
            SecondaryFV
        ===================== -->
        <section class="secondary-fv">
            <div class="secondary-fv__contents">
                <div class="secondary-fv__image">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/images/404/404-sp.jpg" media="(max-width: 767px)">
                        <img src="<?php echo get_template_directory_uri() ?>/images/404/404-pc.jpg" alt="plan-fv">
                    </picture>
                </div>
                <div class="secondary-fv__text">
                    <h1 class="secondary-fv__heading">404 not fonud</h1>
                </div>
            </div>
        </section>
        <!-- ====================
            404
        ===================== -->
        <section class="error-page__sec">
            <div class="inner">
                <div class="error-page__text">
                    <p>
                        申し訳ございませんが、お探しのページが見つかりませんでした。<br>
                        お探しのページは一時的に表示ができない状態にあるか、移動または削除された可能性があります。
                    </p>
                </div>
                <div class="error-page__btn c-btn">
                    <a href="<?php echo esc_url(home_url('/')); ?>">ホームへ戻る</a>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>