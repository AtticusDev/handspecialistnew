<?php
/**
 * Template part for displaying page content in practice.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package HandSpecialist
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('text-center'); ?>>

	<div class="container-fluid mb-0 text-center">
		<div class="row">
			<div class="container-fluid homebanner" style="background-color: rgb(<?php the_field('nav_color'); ?>);">
				<div class="row align-items-end">
					<div class="col-md-12">
						<?php if ( has_post_thumbnail() ) : ?>
							<img src="<?php the_post_thumbnail_url(); ?>" class="align-bottom">
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid mb-0" style="background-color:#558858;">
		<div class="row justify-content-md-center">
				<div class="col-sm-12 col-md-12 text-center text-white mt-5">
				<?php
					the_content();
				?>
				</div>
				<div class="container">
					<div class="row justify-content-md-center">
						<div class="col-sm-12 col-md-4 bg-white practiceBox">
							<h3>private practice</h3>
							<p>Ramon’s private practice is based at Fortius Clinic – a collaboration of some of the UK’s leading musculoskeletal specialists at the forefront of orthopaedic surgery, sports medicine and radiology</p>
							<a href="#" class="btn practiceBtn">View locations</a>
						</div>
						<div class="col-sm-12 col-md-4 bg-white practiceBox">
							<h3>NHS practice</h3>
							<p>His NHS practice is based at King’s College Hospital – one of London’s largest and busiest teaching hospitals and hub for complex orthopaedic surgery.</p>
							<a href="#" class="btn practiceBtn">View locations</a>
						</div>

					</div>
				</div>
		</div>
	</div>

	<div class="container-fluid mb-0" style="background-color:#d0d1d3;">
		<div class="row justify-content-md-center">
				<div class="col-sm-12 col-md-12 text-center mt-5">
					<h2>private practices</h2>
				</div>
				<div class="container">
					<div class="row justify-content-md-center">
						<div class="col-sm-12 col-md-3 bg-white practiceBox">
							<h3>fortius clinic city</h3>
							<a href="#" class="btn practiceBtn">View locations</a>
						</div>
						<div class="col-sm-12 col-md-3 bg-white practiceBox">
							<h3>fortius clinic marylebone</h3>
							<a href="#" class="btn practiceBtn">View locations</a>
						</div>
						<div class="col-sm-12 col-md-3 bg-white practiceBox">
							<h3>lyca health, canary wharf</h3>
							<a href="#" class="btn practiceBtn">View locations</a>
						</div>

					</div>
				</div>
		</div>
	</div>

	<div class="container-fluid mb-0" style="background-color:#ffffff;">
		<div class="row justify-content-md-center">
				<div class="col-sm-12 col-md-12 text-center mt-5">
					<h2>NHS practice</h2>
				</div>
				<div class="container">
					<div class="row justify-content-md-center">
						<div class="col-sm-12 col-md-3 bg-white practiceBox">
							Flext item 1<br>
							<a href="#" class="btn practiceBtn">View locations</a>
						</div>

					</div>
				</div>
		</div>
	</div>





<!-- TESTIMONIAL BLOCK  -->

	<?php

	$post_object = get_field('select_quote');

	if( $post_object ): 

		// override $post
		$post = $post_object;
		setup_postdata( $post );

		?>

		<div class="container-fluid mb-0" style="background-color: rgb(<?php the_field('background_colour'); ?>);">
			<div class="row justify-content-md-center">
				<div class="container">
					<div class="row align-items-center">

					<div class="col-sm-12 col-md-6 text-center text-white align-self-end">
						<img src="<?php the_field( "image" ); ?>" class="align-bottom">
					</div>
					<div class="col-sm-12 col-md-6 pl-5 pr-5 text-center">
						<div class="quoteText" style="color: <?php the_field( "text_colour" ); ?>"><?php the_content(); ?>
						<span style="color: <?php the_field( "author_colour" ); ?>; font-style: italic;"><?php the_field('author'); ?></span></div>
					</div>
					</div>
				</div>
			</div>
		</div>


	    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
	<?php endif; ?>

<!-- END TESTIMONIAL BLOCK  -->


</article><!-- #post-## -->
