<?php get_header(); ?>
    <main class="plan">
        <!-- ====================
            SecondaryFV
        ===================== -->
        <section class="secondary-fv">
            <div class="secondary-fv__contents">
                <div class="secondary-fv__image">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/images/plan/plan-fv_sp.jpg" media="(max-width: 767px)">
                        <img src="<?php echo get_template_directory_uri() ?>/images/plan/plan-fv.jpg" alt="plan-fv">
                    </picture>
                </div>
                <div class="secondary-fv__text">
                    <h1 class="secondary-fv__heading">プラン・料金</h1>
                </div>
            </div>
            <?php get_template_part('template-parts/breadcrumb'); ?>
        </section>
        <!-- ====================
            PricingSystem
        ===================== -->
        <section class="plan-pricing__system plan-pricing-system">
            <div class="pricing__inner">
                <h2 class="plan-pricing-system__heading secondary__heading">料金体系</h2>
                <div>
                    <div class="plan-pricing-system__summary">
                        <div class="plan-pricing-system__membership">
                            <p>入会金 39,000円</p>
                        </div>
                        <div class="plan-pricing-system__monthly">
                            <p>月額料金</p>
                        </div>
                    </div>
                    <div class="plan-pricing-system__text">
                        <p>
                            きたむらミュージックスクールでは、個人に合わせたサポートを行う完全オーダーメイドのプランを用意しており、サポート内容により月額料金が異なります。担当者があなたに最適なプランを提案いたしますので、お気軽にお問い合わせください。※すべての料金は税込価格となります。
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====================
            PricingStructure
        ===================== -->
        <section class="plan-pricing__structure plan-pricing-structure">
            <div class="inner">
                <h2 class="plan-pricing-structure__heading secondary__heading">プラン内容・月額料金</h2>
                <div class="plan-pricing-structure__contents">
                    <div class="plan-pricing-structure__title">
                        <div><span></span></div>
                        <div class="plan-pricing-structure__basic"><p>ベーシックプラン</p></div>
                        <div class="plan-pricing-structure__standard"><p><span class="recommended">おすすめ</span><br>スタンダードプラン</p></div>
                        <div class="plan-pricing-structure__premium"><p>プレミアムプラン</p></div>
                    </div>
                    <div class="plan-pricing-structure__info">
                        <div class="plan-pricing-structure__term grid-item"><p>月額料金</p></div>
                        <div class="plan-pricing-structure__value grid-item"><p>39,000円</p></div>
                        <div class="plan-pricing-structure__value color-red grid-item"><p>59,000円</p></div>
                        <div class="plan-pricing-structure__value grid-item"><p>128,000円</p></div>
                        <div class="plan-pricing-structure__label bg-color-gray grid-item"><p>マンツーマン授業</p></div>
                        <div class="plan-pricing-structure__details sunspots-black bg-color-gray grid-item"><p>週１回</p></div>
                        <div class="plan-pricing-structure__details sunspots-red bg-color-gray grid-item"><p>週２回</p></div>
                        <div class="plan-pricing-structure__details sunspots-black bg-color-gray grid-item"><p>無制限</p></div>
                        <div class="plan-pricing-structure__label grid-item"><p>ビジネス基本講座</p></div>
                        <div class="plan-pricing-structure__details grid-item"><span class="sunspot-black"></span></div>
                        <div class="plan-pricing-structure__details grid-item"><span class="sunspot-red"></span></div>
                        <div class="plan-pricing-structure__details grid-item"><span class="sunspot-black"></span></div>
                        <div class="plan-pricing-structure__label bg-color-gray grid-item"><p>練習ROOM利用</p></div>
                        <div class="plan-pricing-structure__details sunspots-black bg-color-gray grid-item"><p>月10時間</p></div>
                        <div class="plan-pricing-structure__details sunspots-red bg-color-gray grid-item"><p>月20時間</p></div>
                        <div class="plan-pricing-structure__details sunspots-black bg-color-gray grid-item"><p>無制限</p></div>
                        <div class="plan-pricing-structure__label grid-item"><p>ビジネスコンサル</p></div>
                        <div class="plan-pricing-structure__details grid-item"><span class="gray-Line"></span></div>
                        <div class="plan-pricing-structure__details sunspots-red grid-item"><p>月２回</p></div>
                        <div class="plan-pricing-structure__details sunspots-black grid-item"><p>月３回</p></div>
                        <div class="plan-pricing-structure__label black-line bg-color-gray grid-item"><p>コミュニティ<br class="c-pc-none">参加資格</p></div>
                        <div class="plan-pricing-structure__details black-line bg-color-gray grid-item"><span class="gray-Line"></span></div>
                        <div class="plan-pricing-structure__details black-line bg-color-gray grid-item"><span class="gray-Line"></span></div>
                        <div class="plan-pricing-structure__details black-line bg-color-gray grid-item"><span class="sunspot-black"></span></div>
                    </div>
                </div>
                <div class="plan-pricing-structure__notes">
                    <p>※各サービスは１回ごとのオプション追加が可能です。詳しくは事務局までお問い合わせください。</p>
                </div>
            </div>
        </section>
    </main>
    <?php get_footer(); ?>