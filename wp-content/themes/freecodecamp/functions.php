<?php 
  function enqueue_theme_assets (){
    wp_enqueue_style('normal', get_template_directory_uri() . "/style.css",  array(), '1.0', 'all');
  }
  add_action( 'wp_enqueue_scripts', 'enqueue_theme_assets', 9999);

  function enqueue_theme_script (){
    wp_enqueue_script('main', get_template_directory_uri() . "/assets/js/main.js",  array(), '1.0', true);
  }
  add_action( 'wp_enqueue_scripts', 'enqueue_theme_script', 9999);

  //add dynamic title tag support
  function freecodecamp_theme_support (){
    add_theme_support('title-tag');
  }
  add_action('after_setup_theme', 'freecodecamp_theme_support');
?>