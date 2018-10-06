<?php
/**
 * Template part for displaying page content in patient.php
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

<!-- PATIENT NAVIGATION LOOP  -->

	<div class="container-fluid pt-5 pb-5 bg-white">
		<div class="row">
			<div class="container">
				<div class="row justify-content-md-center">
					<div class="col-sm-12 col-md-8">
					<?php
					// check if the repeater field has rows of data
					if( have_rows('pi_accordian') ):

						// set the counter variable	
						$i = 0;

					 	// loop through the rows of data to create the navigation
					    while ( have_rows('pi_accordian') ) : the_row();
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

<!-- END PATIENT NAVIGATION LOOP  -->


<!-- PATIENT INFORMATION CONTENT AREA -->

						<?php
					// check if the repeater field has rows of data
					if( have_rows('pi_accordian') ):

						// set the counter variable	
						$i = 0;
					 	// loop through the rows of data
					    while ( have_rows('pi_accordian') ) : the_row();
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


<!-- END PATIENT INFORMATION CONTENT AREA -->


<!-- include content-partners to add this section back here -->


	<?php
	get_template_part( 'template-parts/testimonial' );
	?>


</article><!-- #post-## -->
