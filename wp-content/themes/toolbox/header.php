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


      <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'toolbox' ); ?></a>

      <header id="masthead" class="site-header">
        <div class="max">
          <section class="site-topbar">


            <div class="site-branding">
              <div class="logo">
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <img src="<?php bloginfo('template_url'); ?>/images/logo.jpg" alt="<?php bloginfo( 'name' ); ?>" class="logo"></a></h1>

              </div>
            </div><!-- .site-branding -->

            <div class="site-search">
              <div class="search-contact">
                01895 448 111<br>
                <a href="mailto:info@shannontraining.com">info@shannontraining.com</a>
              </div>
              <form class="search" action="search.php">
                <input name="q" placeholder="Search..." type="search">
              </form>
            </div> <!-- .site-search -->

          </section> <!-- .site-topbar -->
        </div> <!-- .max -->



        <div class="max">
          <section class="site-navigation">
            <div id="header">
               <nav>
                 <?php
                  wp_nav_menu( array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                  ) );
                ?>
              </nav>
            </div>  <!-- #header -->
          </section> <!-- .site-navigation -->
        </div> <!-- .max -->

      </header>

      <div id="content" class="site-content max">
