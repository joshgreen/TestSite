<?php
/**
 * Template name: CPCS Courses
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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

          get_template_part( 'template-parts/content', 'page' );

          // If comments are open or we have at least one comment, load up the comment template.
          if ( comments_open() || get_comments_number() ) :
            comments_template();
          endif;

        endwhile; // End of the loop.
        ?>


        <?php $loop = new WP_Query( array( 'post_type' => 'cpcs', 'posts_per_page' => 10 ) ); ?>

        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

          <?php the_title( '<h2 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></h2>' ); ?>

        <?php endwhile; ?>

      </div> <!-- .inner -->

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
