<?php get_header(); 

if (get_theme_mod('homepage_banner') == true ) {

    include get_template_directory(). '/inc/components/banner.php';

} else if (get_theme_mod('homepage_slider') == true) {

    include get_template_directory(). '/inc/components/slider.php';
}

include get_template_directory(). '/inc/page-loop.php';
if (get_theme_mod('display_services') == true) { 
    if (get_theme_mod('homepage_services_type') == 'cards') { ?>

<section class="section homepage">
  <div class="section-services">
      <div class="container">
        <h2>Our Services</h2>
          <ul class="services flex flex-justify-between flex-align-center flex-wrap">
            <?php while($query->have_posts()): $query->the_post(); ?>
                <li class="service card card-shadow">
                    <div class="wrap_img wrap_img-round">
                      <?php the_post_thumbnail(); ?>
                    </div>
                    <h3><?php the_title();?></h3>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn btn-outline">Learn More</a>
                </li>
              <?php endwhile; ?>
          </ul>
        </div>
    </div>
</section>

<?php } else if ( get_theme_mod('homepage_services_type') == 'stacked' ) { ?>
<section class="section homepage">
    <div class="container">
      <h2>Our Services</h2>
    </div>
  <ul class="section-services stacked">
    <?php while($query->have_posts()): $query->the_post(); ?> 
      <li class="service">
        <div class="container flex flex-justify-between">
            <div class="wrap_img wrap_img-round">
              <?php the_post_thumbnail(); ?>
            </div>
            <div class="service-content">
              <h3><?php the_title();?></h3>
              <p><?php the_excerpt(); ?></p>
              <a href="<?php the_permalink(); ?>" class="btn btn-inline-block btn-outline">Learn More</a>
            </div>
        </div> 
      </li>
    <?php endwhile; ?>
</section>

<?php }
}
while(have_posts()) : the_post(); ?>

<?php the_content(); 
endwhile; 
?>

<?php
if(is_active_sidebar('home_section_2')) : 
  dynamic_sidebar('home_section_2'); 
endif; 
if(is_active_sidebar('home_section_5')) : 
  dynamic_sidebar('home_section_5'); 
endif; 
if(is_active_sidebar('home_section_5')) : 
  dynamic_sidebar('home_section_5'); 
endif; 
if(is_active_sidebar('home_section_5')) : 
  dynamic_sidebar('home_section_5'); 
endif; 
if(is_active_sidebar('home_section_5')) : 
  dynamic_sidebar('home_section_5'); 
endif; 
if(is_active_sidebar('home_section_5')) : 
  dynamic_sidebar('home_section_5'); 
endif; 
 get_footer(); ?>
