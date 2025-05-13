jQuery(function ($) {
    // ハンバーガー
    $("#hamburger-block").click(function (event) {
        event.stopPropagation();
        $(".c-header-menu").toggle(300);
        $(".c-hamburger").toggleClass("active");
    });
    $(document).click(function (event) {
        if (!$(event.target).closest('.c-header-menu').length && !$(event.target).closest('#hamburger-block').length) {
            $(".c-header-menu").hide(300);
            $(".c-hamburger").removeClass("active");
        }
    });

    // slider
    $('#slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: `<img src="${sliderPaths.arrows.desktop.prev}" class="slide-arrow prev-arrow">`,
        nextArrow: `<img src="${sliderPaths.arrows.desktop.next}" class="slide-arrow next-arrow">`,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                prevArrow: `<img src="${sliderPaths.arrows.mobile.prev}" class="slide-arrow prev-arrow">`,
                nextArrow: `<img src="${sliderPaths.arrows.mobile.next}" class="slide-arrow next-arrow">`
            }
        }]
    });

    // アコーディオンメニュー
    $('.top-faq__question').on('click', function () {
        $(this).next().slideToggle();
    });

    $('.top-faq-question__title').on('click', function () {
        $(this).toggleClass('active');
    });

    // .top-faq-accordion-list-wrapper__noneをクリックしたときにアコーディオンを閉じる
    $('.top-faq__answer').on('click', function () {
        $(this).slideUp();
        $(this).prev().find('.top-faq-question__title').removeClass('active'); // アクティブクラスを削除
    });

    // トップへ戻るボタン
    var goTop = $(".contact-form-fixed, .fixed");
    var footer = $(".footer__contents");
    goTop.hide();

    $(window).scroll(function () {
        var scrollTop = $(this).scrollTop();
        var footerTop = $(".footer__contents").offset().top;
        var footerHeight = $(".footer__contents").outerHeight();

        if (scrollTop > 100) {
            goTop.fadeIn(300);
        } else {
            goTop.fadeOut(300);
        }

        if (scrollTop + $(window).height() < footerTop || scrollTop > footerTop + footerHeight) {
            $("#contact-form-fas-area").addClass("active");
            $("#fas-area").addClass("active");
            $(".inquiry-button").addClass("active");
            $(".button-placeholder").addClass("active");
        } else {
            $("#contact-form-fas-area").removeClass("active");
            $("#fas-area").removeClass("active");
            $(".inquiry-button").removeClass("active");
            $(".button-placeholder").removeClass("active");
        }
    });


    $("#fas-area, #contact-form-fas-area").click(function () {
        $("html, body").animate({ scrollTop: 0 }, 1000);
        return false;
    });

    // スムーススクロール
    $('a[href^="#"]').each(function () {
        $(this).on('click', function (e) {
            e.preventDefault();
            const href = $(this).attr('href');
            const targetSection = $(href);
            const sectionTop = targetSection.offset().top - $('.header').height();
            $('html, body').animate({
                scrollTop: sectionTop
            }, 800, 'swing');
        });
    });

    //ヘッダー遅延表示
    $('body').show();

    // フォーム送信エラー時の処理
    $(document).on('wpcf7:invalid', function(event) {
        $.each(event.detail.apiResponse.invalidFields, function(index, field) {
            $(field.into).find('.wpcf7-not-valid-tip').show();
        });
    });

    // フォームリセット時の処理
    $(document).on('wpcf7:reset', function(event) {
        $('.wpcf7-not-valid-tip').hide();
    });

    // 入力フィールドのリアルタイムバリデーション無効化
    $('.wpcf7-form').on('input change', '.wpcf7-form-control', function() {
        $(this).removeClass('wpcf7-not-valid');
        $(this).closest('.wpcf7-form-control-wrap').find('.wpcf7-not-valid-tip').hide();
    });

});
