<?php
/**
 * Template name: Homepage
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
      <section class="banner">
        <h1 class="textbanner">MARKET LEADERS IN CONSTRUCTION TRAINING</h1>
      </section>
      <section class="hero">
        <div class="flexslider">
          <ul class="slides">
            <li><?php if( get_field('slide-image-1') ): ?>
              <div class="slide-1" style="background-image: url(<?php the_field('slide-image-1'); ?>)"><?php endif; ?>
                <div class="text-box">
                  <p class="intro"><?php the_field('slide-text-1'); ?></p>
                  <a href="<?php the_field('slide-link-1'); ?>" class="button-yellow-chevron">Contact us</a>
                </div>
            </li>
            <li><?php if( get_field('slide-image-2') ): ?>
              <div class="slide-1" style="background-image: url(<?php the_field('slide-image-2'); ?>)"><?php endif; ?>
                <div class="text-box">
                  <p class="intro"><?php the_field('slide-text-2'); ?></p>
                  <a href="<?php the_field('slide-link-2'); ?>" class="button-yellow-chevron">Contact us</a>
                </div>
            </li>
            <li><?php if( get_field('slide-image-3') ): ?>
              <div class="slide-1" style="background-image: url(<?php the_field('slide-image-3'); ?>)"><?php endif; ?>
                <div class="text-box">
                  <p class="intro"><?php the_field('slide-text-3'); ?></p>
                  <a href="<?php the_field('slide-link-3'); ?>" class="button-yellow-chevron">Contact us</a>
                </div>
            </li>
            <li><?php if( get_field('slide-image-4') ): ?>
              <div class="slide-1" style="background-image: url(<?php the_field('slide-image-4'); ?>)"><?php endif; ?>
                <div class="text-box">
                  <p class="intro"><?php the_field('slide-text-4'); ?></p>
                  <a href="<?php the_field('slide-link-4'); ?>" class="button-yellow-chevron">Contact us</a>
                </div>
            </li>
          </ul>
        </div>
        <div class="custom-navigation">
          <a href="#" class="flex-prev" title="Previous"><img src="<?php bloginfo('template_url'); ?>/images/prev.svg" alt="Previous"></a>
          <div class="custom-controls-container"></div>
          <a href="#" class="flex-next" title="Next"><img src="<?php bloginfo('template_url'); ?>/images/next.svg" alt="Next"></a>
        </div>
      </section>



      <?php
      while ( have_posts() ) : the_post();

        get_template_part( 'template-parts/content', 'page' );

        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
          comments_template();
        endif;

      endwhile; // End of the loop.
      ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php

get_footer();
