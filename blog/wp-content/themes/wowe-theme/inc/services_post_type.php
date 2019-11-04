<?php
function create_post_type() {
    register_post_type( 'wowe_services',
      array(
        'labels' => array(
          'name' => __( 'Services' ),
          'singular_name' => __( 'Service' ),
          'edit_item' => __( 'Edit Service' ), 
          'update_item' => __( 'Update Service' ),
          'add_new_item' => __( 'Add New Service' ),
          'new_item_name' => __( 'New Service' )
        ),
        'menu_icon' => 'dashicons-plus-alt',
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'services'),
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'tags','page-attributes'),
        'taxonomies'  => array( 'category','tag' ),
        'description' => 'Add, Edit or Update your Service'
      )
    );
  }

  ?>