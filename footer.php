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
				</div>
				<div class="col-md-6 text-center text-white">
					<div class="mainLogo">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/ramon-logo.svg" class=" pb-4">
					</div>
					FORTIUS CLINIC CENTRAL<BR>
					17 FITZHARDINGE STREET<BR />
					LONDON W1H 6EQ<br />
					+44 (0) 203 870 8998<br>
					<a href="mailto:tahmassebi@fortiusclinic.com" class="text-white">TAHMASSEBI@FORTIUSCLINIC.COM</a><br />
					SITE DESIGNED AND BUILT BY <a href="http://www.atticuscreative.co.uk" target="_blank" class="text-white">ATTICUS</a>
				</div>
				<div class="col-md-3 text-center text-white">
				</div>
			</div>
		</div><!--  .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
