<?php
/**
 * Template part for displaying page content in conditions.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package HandSpecialist
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('text-center'); ?>>


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


	<div class="container-fluid pb-4 bg-white pt-5">
		<div class="row">
			<div class="container">
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
						<a href="<?php the_permalink(); ?>"><div class="btn conditionBtn d-flex align-items-center mb-4">

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

	<div class="container-fluid pt-4 mb-0" style="background-color:#d1d3d4;">
		<div class="row justify-content-md-center">
			<div class="col-sm-12 col-md-6 text-center mt-3 mb-5">
				<a href="#" class="btn appointmentBtn white-grey">Request an appointment</a>
			</div>
		</div>
	</div>




	<?php
	get_template_part( 'template-parts/testimonial' );
	?>


</article><!-- #post-## -->
