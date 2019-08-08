<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package News_Today_24
 */

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Smarty - Multipurpose + Admin</title>
		<meta name="description" content="" />
		<meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<!-- WEB FONTS : use %7C instead of | (pipe) -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

		<!-- SWIPER SLIDER -->
		<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/plugins/slider.swiper/dist/css/swiper.min.css" rel="stylesheet" type="text/css" />

		<!-- THEME CSS -->
		<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/essentials.css" rel="stylesheet" type="text/css" />
		<link href="<?php bloginfo('stylesheet_directory');?>/assets/css/layout.css" rel="stylesheet" type="text/css" />

		<!-- PAGE LEVEL SCRIPTS -->
		<link href="<?php bloginfo('stylesheet_directory');?>/assets/css/header-1.css" rel="stylesheet" type="text/css" />
		<link href="<?php bloginfo('stylesheet_directory');?>/assets/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />
	</head>
<body <?php body_class(); ?>>
<div id="page" class="site">
	<br>
	<div style="top:30px;" class="border-top block clearfix">
		<div class="container">
			<!-- Logo -->
			<a class="logo has-banner float-left text-center-md" href="index.html">
				<?php the_custom_logo(); ?>
			</a>
		</div>
	</div>


	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bootstrap2wordpress' ); ?></a>
	<header id="topNav">
					<div class="container">
						<div class="navbar-collapse collapse float-left nav-main-collapse pl-0 pr-0">
							<nav class="nav-main">
									</nav>
									</div>
									<?php
									wp_nav_menu( array(
										'theme_location'  => 'menu-1',
										'container' 	  => 'div',
										'container_class' => 'nnavbar-collapse ',
										'menu_class'      => 'collapse float-left nav-main-collapse pl-0 pr-0',
										'container'       => 'nav',
										'container_class' => 'nav-main',
										'container'       => 'ul',
										'menu_id'         => 'topMain',
										'menu_class'      => 'nav nav-pills nav-main',
									));
								?>	
							</nav>
					</div>
			</div>
		</header>
</div>
								