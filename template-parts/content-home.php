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
			<div class="container-fluid homebanner" style="background-color: rgb(<?php the_field('nav_color'); ?>);">
				<div class="row align-items-end">
					<div class="col-md-12">
						<?php if ( has_post_thumbnail() ) : ?>
							<img src="<?php the_post_thumbnail_url(); ?>" class="align-bottom">
						<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="container-fluid mb-0" style="background-color:#418de3;">
				<div class="row justify-content-md-center">
						<div class="col-sm-12 col-md-6 text-center text-white mt-5 mb-5">
						<?php
							the_content();
						?>
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
					<h1><?php the_field('doctor_name'); ?></h1>
					<div class="mainLogo">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/hand-specialist-logo.png" class="pt-4 pb-4">
					</div><p><?php the_field('doctor_bio'); ?></p>

				</div>
				<div class="col-sm-12 col-md-6 text-center text-white mt-5 ">
					<img src="<?php the_field('doctor_image'); ?>" class="align-bottom">
				</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid mb-0" style="background-color:#d1d2d4;">
		<div class="row justify-content-md-center">
			<div class="col-sm-12 col-md-6 text-center mt-5 mb-5">
				<h1><?php the_field('conditions_title'); ?></h1>
				<p><?php the_field('conditions_text'); ?></p>
				<a href="#" class="btn appointmentBtn">Book an appointment</a>
			</div>
		</div>
	</div>


</article><!-- #post-## -->
