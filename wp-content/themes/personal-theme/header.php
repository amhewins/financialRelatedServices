<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <title>Financial Related Services <?php wp_title("",true); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
    <script src="https://kit.fontawesome.com/4c77e761d7.js"></script>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <section class="hero is-info is-medium is-bold" style="background-image: url('https://www.frsbookkeeping.com/wp-content/uploads/2019/10/background6.jpg'); max-width: 1345px; margin: 0 auto; background-size: cover;">
      <div class="hero-head">
        <div class="header-navigation-container">
          <nav class="navbar container" role="navigation" aria-label="main navigation">
              <div class="navbar-brand">

                  <button class="button navbar-burger" data-target="header-menu">
                      <span></span>
                      <span></span>
                      <span></span>
                  </button>
              </div> <!--navbar-brand-->
              <div class="navbar-menu">
              <?php
              wp_nav_menu( array(
                  'theme_location'    => 'header-menu',
                  'depth'             => 2,
                  'container'         => true,
                  // 'items_wrap'     => 'div',
                  'menu_class'        => 'navbar-end',
                  'menu_id'           => 'header-menu',
                  'after'             => "</div>",
                  'walker'            => new Navwalker())
              );
              ?>
          </nav>
        </div> <!--header-navigation-container-->
      </div> <!--hero-head-->
