<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package toolbox
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main">
      <div class="inner">

        <?php if ( function_exists( 'breadcrumb_trail' ) ) breadcrumb_trail(); ?>

        <?php
        while ( have_posts() ) : the_post();

          get_template_part( 'template-parts/content', get_post_type() );

        endwhile; // End of the loop.
        ?>
      </div> <!-- .inner -->

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
