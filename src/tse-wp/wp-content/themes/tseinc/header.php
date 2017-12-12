<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TSE
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'tseinc' ); ?></a>

	<!-- Header
	============================================== -->
	<header id="masthead" class="site-header">
		<!-- Sticky Navbar
		============================================== -->
		<div id="sticky-nav" class="fixed-top navbar-wrapper">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<a class="navbar-brand" href="#"><span class="marquee">tse</span></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navToggle" aria-controls="navToggle" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<?php
				/**
				 * GENERATES:
				 *
				 * <div class="collapse navbar-collapse" id="navToggle">
				 * 	<ul id="menu-main-menu" class="navbar-nav mr-auto">
				 * 	</ul>
				 * </div>
				 *
				 */

					wp_nav_menu( array(
						'theme_location'	=> 'primary',
						'container'				=> 'div',
						'container_id'		=> 'navToggle',
						'container_class'	=> 'collapse navbar-collapse',
						'menu'						=> 'Main Menu',
						'menu_class'			=> 'navbar-nav mr-auto'
					) )
				?>
<!--
 /.navbar-collapse -->
			</nav> <!-- /.navbar -->
		</div> <!-- /.navbar-wrapper -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
