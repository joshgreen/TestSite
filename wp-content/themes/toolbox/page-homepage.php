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
			<h1>page-homepage.php</h1>

			<section class="hero">
			  <div class="flexslider">
			    <ul class="slides">
			      <li>
			        <div class="slide-Homeconstruction">
			         <div class="text-box">
			           <p class="intro"><?php the_field('text'); ?></p>
			           <a href="" class="button-yellow-chevron">Contact us</a>
			       </div>
			      </li>
			      <li>
			         <div class="slide-Homehaulage">
			          <div class="text-box">
			            <p class="intro"><?php the_field('text'); ?></p>
			            <a href="" class="button-yellow-chevron">Contact us</a>
			        </div>
			      </li>
			      <li>
			        <div class="slide-Hometraining">
			         <div class="text-box">
			           <p class="intro"><?php the_field('text'); ?></p>
			           <a href="" class="button-yellow-chevron">Contact us</a>
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
