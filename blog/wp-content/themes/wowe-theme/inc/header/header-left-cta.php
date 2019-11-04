<header class="header">
    <div class="container flex">
       <?php include get_template_directory(). '/inc/components/logo.php'; ?>
        <div class="flex left_cta">
            <div class="cta"> 
                <a href="<?php echo $url ?>contact" class="btn"><?php echo get_theme_mod('cta_btn_text', 'Contact Us'); ?></a>
            </div>
            <?php include get_template_directory(). '/inc/components/nav.php'; ?>
        </div>
    </div>
</header>
