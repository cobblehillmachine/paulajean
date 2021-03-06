<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<script type="text/javascript" src="//use.typekit.net/gqh4gfv.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-50079303-1', 'pjminteriors.com');
	  ga('send', 'pageview');

	</script>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/jquery.bxslider.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/mytheme.css" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.carouFredSel-6.2.1.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/retina.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/mytheme.js"></script>

	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="<?php echo  strtolower(str_replace(' ','-',get_the_title())); ?>">
	<div id="header" class="cont">
		<div class="mid-cont">
			<a id="logo" href="/"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" /></a>
			<div id="nav" class="desktop">
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</div>
		</div>
	</div>
	<?php if(is_404()) { ?>
		<div id="banner" class="cont">
			<div class="mid-cont">
				<img class="banner-img" alt="" src="<?php echo get_template_directory_uri(); ?>/images/404-1.png" />
				<img class="banner-img" alt="" src="<?php echo get_template_directory_uri(); ?>/images/404-2.png" />
				<img class="banner-img" alt="" src="<?php echo get_template_directory_uri(); ?>/images/404-3.png" />
			</div>
		</div>
	<?php } else if(is_page('Portfolio')) { ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<div id="banner" class="cont">
				<div id="portfolio-cont" class="cont">
					<?php if (function_exists('slideshow')) { slideshow(true, "1", false, array()); } ?>
				</div>
			</div>
		<?php endwhile; ?>
	<?php } else { ?>
	<div id="banner" class="cont">
		<div class="mid-cont">
			
			<img class="banner-img <?php if( !get_post_meta($post->ID, 'image_2', true) && !get_post_meta($post->ID, 'image_3', true)) { ?> single<?php } else if( !get_post_meta($post->ID, 'image_3', true)) { ?>double<?php } else { ?>triple<?php } ?>" alt="" src="<?php the_field('image_1'); ?>" />
			<?php if( get_post_meta($post->ID, 'image_2', true)) { ?><img class="banner-img <?php if( !get_post_meta($post->ID, 'image_3', true)) { ?>double<?php } else { ?>triple<?php } ?>" alt="" src="<?php the_field('image_2'); ?>" /><?php } ?>
			<?php if( get_post_meta($post->ID, 'image_3', true)) { ?><img class="banner-img triple" alt="" src="<?php the_field('image_3'); ?>" /><?php } ?>
		</div>
	</div>
	<?php } ?>
	<div id="mobile-nav" class="mobile cont"><?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?></div>
	<?php if(!is_page('portfolio')) { ?>
	<div id="main-wrap" class="cont">
		<div class="mid-cont">
			<div id="wrapper" class="cont">
				<div class="page-icon desktop"><?php if(is_404()) { ?><img class="banner-img" alt="" src="<?php echo get_template_directory_uri(); ?>/images/404.gif" /><?php } else { ?><?php the_post_thumbnail('full'); ?><?php } ?></div>
				<div class="copy">
					<div class="page-header">
						<?php if(is_404()) { ?>Oops! Sorry that page doesn’t seem to exist<?php } else { ?><?php the_field('page_header'); ?><?php } ?>
					</div>
					<div class="content cont">				
						
							<?php if(is_404()) { ?>Use the navigation above to view another page, or <a href="/">click here to go back to the homepage</a>.
							<?php } else { ?>
								
							<?php while ( have_posts() ) : the_post(); ?><?php the_content(); ?><?php endwhile; ?>
							
							<?php } ?>
						
					</div>
				</div>
	<?php } ?>