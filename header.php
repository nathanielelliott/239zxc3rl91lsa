<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.css" />
<!-- Favicon -->
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon/favicon.ico">
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed">
	<img src="<?php bloginfo('template_url'); ?>/images/preloader.gif" id="site_preloader">
	<header id="masthead" class="site-header" role="banner">
		<div class="site">
			<div class="logo">
            	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="" /></a>
            </div>
            <nav id="site-navigation" class="main-navigation" role="navigation">
                <h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>
                <a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
            </nav><!-- #site-navigation -->
            <div class="clear_c"></div>
        </div>
	</header><!-- #masthead -->
	
	<div id="main_container">
        <div id="main" class="wrapper site">