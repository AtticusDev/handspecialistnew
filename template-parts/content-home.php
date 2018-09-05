<?php
/**
 * Template part for displaying page content in home.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package HandSpecialist
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('text-center'); ?>>

	<div class="container-fluid mb-0 text-center">
		<div class="row">
			<div class="container-fluid mb-0" style="background-color: rgb(<?php the_field('footer_color'); ?>);">
				<div class="row justify-content-md-center">
						<div class="col-sm-12 col-md-6 text-center text-white mt-5 mb-5">
						<?php
							the_content();
						?>
						<a href="/conditions-treated/" class="btn appointmentBtn blue-white">View conditions treated</a>
						</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid mb-0" style="background-color:#7da6b8;">
		<div class="row justify-content-md-center">
			<div class="container">
				<div class="row align-items-end">
				<div class="col-sm-12 col-md-6 text-center p-4 mt-3 mb-3">
					<div class="mainLogo">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/ramon-logo.svg" class="pt-4 pb-4">
					</div>
					<h1 style="margin-bottom:0.5rem;"><?php the_field('doctor_name'); ?></h1>
					<p><?php the_field('doctor_title'); ?></p>
					<p class="text-white"><?php the_field('doctor_bio'); ?></p>
					<a href="/about-ramon/" class="btn readmoreBtn bg-light">About Ramon</a>


				</div>
				<div class="col-sm-12 col-md-6 text-center text-white mt-5 ">
					<img src="<?php the_field('doctor_image'); ?>" class="align-bottom">
				</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid mb-0" style="background-color: rgb(<?php the_field('footer_color'); ?>);">
		<div class="row justify-content-md-center">
			<div class="col-sm-12 col-md-6 text-center mt-5 mb-5">
				<a href="/contact/" class="btn appointmentBtn blue-white">Request an appointment</a>
			</div>
		</div>
	</div>


	<?php
	get_template_part( 'template-parts/testimonial' );
	?>


</article><!-- #post-## -->
