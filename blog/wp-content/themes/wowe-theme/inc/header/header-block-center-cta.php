<header class="header">
    <div class="container flex center_cta">
        <div class="cta phone">
            <p>Call Us Now <br>    
            <span><?php echo get_theme_mod('phone', '800-123-1234'); ?></span></p>
        </div>
    <?php include get_template_directory().  '/inc/components/logo.php'; ?>
        <div class="cta"> 
            <a href="<?php echo $url ?>contact" class="btn"><?php echo get_theme_mod('cta_btn_text', 'Contact Us'); ?></a>
        </div>
    </div>
    <div class="flex center_cta">
        <?php include get_template_directory().  '/inc/components/nav.php'; ?>
    </div>
</header>


