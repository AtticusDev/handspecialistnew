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
			<div class="container-fluid homebanner" style="background-color: #<?php the_field('nav_color'); ?>">
				<div class="row align-items-end">
					<div class="col-md-12">
						<?php if ( has_post_thumbnail() ) : ?>
							<img src="<?php the_post_thumbnail_url(); ?>" class="align-bottom">
						<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="container-fluid mb-0" style="background-color:#000000;">
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


</article><!-- #post-## -->
