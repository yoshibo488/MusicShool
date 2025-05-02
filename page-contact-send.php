<?php get_header(); ?>
    <main class="contact-send">
        <!-- ====================
            SecondaryFV
        ===================== -->
        <section class="secondary-fv">
            <div class="secondary-fv__contents">
                <div class="secondary-fv__image">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/images/contact-form/contact_form-fv-sp.jpg" media="(max-width: 767px)">
                        <img src="<?php echo get_template_directory_uri() ?>/images/contact-form/contact_form-fv.jpg" alt="plan-fv">
                    </picture>
                </div>
                <div class="secondary-fv__text">
                    <h1 class="secondary-fv__heading">お問い合わせ</h1>
                </div>
            </div>
            <?php get_template_part('template-parts/breadcrumb'); ?>
        </section>
        <!-- ====================
            ContactSend
        ===================== -->
        <section class="contact-send__sec">
            <div class="inner">
                <div class="contact-send__text">
                    <p>
                        お問い合わせいただきありがとうございました。<br>
                        内容確認後、担当者よりメールにてご連絡いたします。
                    </p>
                </div>
                <div class="contact-send__btn c-btn">
                    <a href="<?php echo esc_url(home_url('/')); ?>">ホームへ戻る</a>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>