
<?php 
  $has_banner = get_theme_mod( 'homepage_banner'); 
  $is_parallax = get_theme_mod( 'is_parallax');
if ( $has_banner == true && $is_parallax == false) { ?>

<section class="section-parallax">
   <div class="cover"><img src="<?php echo get_theme_mod( 'banner_img'); ?>" /></div>
    <div class="bannerMask"></div>
        <div class="container p-relative z50 flex flex-center height100">
            <div class="banner-text flex flex-center flex-d-col">
              <h2><?php echo get_theme_mod( 'banner_heading'); ?></h2>
              <p><?php  echo get_theme_mod( 'banner_text'); ?></p>
              <a href="<?php echo get_theme_mod( 'banner_btn_url'); ?>" class="btn btn-primary"><?php echo get_theme_mod( 'banner_btn_text'); ?></a>
            </div>
        </div>
</section>
<?php
      }
      elseif ( $has_banner == true && $is_parallax == true) {  ?>

<section class="section-parallax special" data-scrollax-parent="true">
   <div class="cover" data-scrollax="properties: { translateY: '30%' }"><img src="<?php echo get_theme_mod( 'banner_img'); ?>" /></div>
   <div class="bannerMask"></div>
   <div class="container p-relative z50" data-scrollax="properties: { 'translateY': '150%', 'opacity': 1.5 }">
         <div class="banner-text flex flex-center flex-d-col" style="transform: translateY(100%);" >
              <h2><?php echo get_theme_mod( 'banner_heading'); ?></h2>
              <p><?php echo get_theme_mod( 'banner_text'); ?></p>
              <a href="<?php echo get_theme_mod( 'banner_btn_url'); ?>" class="btn btn-primary"><?php echo get_theme_mod( 'banner_btn_text'); ?></a>
         </div>
     </div>
</section>
      <?php } ?>

    