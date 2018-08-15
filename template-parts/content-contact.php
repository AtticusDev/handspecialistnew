<?php
/**
 * Template part for displaying page content in contact.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package HandSpecialist
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('text-center'); ?>>

	<div class="container-fluid mb-0" style="background-color:#ffffff;">
		<div class="row">
			<div class="container">
				<div class="row justify-content-md-center">
					<div class="col-sm-12 col-md-8 text-center mt-5 mb-5">
					<?php
						the_content();
					?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php
	get_template_part( 'template-parts/testimonial' );
	?>


</article><!-- #post-## -->
