<?php
/**
 * Template part for displaying page content in about.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package HandSpecialist
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('text-center'); ?>>

	<div class="container-fluid mb-0" style="background-color:#d1d3d4;">
		<div class="row justify-content-md-center">
				<div class="col-sm-12 col-md-6 text-center mt-5 mb-5">
				<h1 style="margin-bottom: 0px;"><?php the_field('name'); ?></h1>
				<p><?php the_field('title'); ?><br />
				<?php the_field('qualifications'); ?></p>
				<div class="mt-5">

					<?php
						the_content();
					?>
					<a href="#" class="btn appointmentBtn black-white"><span>Download full pdf profile</span></a>
				</div>

				</div>
		</div>
	</div>
	<div class="container-fluid mb-0" style="background-color: rgb(<?php the_field('nav_color'); ?>);">
		<div class="row justify-content-md-center">
			<div class="col-sm-12 col-md-6 text-center mt-5 mb-5">
				<a href="#" class="btn appointmentBtn black-white">Request an appointment</a>
			</div>
		</div>
	</div>


	<?php
	get_template_part( 'template-parts/testimonial' );
	?>


</article><!-- #post-## -->
