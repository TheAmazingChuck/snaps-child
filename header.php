<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Snaps
 * @since Snaps 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>Helene Langlais - Creation graphique</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<?php $header_image = get_header_image(); ?>
    
    <div id="head-cyan">&nbsp;</div>

	<header id="masthead" class="site-header" role="banner" <?php if ( ! empty( $header_image ) ) { ?>style="background:url(<?php header_image(); ?>) no-repeat center center; background-size: cover; height:<?php echo get_custom_header()->height; ?>px;" <?php } ?>>
		<hgroup>
			<div id="logo">
              <a href="<?php bloginfo('url'); ?>/index.php/blog/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" /></a>
			</div>
            <div id="icone">
              <ul>
                <li><a href="https://www.behance.net/hlanglais" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo-be.png" /></a></li>
                <li><a href="../snaps-child-master/hlnlanglais@gmail.com" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo-google.png" /></a></li>
                <li><a href="https://www.facebook.com/helene.langlais" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo-facebook.png" /></a></li>
                <li><a href="https://instagram.com/helene_langlais/" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo-insta.png" /></a></li>
              </ul>
            </div>
		</hgroup>
	</header><!-- #masthead .site-header -->
    
    <div id="custom-nav"><?php wp_nav_menu( array( 'theme_location' => 'menu-custom' ) ); ?>
        </div><!-- .site-navigation .main-navigation -->

	<div id="main" class="site-main">
