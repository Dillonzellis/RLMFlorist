<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
		integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action( 'wp_body_open' ); ?>
	<div class="site" id="page">

		<div id="wrapper-nav">

			<div class="top-header">

				<div class="container-fluid ">

					<div class="row custom-flex">

						<div class="col col-lg-2">

							<a href="<?php echo esc_url( home_url( '/' ) ); ?>">

								<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo"
									srcset="">

							</a>

						</div>

						<div class="col col-lg-9">

							<nav id="main-nav" class="navbar navbar-expand-xl bg-header-bg">

								<div class="mobile-menu-dropdown">
									<button class="navbar-toggler" type="button" data-toggle="collapse"
										data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
										aria-expanded="false"
										aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
										<i class="fas fa-bars fa-2x"></i>
									</button>
								</div>

								<?php wp_nav_menu(
									array(
										'theme_location'  => 'primary',
										'container_class' => 'collapse navbar-collapse',
										'container_id'    => 'navbarNavDropdown',
										'menu_class'      => 'navbar-nav ml-auto',
										'fallback_cb'     => '',
										'menu_id'         => 'main-menu',
										'depth'           => 2,
										'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
										)
								); ?>

							</nav>

						</div>

						<div class="col col-lg-1">

							<div class="cart-icon">

								<a href="#"><i class="fas fa-shopping-cart fa-lg"></i></a>

							</div>

						</div>

					</div>

				</div>

			</div>








		</div><!-- #wrapper-navbar end -->