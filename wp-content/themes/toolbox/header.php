<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package toolbox
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
  <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'toolbox' ); ?></a>

  <div id="header">
    <div class="logo">
      <a href="#">Responsive Nav</a>
    </div>
    <nav id="site-navigation" class="main-navigation">
      <form class="search" action="search.php">
        <input name="q" placeholder="Search..." type="search">
      </form>
      <ul>
        <li>
          <a href="">Home</a>
        </li>
        <li>
          <a href="">About</a>
          <ul class="mega-dropdown">
            <li class="row">
              <ul class="mega-col">
                <li><a href="#">About</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
              <ul class="mega-col">
                <li><a href="#">Help</a></li>
                <li><a href="#">Pricing</a></li>
                <li><a href="#">Team</a></li>
                <li><a href="#">Services</a></li>
              </ul>
              <ul class="mega-col">
                <li><a href="#">Coming Soon</a></li>
                <li><a href="#">404 Error</a></li>
                <li><a href="#">Search</a></li>
                <li><a href="#">Author Page</a></li>
              </ul>
              <ul class="mega-col">
                <li><a href="#">Full Width</a></li>
                <li><a href="#">Right Column</a></li>
                <li><a href="#">Left Column</a></li>
                <li><a href="#">Maintenance</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="">Contact</a>
            <ul>
              <li><a href="#">About Version</a></li>
              <li><a href="#">About Version</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
        </li>
        <li>
          <a href="">Portfolio</a>
        </li>
        <li>
          <a href="">Team</a>
        </li>
      </ul>
    </nav>
  </div>


  <div id="content" class="site-content max">
