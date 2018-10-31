<!doctype html>
<html class="no-js" lang="">
    <head>
        <?php get_template_part( 'partials/gtm' ); ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php wp_title(); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?> id="top">

        <header>

        </header>


        <nav class="main">
          <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'walks', 'container' => false ) ); ?>
          <?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_class' => 'pages', 'container' => false ) ); ?>
        </nav>

        <nav class="mobile">
          <div class="content">
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'walks', 'container' => false ) ); ?>
            <?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_class' => 'pages', 'container' => false ) ); ?>
          </div>
          <ul class="utility">
            <li>
              <a href="https://twitter.com/PantheraCats" target="_blank"><i class="icon-twitter"></i></a>
              <a href="https://www.instagram.com/pantheracats/" target="_blank"><i class="icon-instagram"></i></a>
              <a href="https://www.facebook.com/pantheracats" target="_blank"><i class="icon-facebook"></i></a>
            </li>
          </ul>
          <a class="btn donate" href="/get-involved/">Donate</a>
          <a href="https://www.panthera.org/" target="_blank" class="mobile-logo"><img width="100" src="<?php bloginfo('stylesheet_directory'); ?>/static/images/panthera.svg" alt=""></a>
        </nav>
