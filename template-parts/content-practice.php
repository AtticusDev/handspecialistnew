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

	<div class="container-fluid mb-0" style="background-color:#558858;">
		<div class="row justify-content-md-center">
				<div class="col-sm-12 col-md-12 text-center text-white mt-5">
				<?php
					the_content();
				?>
				</div>
				<div class="container">
					<div class="row justify-content-md-center">
						<div class="d-flex flex-column col-sm-12 col-md-4 bg-white p-4 practiceBox">
							<?php the_field('private_practice'); ?>
							<a href="#private" class="btn practiceBtn mt-auto">View locations</a>
						</div>
						<div class="d-flex flex-column col-sm-12 col-md-4 bg-white p-4 practiceBox">
							<?php the_field('nhs_practice'); ?>
							<a href="#nhs" class="btn practiceBtn mt-auto">View locations</a>
						</div>

					</div>
				</div>
		</div>
	</div>

	<div class="container-fluid mb-0 bg-white">
		<a id="private"></a>
		<div class="row justify-content-md-center">
				<div class="col-sm-12 col-md-6 text-center pt-5">
					<h2>private practice</h2>
					<p><?php the_field('private_practice'); ?></p>
				</div>
				<div class="container">
					<div class="row justify-content-md-center">

						<?php 
						$args = array( 'post_type' => 'locations' );
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();
						 $locationimg = get_field( "location_image" );
						 $locationdetails = get_field( "location_details" );
						 $googlelink = get_field( "google_link" );
						?>
							<div class="d-flex flex-column col-sm-12 col-md-4 p-4 practiceBox">
									<h3><?php the_title(); ?></h3>
									<img src="<?php echo $locationimg; ?>">
									<p><?php the_content(); ?></p>
									<p><?php echo $locationdetails; ?></p>
									<a href="<?php echo $googlelink; ?>" target="_blank" class="btn practiceBtn mt-auto">Google map</a>

							</div>

						<?php 
						endwhile;
						wp_reset_query();
						?>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 text-center mt-2 mb-5">
					<p class="contactBlock"><?php the_field('private_practice_contact'); ?></p>
				<a href="#" class="btn appointmentBtn white-green">Request an appointment</a>
				</div>
		</div>
	</div>

	<div class="container-fluid mb-0" style="background-color:#d0d1d3;">
		<a id="nhs"></a>
		<div class="row justify-content-md-center">
				<div class="col-sm-12 col-md-12 text-center mt-5">
					<h2>NHS practice</h2>
				</div>
				<div class="container">
					<div class="row justify-content-md-center">
						<div class="col-sm-12 col-md-10 NHSpracticeBox">
							<h3><?php the_field('nhs_practice_title'); ?></h3>
							<div class="row">
								<div class="col-sm-12 col-md-6 mt-2">
									<?php the_field('nhs_practice_details'); ?>
								</div>
								<div class="col-sm-12 col-md-6 mt-2">
									<img src="<?php the_field('nhs_practice_image'); ?>">
								</div>
							</div>

						</div>

					</div>
				</div>
		</div>
	</div>

	<?php
	get_template_part( 'template-parts/testimonial' );
	?>



</article><!-- #post-## -->
