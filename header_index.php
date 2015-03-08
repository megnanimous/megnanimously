<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package _s
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', '_s' ); ?></a>

	<nav id="site-navigation">
		<div id="transparency"></div>
			<a href="http://www.megnanimously.com"><div id="logo"></div></a>
			<div id="nav-links" class="main-navigation" role="navigation">
			</div>
		</nav><!-- #site-navigation -->

	<header id="masthead" class="site-header" role="banner">
<!-- 		<div id="tagline">the adventures of an American expat in Berlin</div> -->
		<div class="site-branding" align="center">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		


		<?php $header_image = get_header_image();
        if ( ! empty( $header_image ) ) { ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" />
            </a>
        </div>

<?php } // if ( ! empty( $header_image ) )
?>


		
	</header><!-- #masthead -->
	
	<div id="content" class="site-content">

