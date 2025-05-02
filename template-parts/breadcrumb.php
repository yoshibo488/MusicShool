<div class="secondary-fv__breadcrumb <?php echo (is_singular('blog')) ? 'u-col-two' : (is_singular('result') ? 'u-col-three' : ''); ?>" typeof="BreadcrumbList" vocab="https://schema.org/">
    <div class="breadcrumb__inner">
        <?php if(function_exists('bcn_display')) { bcn_display(); }?>
    </div>
</div>