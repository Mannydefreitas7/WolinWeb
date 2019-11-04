<header class="header">
    <div class="container flex">
       <?php include get_template_directory(). '/inc/components/logo.php'; ?>
        <div class="flex left_cta cta_phone">
            <div class="cta phone">
                <p>Call Us Now <br>    
                <span><?php echo get_theme_mod('phone', '800-123-1234'); ?></span></p>
            </div>
            <?php include get_template_directory(). '/inc/components/nav.php'; ?>
        </div>
    </div>
</header>