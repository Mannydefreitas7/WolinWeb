<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <?php require('head.php'); ?>
  <body>
<?php 

  $header_option = get_theme_mod( 'header_type'); 
  
      if ( $header_option == 'header-block-center-cta') {
        include (get_template_directory().  '/inc/header/header-block-center-cta.php');

      }
      elseif( $header_option == 'header-block-center') {
        include get_template_directory().  '/inc/header/header-block-center.php';
 
      }
      elseif( $header_option == 'header-block-left-cta') {
        include get_template_directory().  '/inc/header/header-left-cta.php';

      }
      elseif( $header_option == 'header-left-cta') {
        include get_template_directory().  '/inc/header/header-left-cta.php';

      }
      elseif( $header_option == 'header-left-phone') {
        include get_template_directory().  '/inc/header/header-left-phone.php';

      }
      else if ( $header_option == 'header-left') {
        include get_template_directory().  '/inc/header/header-left.php';
 
      }
      else {
        include get_template_directory().  '/inc/header/header-left.php';
      }
?>