
<?php 

  $has_slider = get_theme_mod( 'homepage_slider'); 

if ( $has_slider == true) { ?>
<section class="section section-slider">
    <ul class="owl-carousel owl-theme slider-home">
        <?php 
        //for ($i = 1; $i <= 3 ; $i++) : ?>
         
        <li class="item">
            <img src="<?php echo get_theme_mod( 'slider_img_1'); ?>" alt="">
        <div class="slide-bg"></div>
        <div class="container">
            <div class="p-absolute slide-content flex flex-center flex-d-col z99">
        <h3><?php echo get_theme_mod( 'slider_heading_1'); ?></h3>
        <p><?php echo get_theme_mod( 'slider_text_1'); ?></p>
        <a  class="btn btn-primary margin-top-50" href="">Contact Us</a>
        </div>
        </div>
        </li>

        <li class="item">
            <img src="<?php echo get_theme_mod( 'slider_img_2'); ?>" alt="">
        <div class="slide-bg"></div>
        <div class="container">
            <div class="p-absolute slide-content flex flex-center flex-d-col z99">
        <h3><?php echo get_theme_mod( 'slider_heading_2'); ?></h3>
        <p><?php echo get_theme_mod( 'slider_text_2'); ?></p>
        <a  class="btn btn-primary margin-top-50" href="">Contact Us</a>
        </div>
        </div>
        </li>

        <li class="item">
            <img src="<?php echo get_theme_mod( 'slider_img_3'); ?>" alt="">
        <div class="slide-bg"></div>
        <div class="container">
            <div class="p-absolute slide-content flex flex-center flex-d-col z99">
        <h3><?php echo get_theme_mod( 'slider_heading_3'); ?></h3>
        <p><?php echo get_theme_mod( 'slider_text_3'); ?></p>
        <a  class="btn btn-primary margin-top-50" href="">Contact Us</a>
        </div>
        </div>
        </li>
      
<?php } // endfor; ?>
    </ul>
</section>



    