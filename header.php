<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HandSpecialist
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127894001-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-127894001-1');
</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> style="background-color: rgba(<?php the_field('nav_color'); ?>, 1);">
<div id="page" class="site">

		<?php
		$navcolor = get_field( 'nav_color' );
		?>


		<div class="container-fluid navfixed" style="background-color: rgba(<?php the_field('nav_color'); ?>, 0.90);">
			<div class="row">
				<div class="container">
					<div class="row justify-content-center">
					    <nav class="navbar navbar-expand-lg navbar-dark justify-content-center" >
								<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
								</button>
						   		<div class="collapse navbar-collapse" id="navbarNav">
					            <?php
					            $args = array(
					              'theme_location' => 'primary',
					              'depth'      => 2,
					              'container'  => false,
					              'menu_class'     => 'navbar-nav',
					              'link_before' => '<span>',
					              'link_after' => '</span>',
					              'walker'     => new Bootstrap_Walker_Nav_Menu()
					              );
					            if (has_nav_menu('primary')) {
					              wp_nav_menu($args);
					            }
					            ?>
					      		</div>
				    	</nav>
				    </div> <!-- close row -->
				</div> <!-- close container -->
			</div>
		</div>
		<div class="container-fluid" style="background-color: rgb(<?php the_field('nav_color'); ?>);">
			<div class="row">
		    	<div class="container mt-4">
		    		<div class="row justify-content-center">
				          <div class="mainLogo justify-content-md-center">
				          	<?php $url = home_url( '/' ); ?><a href="<?php echo esc_url( $url ); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/ramon-logo.svg" class="mt-5"></a>
						</div>					
			        </div>
			    </div>
			</div>
		</div>

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


<!-- Hide parallax header
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="bg" style="background-image: url('<?php the_post_thumbnail_url(); ?>'); background-color: rgba(<?php the_field('nav_color'); ?>, 1);"></div>
		<?php endif; ?> 	

		<header>
		  <div class="content">
		<div class="container-fluid">
			<div class="row">
		    	<div class="container mt-4">
		    		<div class="row justify-content-center">
				          <div class="mainLogo">
							<a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/ramon-logo.svg" class="mt-0"></a>
						</div>					
			        </div>
			    </div>
			</div>
		</div>
		  </div>
		</header>

-->

	<div id="content" class="site-content layout">
