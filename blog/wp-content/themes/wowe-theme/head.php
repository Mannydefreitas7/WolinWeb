<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script type="text/javascript" src="<?php echo get_bloginfo('template_url') . '/js/jquery.min.js' ?>"></script>
    <?php wp_head(); ?>
    <?php
        if ( get_theme_mod('homepage_slider') == true) {
    echo '
  <script type="text/javascript" src="' . get_bloginfo('template_url') . '/js/owl.carousel.min.js"></script>';
  
  $nav_type = get_theme_mod( 'homepage_slider_nav_type');
  $sliderplay = get_theme_mod( 'homepage_slider_play');
  $dots = 'false';
  $nav = 'false';
  $autoplay = 'false';
  $thumb = 'false';
  
  if ( $nav_type == 'arrows') { 
    $nav = 'true';
  } 
  elseif ( $nav_type == 'dots') { 
    $dots = 'true';
    
  }
  elseif ( $nav_type == 'thumbs') { 
    $thumb = 'true';
    echo '<script type="text/javascript" src="' . get_bloginfo('template_url') . '/js/owl.carousel2.thumbs.js"></script>';
  }   
  elseif ( $nav_type == 'none') { 
    $dots = 'false';
    $nav = 'false';
    $thumb = 'false';
  }        
  elseif ( $sliderplay == true) { 
    $autoplay = 'true';
  }  
       
  echo ' <script>
  $(document).ready(function(){
      $(".slider-home").owlCarousel(
        {
          nav: ' . $nav . ',
          navText: ["<i class=\'fa fa-angle-left fa-2x\'></i>","<i class=\'fa fa-angle-right fa-2x\'></i>"],
          items: 1,
          dots: ' . $dots . ',        
          touchDrag: true,
          autoplay: ' . $autoplay .',
          autoplayTimeout: 3000,        
          loop: true,
          autoWidth: true,
          center: true,
          thumbs: ' . $thumb . ',
          thumbImage: true
        }
      );
  
    });
  
  </script>  
  ';
  } ?>
  </head>