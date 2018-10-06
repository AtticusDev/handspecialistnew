<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HandSpecialist
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo" style="background-color: rgb(<?php the_field('footer_color'); ?>);">
		<div class="container pt-5">
			<div class="row justify-content-center">
				<div class="col-md-3 text-center">
					<a href="https://www.instagram.com/thehandspecialist" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/instagram.svg" class="mt-0 socialIcon"></a>
					&nbsp;&nbsp;
					<a href="https://www.facebook.com/thehandspecialist" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook.svg" class="mt-0 socialIcon"></a>
					&nbsp;&nbsp;
					<a href="https://www.linkedin.com/thehandspecialist" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/linkedin.svg" class="mt-0 socialIcon"></a>

				</div>
				<div class="col-md-6 text-center text-white">
					<div class="mainLogo">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/ramon-logo.svg" class=" pb-4">
					</div>
					<div class="d-md-flex flex-row justify-content-center pb-4">
					<div class="p-2">
						FORTIUS CLINIC CENTRAL<BR>
						17 FITZHARDINGE STREET<BR />
						LONDON W1H 6EQ<br />
						<a href="tel:+44 (0) 203 870 8998" style="color: #ffffff; text-decoration: none;">+44 (0) 203 870 8998</a><br>
					</div>
					<div class="p-2">
						FORTIUS CLINIC CITY<BR>
						75 KING WILLIAM STREET<BR />
						LONDON EC4N 7BE<br />
						<a href="tel:+44 (0) 203 195 2442" style="color: #ffffff; text-decoration: none;">+44 (0) 203 195 2442<br>
					</div>
					</div>
					<a href="mailto:tahmassebi@fortiusclinic.com" class="text-white">TAHMASSEBI@FORTIUSCLINIC.COM</a><br />
					SITE DESIGNED AND BUILT BY <a href="http://www.atticuscreative.co.uk" target="_blank" class="text-white">ATTICUS</a>
				</div>
				<div class="col-md-3 text-center text-white">
					<p><a href="tel:+44 (0) 207 820 8007" style="color: #ffffff; text-decoration: none;">+44 (0) 207 820 8007</a><br />
					<a href="/contact/" style="color: #fff;">BOOK APPOINTMENT</a>
				</div>
			</div>
		</div><!--  .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
