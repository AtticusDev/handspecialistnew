<!-- PROFESSIONAL PARTNERS SECTION -->

	<div class="container-fluid bg-white">
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