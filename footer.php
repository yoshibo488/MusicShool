<footer class="footer">
        <div class="fixed">
            <?php if (!is_page(array('contact', 'contact-send')) && !is_404()) : ?>
                <div id="fas-area"></div>
                <div class="inquiry-button c-btn">
                    <a href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a>
                </div>
                <div class="button-placeholder"></div>
            <?php elseif(is_page('contact')): ?>
                <div id="contact-form-fas-area" aria-hidden="true"></div>
            <?php endif; ?>
        </div>
        <div class="footer__contents c-bg-color">
            <div class="inner">
                <div class="footer__content">
                    <?php
                    wp_nav_menu(array(
                    'menu' => 'footer',
                    'fallback_cb' => false,
                    'menu_class' => 'footer__nav',
                    'container' => false,
                    ));
                    ?>
                    <div class="footer__logo">
                        <?php
                        $logo_url = get_theme_file_uri('/images/top-page/logo-white.svg');
                        $link_url = is_front_page() ? '#top-fv' : home_url('/');
                        ?>
                        <a href="<?php echo esc_url($link_url); ?>">
                            <img src="<?php echo esc_url($logo_url); ?>" alt="symbol">
                        </a>
                    </div>
                    <div class="footer__copyright">
                        <small>Copyright &copy; 0000 KITAMURA music school Inc. All Rights</small>
                    </div>
                    <div class="footer__sns footer-sns">
                        <?php
                        $url = get_permalink();
                        $title = get_the_title();
                        ?>
                        <a href="<?php echo esc_url( 'https://twitter.com/share?url=' . $url . '&text=' . $title ); ?>" class="footer-sns__icon" target="_blank" rel="noopener">
                            <img src="<?php echo get_template_directory_uri() ?>/images/top-page/icon-twitter.svg" alt="twitter">
                        </a>
                        <a href="<?php echo esc_url( 'https://www.facebook.com/share.php?u=' . $url ); ?>" class="footer-sns__icon" target="_blank" rel="noopener">
                            <img src="<?php echo get_template_directory_uri() ?>/images/top-page/icon-facebook.svg" alt="facebook">
                        </a>
                        <a href="#" class="footer-sns__icon" target="_blank" rel="noopener">
                            <img src="<?php echo get_template_directory_uri() ?>/images/top-page/icon-youtube.svg" alt="youtube">
                        </a>
                        <a href="#" class="footer-sns__icon" target="_blank" rel="noopener">
                            <img src="<?php echo get_template_directory_uri() ?>/images/top-page/icon-instagram.svg" alt="instagram">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>