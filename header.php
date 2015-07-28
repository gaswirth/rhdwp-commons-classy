<?php
/**
 * RHD Base
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage rhd
 */
?>

<!DOCTYPE html>
	<!--[if lt IE 7]>   <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
	<!--[if IE 7]>     <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
	<!--[if IE 8]>     <html class="no-js lt-ie9"> <![endif]-->
	<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta http-equiv="X-UA-Compatible" content="IE=9" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<title><?php wp_title(); ?></title>
		<link rel="profile" href="//gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

		<?php
			// Basic front page & device detection
			$body_classes[] = ( is_front_page() ) ? 'front-page' : '';
			$body_classes[] = ( rhd_is_mobile() ) ?  'mobile' : '';
			$body_classes[] = ( wp_is_mobile() && !rhd_is_mobile() ) ? 'tablet' : '';
			$body_classes[] = ( !wp_is_mobile() && !rhd_is_mobile() ) ? 'desktop' : '';
			$body_classes[] = ( is_home() || is_single() || is_archive() || is_search() ) ? 'blog-area' : '';

			// Blog name
			$blog_details = get_blog_details( get_current_blog_id() );
			$body_classes[] = substr( $blog_details->path, 1, -1);
		?>

		<?php wp_head(); ?>

	</head>

	<body <?php body_class( $body_classes ); ?>>
		<!--[if lt IE 7]>
			<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="//browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

		<?php
			$nav_args_sb = array(
				'theme_location' => 'primary',
				'menu_id' => 'site-navigation',
				'container' => 'nav',
				'container_id' => 'site-navigation-container'
			);
		?>

		<div class="sb-slidebar sb-right sb-style-push">
			<?php wp_nav_menu( $nav_args_sb ); ?>
		</div>

		<div id="page" class="hfeed site sb-site-container">
			<header id="masthead" class="site-header" role="banner">
				<h1 class="invisible site-title"><?php bloginfo( 'name' ); ?></h1>

				<div class="title-group">
					<a href="<?php echo home_url(); ?>"><img id="site-title" src="<?php echo RHD_IMG_DIR; ?>/logo.png" alt="SITE LOGO"></a>
					<h3 id="site-description"><?php bloginfo( 'description' ); ?></h3>
				</div>

				<button id="hamburger" class="sb-toggle-right cmn-toggle-switch cmn-toggle-switch__htra">
					<span>toggle menu</span>
				</button>
			</header><!-- #masthead -->

			<main id="main" class="clearfix">
