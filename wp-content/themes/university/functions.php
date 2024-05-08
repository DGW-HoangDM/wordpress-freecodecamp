<?php
  function university_styles() {
    wp_enqueue_style( 'font', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i', array(), '1.0.0', "all" );
    wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0', "all" );
    wp_enqueue_style( 'main-css', get_template_directory_uri() . '/assets/build/index.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'my-theme', get_template_directory_uri() . '/assets/build/style-index.css', array(), '1.0.0', 'all' );

    wp_enqueue_script( 'mainJs', get_template_directory_uri() . '/assets/build/index.js', array(), '1.0.0', true );
  }

  add_action('wp_enqueue_scripts', 'university_styles');

  // add menu to footer
  function university_add_menu(){
    $location = array(
      'footer-one' => 'Footer Menu One',
      'footer-two' => 'Footer Menu Two',
    );
    register_nav_menus($location);
  };
  add_action('init', 'university_add_menu');


   // Limit of words
  function custom_excerpt_length() {
    return 20; 
  }
  add_filter('excerpt_length', 'custom_excerpt_length', 999);

?>