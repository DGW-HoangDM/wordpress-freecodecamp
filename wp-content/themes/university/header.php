<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Fictional University</title>
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    <link rel="stylesheet" href="build/index.css" />
    <link rel="stylesheet" href="build/style-index.css" /> -->

    <?php wp_head(); ?>

  </head>
  <body>
    <header class="site-header">
      <div class="container">
        <h1 class="school-logo-text float-left">
          <a href="<?php echo home_url(); ?>"><strong>Fictional</strong> University</a>
        </h1>
        <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <div class="site-header__menu group">
          <nav class="main-navigation">
            <ul>
              <li <?php if(is_page('about-us') or wp_get_post_parent_id(get_the_ID())){ echo "class='current-menu-item'"; } ?>><a href="<?php echo home_url() ?>/about-us">About Us</a></li>
              <li><a href="<?php echo home_url() ?>/programs">Programs</a></li>

              <?php
                $classActiveEvent = '';
                if(get_post_type() == 'event'){
                  $classActiveEvent = 'current-menu-item';
                }
              ?>
              <li class="<?php echo $classActiveEvent; ?>"><a href="<?php echo home_url() ?>/event">Events</a></li>
              <li><a href="<?php echo home_url() ?>/campuses">Campuses</a></li>
              <?php 
                $classActive = '';
                if(get_post_type() == 'post'){
                  $classActive = 'current-menu-item';
                }
              ?>
              <li class="<?php echo $classActive; ?>"><a href="<?php echo home_url() ?>/blog">Blog</a></li>
            </ul>
          </nav>
          <div class="site-header__util">
            <a href="<?php echo home_url() ?>/login" class="btn btn--small btn--orange float-left push-right">Login</a>
            <a href="<?php echo home_url() ?>/sign-up" class="btn btn--small btn--dark-orange float-left">Sign Up</a>
            <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
          </div>
        </div>
      </div>
    </header>