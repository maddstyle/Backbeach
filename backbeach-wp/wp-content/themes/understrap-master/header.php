<?php

/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
	<?php do_action('wp_body_open'); ?>
	<div class="site" id="page">

		<!-- ******************* The Navbar Area ******************* -->
		<div id="wrapper-navbar">

			<div class="top-header-holder">
				<div class="container">
					<div class="row align-items-end">
						<div class="col-md-4">
							<a href="/" class="logo-holder">
								<img src="<?php echo get_template_directory_uri(); ?>/images/Nav-logo.svg" alt="Backbeach logo">
							</a>
						</div>
						<div class="col-md-6">
							<div class="reservation-holder">
								<div class="contact-holder">
									<a href="#" class="phone">
										<i class="fa fa-phone"></i>
										(561)-555-6666
									</a>
									<a href="#" class="address">
										<i class="fa fa-map-marker"></i>
										789 Atlantic Ave, Delray Beach
									</a>
									<div class="social-media-holder-tablet">
										<a href="#"><i class="fa fa-facebook-square"></i></a>
										<a href="#"><i class=" fa fa-instagram"></i></a>
									</div>
									<button class="navbar-toggler md-view" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'understrap'); ?>">
										<div class="menu-title">
											Menu
										</div>
										<div>
											<div class="bar"></div>
											<div class="bar"></div>
											<div class="bar"></div>
										</div>
										<!-- <span class="navbar-toggler-icon">
								</span> -->
									</button>
								</div>
								<a href="#" class="reservation-btn">Make a Reservation</a>
							</div>
						</div>
						<div class="col-">
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'understrap'); ?>">
								<div class="bar"></div>
								<div class="bar"></div>
								<div class="bar"></div>
								<div class="menu-title">Menu</div>
								<!-- <span class="navbar-toggler-icon">
								</span> -->
							</button>
							<div class="social-media-holder">
								<a href="#"><i class="fa fa-facebook-square"></i></a>
								<a href="#"><i class=" fa fa-instagram"></i></a>
							</div>
						</div>
					</div>
					<!-- create new div to control mobile version of logo -->
					<div class="mobile-logo-holder">
						<div>
							<a href="/">
								<img src="<?php echo get_template_directory_uri(); ?>/images/Nav-logo.svg" alt="Backbeach logo">
							</a>
						</div>
						<div>
							<a href="#" class="reservation-btn mobile">Make a Reservation</a>
						</div>
					</div>
				</div>
			</div>


			<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e('Skip to content', 'understrap'); ?></a>

			<nav id="main-nav" class="navbar navbar-expand-lg" aria-labelledby="main-nav-label">

				<h2 id="main-nav-label" class="sr-only">
					<?php esc_html_e('Main Navigation', 'understrap'); ?>
				</h2>


				<div class="container">




					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'understrap'); ?>">
						<span class="navbar-toggler-icon"></span>
					</button>

					<!-- The WordPress Menu goes here -->
					<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'primary',
							'container_class' => 'collapse navbar-collapse',
							'container_id'    => 'navbarNavDropdown',
							'menu_class'      => 'navbar-nav',
							'fallback_cb'     => '',
							'menu_id'         => 'main-menu',
							'depth'           => 2,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
					);
					?>

				</div><!-- .container -->


			</nav><!-- .site-navigation -->

		</div><!-- #wrapper-navbar end -->