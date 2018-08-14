<?php
/**
 * Template Name: quotes
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package HandSpecialist
 */

get_header(); ?>

			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'quotes' );


					endwhile; // End of the loop.
					?>

				</main><!-- #main -->
			</div><!-- #primary -->

<?php
get_footer();
