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
	<div class="container-fluid mt-5">
		<div class="row">
			<div class="container">
				<div class="row justify-content-md-center">
					<div class="col-sm-12 col-md-8">
					<h1>
					<?php
					the_title();
					?>
					</h1>
					<?php

					// check if the repeater field has rows of data
					if( have_rows('treatments') ):

						// set the counter variable	
						$i = 0;

					 	// loop through the rows of data to create the navigation
					    while ( have_rows('treatments') ) : the_row();
				    	$i++;
					    	?>
					    	<h4 class="underlineLink"><a href="#<?php echo $i; ?>">
							<?php
							// display a sub field value
					        the_sub_field('title');
					        ?>
					    	</h4></a>
					        <?php

					    endwhile;
					endif;
					?>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="container-fluid">				
						<?php
					// check if the repeater field has rows of data
					if( have_rows('treatments') ):

						// set the counter variable	
						$i = 0;
					 	// loop through the rows of data
					    while ( have_rows('treatments') ) : the_row();
					    $i++;
					    	?>
			<div class="container-fluid mb-0  treatmentPanel">
				<a id="<?php echo $i; ?>"></a>
				<div class="row">
					<div class="container">
						<div class="row  justify-content-md-center text-left">
							<div class="col-md-8 pt-5 pb-5">
							    	<h4>
									<?php
									// display a sub field value
							        the_sub_field('title');
							        ?>
							    	</h4>
							    	<p>
									<?php
									// display a sub field value
							        the_sub_field('description');
							        ?>
							        </p>
							</div>
						</div> <!-- end row -->
					</div> <!-- end container -->
				</div><!-- end row -->
			</div> <!-- end container -->

					        <?php
				    endwhile;
					else :
					    // no rows found
					endif;
					?>
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
