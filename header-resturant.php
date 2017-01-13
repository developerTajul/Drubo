<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Corlate
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
 
    <!-- Navbar-->
    <header id="topnav">
      <div class="container">

        <div class="logo"><a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_light.png" alt="" class="logo-light"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_dark.png" alt="" class="logo-dark"></a>
        </div>

        <div class="menu-extras">
          <div class="menu-item"><a class="navbar-toggle">
              <div class="lines"><span></span><span></span><span></span></div></a></div>
        </div>
        
        <div id="navigation" data-onepage="true">
          <ul class="navigation-menu nav">
            <li><a href="#home" data-scroll="true">Home</a></li>
            <li><a href="#about" data-scroll="true">About</a></li>
            <li><a href="#menu" data-scroll="true">Menu</a></li>
            <li><a href="#facts" data-scroll="true">Facts</a></li>
            <li><a href="#reserve" data-scroll="true">Reserve</a></li>
          </ul>
        </div>
      </div>
    </header>