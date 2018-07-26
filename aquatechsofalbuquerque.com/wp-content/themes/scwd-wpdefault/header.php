<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Default
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!-- <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" /> -->

<?php wp_head(); ?>
</head>

<body <?php body_class( ! is_home() && ! is_front_page() ? "inner" : ""); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'scwd' ); ?></a>

	<header id="masthead" class="site-header main">
		<div class="container-fluid">
			<?php scwd_the_custom_logo(); ?>
			<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
			<?php if ( has_nav_menu( 'top' ) ) : ?>
				<div class="navigation-top">
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div><!-- .navigation-top -->
			<?php endif; ?>
			<div class="link">
				<div class="cont">
					<img src="http://localhost/aquatechsofalbuquerque.com/wp-content/uploads/2018/07/phone.png" alt="">
					<?php if ( checkoption( 'phone' ) ): 
						echo do_shortcode('[scwd_option var="phone" type="link" text="" link_type="phone" class="phone" icon="fa|fa-blank" icon_position="before"]');
					endif; ?>
				</div>
			</div>
		</div>

	</header>

	<?php if ( is_active_sidebar( 'banner' ) ) : ?>
		<div id="banner" class="widget-area clearfix" >
			<?php dynamic_sidebar( 'banner' ); ?>
		</div><!-- .widget-area -->
	<?php endif; ?>

	<?php get_template_part( 'template-parts/page/content', 'page-top' ) ?>

	<div id="content" class="site-content main">
			
