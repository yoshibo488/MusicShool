<?php get_header(); ?>
    <main class="contact-form">
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
            ContactForm
        ===================== -->
        <section class="contact-form__contents">
            <div class="inner">
                <div class="contact-form__intro">
                    <p>
                        当校に関するご質問・ご相談・資料請求は下記のフォームからお気軽にお問い合わせください。<br>
                        通常３営業日以内にメールにてご連絡させていただきます。
                    </p>
                </div>
                <?php echo do_shortcode('[contact-form-7 id="25e5598" title="お問い合わせ"]'); ?>
            </div>
        </section>
    </main>
<?php get_footer(); ?>