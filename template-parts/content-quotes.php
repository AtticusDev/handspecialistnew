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
				<a href="#" class="btn appointmentBtn black-white">Request an appointment</a>
			</div>
		</div>
	</div>
	
	<?php
	get_template_part( 'template-parts/testimonial' );
	?>

</article><!-- #post-## -->
