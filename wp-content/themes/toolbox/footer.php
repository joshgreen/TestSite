<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package toolbox
 */

?>

  </div><!-- #content -->



  <footer id="colophon" class="site-footer max">
    <section class="site-footer-main">
      <div class="inner">
        <div class="f-info">
            <h2 class="widget-title">Site</h2>
            <?php wp_nav_menu( array( 'theme_location' => 'secondary-menu' ) ); ?>
        </div>
        <div class="f-info">
            <?php if (!dynamic_sidebar('Footer1')) :?> <?php endif;?>
        </div>
        <div class="f-info">
            <?php if (!dynamic_sidebar('Footer2')) :?> <?php endif;?>
        </div>
        <div class="f-info">
            <?php if (!dynamic_sidebar('Footer3')) :?> <?php endif;?>
        </div>
      </div> <!-- .inner -->

    </section>
    <section class="site-info">
      <div>© 2017 - Shannon Training Limited | The Shannon Group Limited</div>
      <div>made by <a href="https://displayblock">displayblock</a></div>
    </section><!-- .site-info -->

  </footer><!-- #colophon -->
<?php wp_footer(); ?>

</body>
</html>
