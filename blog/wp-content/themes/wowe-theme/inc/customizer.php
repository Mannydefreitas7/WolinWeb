<?php

  function wowe_customize_register($wp_customize) {

    $wp_customize->add_panel( 'wolinweb', array(
      'priority'       => 10,
      'capability'     => 'edit_theme_options',
      'theme_supports' => '',
      'title'          => __('WolinWeb'),
      'description'    => 'WolinWeb Template Custom Options',
  ) );
        // General Section
     $wp_customize->add_section('general', array(
      'title'   => __('General', 'wowe-theme'),
      'description' => sprintf(__('General Settings','wowe-theme')),
      'capability'  => 'edit_theme_options',
      'priority'    => 10,
      'panel'       => 'wolinweb'
    ));
    
    $wp_customize->add_setting('header_type', array(
      'default'   => 'header-block-center',
      'sanitize_callback' => 'themeslug_sanitize_select',
      'type'       => 'theme_mod',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'header_type', array(
      'label'   => __('Header Type', 'wowe-theme'),
      'description' => __( 'Change Header Type' ),
      'settings' => 'header_type',
      'priority'  => 1,
      'section' => 'general',
      'type'    => 'select',
      'choices' => array(
          'header-block-center-cta' => _('Block Center Cta'),
          'header-block-center' => _('Block Center'),
          'header-block-left-cta' => _('Block Left Cta'),
          'header-left-cta' => _('Left Cta'),
          'header-left-phone' => _('Left Phone'),
          'header-left' => _('Left'),
      ))));

      function themeslug_sanitize_select( $input, $setting ) {

        // Ensure input is a slug.
        $input = sanitize_key( $input );
      
        // Get list of choices from the control associated with the setting.
        $choices = $setting->manager->get_control( $setting->id )->choices;
      
        // If the input is a valid key, return it; otherwise, return the default.
        return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
      }

      $wp_customize->add_setting('logo_url', array(
        'default'   => get_bloginfo('template_directory') . '/img/logo.png',
        'type'      => 'theme_mod',
        'panel'       => 'wolinweb'
      ));

      $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo_url', array(
        'label'   => __('Logo', 'wowe-theme'),
        'section' => 'general',
        'settings' => 'logo_url',
        'priority'  => 2
      )));
      $wp_customize->add_setting('phone', array(
        'default'   => '800-123-1234',
        'type'      => 'theme_mod',
      ));

      $wp_customize->add_control('phone', array(
        'label'   => __('Phone Number', 'wowe-theme'),
        'section' => 'general',
        'settings' => 'phone',
        'priority'  => 3
      ));
      $wp_customize->add_setting('cta_btn_text', array(
        'default'   => 'Call Us Now',
        'type'      => 'theme_mod',
      ));
      $wp_customize->add_control('cta_btn_text', array(
        'label'   => __('CTA Button Text', 'wowe-theme'),
        'section' => 'general',
        'settings' => 'cta_btn_text',
        'priority'  => 4
      ));

    // Homepage Banner Section
    $wp_customize->add_section('homepage_banner', array(
      'title'   => __('Banner Settings', 'wowe-theme'),
      'description' => sprintf(__('Banner Customization','wowe-theme')),
      'priority'    => 2,
      'panel'       => 'wolinweb'
    ));

    $wp_customize->add_setting('homepage_banner', array(
      'default'   => true,
      'sanitize_callback' => 'themeslug_sanitize_select',
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'homepage_banner', array(
      'label'   => __('Show Banner'),
      'section' => 'homepage_banner',
      'description' => __( 'Choose to show Banner' ),
      'settings' => 'homepage_banner',
      'priority'  => 1,
      'type'    => 'radio',
      'choices' => array(
          true => _('Yes'),
          false => _('No')
    ))));

    $wp_customize->add_setting('is_parallax', array(
      'default'   => false,
      'sanitize_callback' => 'themeslug_sanitize_select',
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'is_parallax', array(
      'label'   => __('Parallax Effect?'),
      'section' => 'homepage_banner',
      'description' => __( 'Have a parallax effect on image' ),
      'settings' => 'is_parallax',
      'priority'  => 2,
      'type'    => 'radio',
      'choices' => array(
          true => _('Yes'),
          false => _('No')
    ))));

    $wp_customize->add_setting('banner_img', array(
      'default'   => '',
      'type'      => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_img', array(
      'label'   => __('Banner Image'),
      'section' => 'homepage_banner',
      'settings' => 'banner_img',
      'priority'  => 3
    )));


    $wp_customize->add_setting('banner_heading', array(
      'default'   => _x('Custom Bootstrap Wordpress Theme', 'wowe-theme'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('banner_heading', array(
      'label'   => __('Heading', 'wowe-theme'),
      'section' => 'homepage_banner',
      'priority'  => 10
    ));

    $wp_customize->add_setting('banner_text', array(
      'default'   => _x('Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam', 'wowe-theme'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('banner_text', array(
      'label'   => __('Text', 'wowe-theme'),
      'section' => 'homepage_banner',
      'priority'  => 30
    ));

    $wp_customize->add_setting('banner_btn_url', array(
      'default'   => _x('http://test.com', 'wowe-theme'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('banner_btn_url', array(
      'label'   => __('Button URL', 'wowe-theme'),
      'section' => 'homepage_banner',
      'priority'  => 40
    ));

    $wp_customize->add_setting('banner_btn_text', array(
      'default'   => _x('Read More', 'wowe-theme'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('banner_btn_text', array(
      'label'   => __('Button Text', 'wowe-theme'),
      'section' => 'homepage_banner',
      'priority'  => 50
    ));

    // Homepage Slider Section
    $wp_customize->add_section('homepage_slider', array(
      'title'   => __('Slider Settings', 'wowe-theme'),
      'description' => sprintf(__('Slider Customization','wowe-theme')),
      'priority'    => 3,
      'panel'       => 'wolinweb'
    ));

    $wp_customize->add_setting('homepage_slider', array(
      'default'   => false,
      'sanitize_callback' => 'themeslug_sanitize_select',
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'homepage_slider', array(
      'label'   => __('Show Slider?'),
      'section' => 'homepage_slider',
      'description' => __( 'Choose to show Slider' ),
      'settings' => 'homepage_slider',
      'priority'  => 1,
      'type'    => 'radio',
      'choices' => array(
          true => _('Yes'),
          false => _('No')
    ))));

    $wp_customize->add_setting('slider_img_1', array(
      'default'   => '',
      'type'      => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_img_1', array(
      'label'   => __('Banner Image 1'),
      'section' => 'homepage_slider',
      'settings' => 'slider_img_1',
      'priority'  => 2
    )));

    $wp_customize->add_setting('slider_img_2', array(
      'default'   => '',
      'type'      => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_img_2', array(
      'label'   => __('Banner Image 2'),
      'section' => 'homepage_slider',
      'settings' => 'slider_img_2',
      'priority'  => 5
    )));

    $wp_customize->add_setting('slider_img_3', array(
      'default'   => '',
      'type'      => 'theme_mod',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_img_3', array(
      'label'   => __('Banner Image 3'),
      'section' => 'homepage_slider',
      'settings' => 'slider_img_3',
      'priority'  => 8
    )));


    $wp_customize->add_setting('slider_heading_1', array(
      'default'   => _x('Custom Bootstrap Wordpress Theme', 'wowe-theme'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('slider_heading_1', array(
      'label'   => __('Heading 1', 'wowe-theme'),
      'section' => 'homepage_slider',
      'priority'  => 3
    ));

    $wp_customize->add_setting('slider_text_1', array(
      'default'   => _x('Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam', 'wowe-theme'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('slider_text_1', array(
      'label'   => __('Text 1', 'wowe-theme'),
      'section' => 'homepage_slider',
      'priority'  => 4
    ));

    $wp_customize->add_setting('slider_heading_2', array(
      'default'   => _x('Custom Bootstrap Wordpress Theme', 'wowe-theme'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('slider_heading_2', array(
      'label'   => __('Heading 2', 'wowe-theme'),
      'section' => 'homepage_slider',
      'priority'  => 6
    ));


    $wp_customize->add_setting('slider_text_2', array(
      'default'   => _x('Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam', 'wowe-theme'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('slider_text_2', array(
      'label'   => __('Text 2', 'wowe-theme'),
      'section' => 'homepage_slider',
      'priority'  => 7
    ));

    $wp_customize->add_setting('slider_heading_3', array(
      'default'   => _x('Custom Bootstrap Wordpress Theme', 'wowe-theme'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('slider_heading_3', array(
      'label'   => __('Heading 3', 'wowe-theme'),
      'section' => 'homepage_slider',
      'priority'  => 9
    ));


    $wp_customize->add_setting('slider_text_3', array(
      'default'   => _x('Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam', 'wowe-theme'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('slider_text_3', array(
      'label'   => __('Text 3', 'wowe-theme'),
      'section' => 'homepage_slider',
      'priority'  => 10
    ));

    $wp_customize->add_setting('banner_btn_url', array(
      'default'   => _x('http://test.com', 'wowe-theme'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('banner_btn_url', array(
      'label'   => __('Button URL', 'wowe-theme'),
      'section' => 'homepage_slider',
      'priority'  => 70
    ));

    $wp_customize->add_setting('banner_btn_text', array(
      'default'   => _x('Read More', 'wowe-theme'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('banner_btn_text', array(
      'label'   => __('Button Text', 'wowe-theme'),
      'section' => 'homepage_slider',
      'priority'  => 80
    ));

    $wp_customize->add_setting('homepage_slider_nav_type', array(
      'default'   => 'arrows',
      'sanitize_callback' => 'themeslug_sanitize_select',
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'homepage_slider_nav_type', array(
      'label'   => __('Slider Navigation Type'),
      'section' => 'homepage_slider',
      'description' => __( 'Choose how to show Slider Navigation' ),
      'settings' => 'homepage_slider_nav_type',
      'priority'  => 90,
      'type'    => 'radio',
      'choices' => array(
          'arrows'=> _('Show Arrows (left and right)'),
          'dots'=> _('Show dots'),
          'thumbs'=> _('Show Thumbnails'),
          'none' => _('No navigation'),
    ))));

    $wp_customize->add_setting('homepage_slider_play', array(
      'default'   => false,
      'sanitize_callback' => 'themeslug_sanitize_select',
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'homepage_slider_play', array(
      'label'   => __('Slider Autoplay?'),
      'section' => 'homepage_slider',
      'description' => __( 'Choose whether you want the slide to autoplay' ),
      'settings' => 'homepage_slider_play',
      'priority'  => 100,
      'type'    => 'radio',
      'choices' => array(
          true => _('Yes!'),
          false => _('No')
    ))));

    $wp_customize->add_section('homepage_services', array(
      'title'   => __('Services Type', 'wowe-theme'),
      'description' => sprintf(__('Choose Services Style','wowe-theme')),
      'priority'    => 2,
      'panel'       => 'wolinweb'
    ));

    $wp_customize->add_setting('homepage_services_type', array(
      'default'   => '',
      'sanitize_callback' => 'themeslug_sanitize_select',
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'homepage_services_type', array(
      'label'   => __('Services Style'),
      'section' => 'homepage_services',
      'description' => __( 'Choose to show Services' ),
      'settings' => 'homepage_services_type',
      'priority'  => 2,
      'type'    => 'radio',
      'choices' => array(
          'cards' => _('List of Cards'),
          'stacked' => _('Section Stacked')
    ))));

    $wp_customize->add_setting('display_services', array(
      'default'   => true,
      'sanitize_callback' => 'themeslug_sanitize_select',
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'display_services', array(
      'label'   => __('Services Type'),
      'section' => 'homepage_services',
      'description' => __( 'Choose to show if you want to show Services' ),
      'settings' => 'display_services',
      'priority'  => 1,
      'type'    => 'radio',
      'choices' => array(
          true => _('Yes!'),
          false => _('No')
    ))));

  }

  add_action('customize_register', 'wowe_customize_register');
