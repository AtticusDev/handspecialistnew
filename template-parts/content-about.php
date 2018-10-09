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
				<a href="/contact/" class="btn appointmentBtn white-black">Request an appointment</a>
			</div>
		</div>
	</div>


	<?php
	get_template_part( 'template-parts/testimonial' );
	?>

	<div class="container-fluid mb-0" style="background-color:#d1d3d4;">
		<div class="row justify-content-md-center">
				<div class="col-sm-12 col-md-6 text-center mt-5 mb-5">
				<h1><?php
					the_field('area_of_interest');
				?>
				</h1>
				</div>
		</div>
	</div>


	<div class="container-fluid pb-5" style="background-color:#d1d3d4;">
		<div class="row">
			<div class="container mb-5">
				<div class="row justify-content-md-center">
				

					<?php
					$args = array(
					 'post_type' => 'treatment',
					 'meta_key' => 'order_number',
					 'orderby' => 'meta_value_num',
					 'order' => 'ASC' 
					);
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
						?>
						<div class="col-sm-12 col-md-6">
						<a href="<?php the_permalink(); ?>"><div class="btn conditionBtnLt d-flex align-items-center mb-4">

							<span class="treatmentBtnLt"><?php the_title(); ?></span>

						</div></a>
						</div>

						<?php

					endwhile;

					wp_reset_query();

					?>
				</div>
			</div>
		</div>
	</div>



</article><!-- #post-## -->
