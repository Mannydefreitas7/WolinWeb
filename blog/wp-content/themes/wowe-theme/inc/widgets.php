<?php function wpb_init_widgets($id){
  register_sidebar(array(
    'name'  => 'Sidebar',
    'id'    => 'sidebar',
    'before_widget' => '<div class="sidebar-module">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>'
  ));

  register_sidebar(array(
    'name'  => 'Home Section 1',
    'id'    => 'home_section_1',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => ''
  ));
  register_sidebar(array(
    'name'  => 'Home Section 2',
    'id'    => 'home_section_2',
    'before_widget' => '<section class="section homepage">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>'
  ));
  register_sidebar(array(
    'name'  => 'Home Section 3',
    'id'    => 'home_section_3',
    'before_widget' => '<section class="section homepage">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>'
  ));
  register_sidebar(array(
    'name'  => 'Home Section 4',
    'id'    => 'home_section_4',
    'before_widget' => '<section class="section homepage">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>'
  ));
  register_sidebar(array(
    'name'  => 'Home Section 5',
    'id'    => 'home_section_5',
    'before_widget' => '<section class="section homepage">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>'
  ));
  register_sidebar(array(
    'name'  => 'Home Section 6',
    'id'    => 'home_section_6',
    'before_widget' => '<section class="section homepage">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>'
  ));
  
}
?>
