<?php
/**
 * Template part for displaying posts
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

	<div class="container-fluid mb-0" style="background-color: rgb(<?php the_field('footer_color'); ?>);">
		<div class="row justify-content-md-center">
				<div class="col-sm-12 col-md-6 text-center text-white mt-5 mb-5">
				<h1><?php
					the_title();
				?>
				</h1>
				</div>
		</div>
	</div>


	<div class="container-fluid mb-0">
		<div class="row">
			<div class="container">
				<div class="row justify-content-md-center">
					<div class="container">


					<?php 
					$args = array( 'post_type' => 'quote' );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
					 $author = get_field( "author" );
					 $description = get_field( "description" );
					 $text1 = get_field("text1");
					 $text2 = get_field("text2");
					 $text3 = get_field("text3");
					?>
						<div class="col-sm-12 col-md-12 p-4">
								<h3><?php echo $author; ?></h3>
								<h3><?php echo $description; ?></h3>
							<div class="row justify-content-md-center">
								<div class="col-sm-12 col-md-3">
									<?php echo $text1; ?>
							    </div>
								<div class="col-sm-12 col-md-3">
									<?php echo $text2; ?>
							    </div>
								<div class="col-sm-12 col-md-3">
									<?php echo $text3; ?>
							    </div>
							</div>
						</div>
					<?php 
					endwhile;
					wp_reset_query();
					?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid mb-0" style="background-color:#d1d3d4;">
		<div class="row justify-content-md-center">
			<div class="col-sm-12 col-md-6 text-center mt-3 mb-5">
				<a href="#" class="btn appointmentBtn">Request an appointment</a>
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
