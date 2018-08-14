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

	<div class="container-fluid mt-5">
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

	<div class="container-fluid">
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
	</div>


<!-- END PATIENT INFORMATION CONTENT AREA -->


<!-- PROFESSIONAL PARTNERS SECTION -->

	<div class="container-fluid">
		<div class="row">
			<div class="container mb-3">
									<h2>Professional Partners</h2>

				<div class="row justify-content-center text-center">

				<?php
				// check if the repeater field has rows of data
				if( have_rows('professional_partners') ):

				 	// loop through the rows of data
				    while ( have_rows('professional_partners') ) : the_row();
			    	?>
					<div class="col-sm-12 col-md-3 pt-5 pb-3 ppPanel">
				    	<h4>
						<?php
						// display a sub field value
				        the_sub_field('title');
				        ?>
				    	</h4>
				    	<p>
						<?php
						// display a sub field value
				        the_sub_field('address');
				        ?>
				        </p>
				        <p><a href="<?php the_sub_field('website'); ?>" target="_blank">Visit website</a>
					</div>

		        <?php
			    endwhile;
				else :
				    // no rows found
				endif;
				?>
				</div> <!-- end row -->
			</div> <!-- end container -->
		</div><!-- end row -->
	</div> <!-- end container -->



<!-- END PROFESSIONAL PARTNERS SECTION -->





<!-- TESTIMONIAL BLOCK  -->

	<?php

	$post_object = get_field('select_quote');

	if( $post_object ): 

		// override $post
		$post = $post_object;
		setup_postdata( $post );

		?>

		<div class="container-fluid mb-0" style="background-color: rgb(<?php the_field('background_colour'); ?>);">
			<div class="row justify-content-md-center">
				<div class="container">
					<div class="row align-items-center">

					<div class="col-sm-12 col-md-6 text-center text-white align-self-end">
						<img src="<?php the_field( "image" ); ?>" class="align-bottom">
					</div>
					<div class="col-sm-12 col-md-6 pl-5 pr-5 text-center">
						<div class="quoteText" style="color: <?php the_field( "text_colour" ); ?>"><?php the_content(); ?>
						<span style="color: <?php the_field( "author_colour" ); ?>; font-style: italic;"><?php the_field('author'); ?></span></div>
					</div>
					</div>
				</div>
			</div>
		</div>


	    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
	<?php endif; ?>

<!-- END TESTIMONIAL BLOCK  -->


</article><!-- #post-## -->
