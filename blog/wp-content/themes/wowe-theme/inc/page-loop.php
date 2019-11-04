<?php 
$args = array(
    'post_type' => 'page',
    'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field'    => 'id',
            'terms'    => 3
        ),
    ),
  );
  $query = new WP_Query( $args );
  ?>
  