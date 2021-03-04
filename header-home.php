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
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;1,300;1,400&display=swap"
		rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
		integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Nanum+Myeongjo&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>	
	<?php do_action( 'wp_body_open' ); ?>
	<div class="site" id="page">

		<nav class="navbar navbar-expand-xl">

			<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo" srcset="">
			</a>

			<div class="cart-toggler-holder">
				<div class="mobile-cart">
					<a href="<?php echo esc_url(wc_get_cart_url()); ?>">		
						<i class="fas fa-shopping-cart fa-2x"></i>
						<a class="cart-icon-number"></a>	
					</a>
				</div>
				

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler"
					aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">

					<span class="navbar-toggler-icon">
						<i class="fas fa-bars fa-2x"></i>
					</span>

				</button>
			</div>


			<div class="collapse navbar-collapse" id="navbarToggler">

				<ul class="navbar-nav ml-auto mt-2 mt-lg-0">

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="<?php echo esc_url( home_url( '/shop/occasion' ) ); ?>" id="navbarDropdownMenuLink" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">
							OCCASION
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="<?php echo esc_url( home_url( '/shop/occasion/thinking-of-you' ) ); ?>"><i class="fas fa-chevron-right fa-xs"></i>THINKING OF YOU</a>
							<a class="dropdown-item" href="#"><i class="fas fa-chevron-right fa-xs"></i>THANK YOU</a>
							<a class="dropdown-item" href="#"><i class="fas fa-chevron-right fa-xs"></i>LOVE & ROMANCE</a>
							<a class="dropdown-item" href="#"><i class="fas fa-chevron-right fa-xs"></i>BIRTHDAY</a>
							<a class="dropdown-item" href="#"><i class="fas fa-chevron-right fa-xs"></i>ANNIVERSARY</a>
							<a class="dropdown-item" href="#"><i class="fas fa-chevron-right fa-xs"></i>NEW BABY</a>
							<a class="dropdown-item" href="#"><i class="fas fa-chevron-right fa-xs"></i>CORSAGES & BOUTINEERS</a>
							<a class="dropdown-item" href="#"><i class="fas fa-chevron-right fa-xs"></i>GET WELL</a>
							<a class="dropdown-item" href="#"><i class="fas fa-chevron-right fa-xs"></i>SYMPATHY & FUNERAL</a>
						</div>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">
							HOLIDAYS
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="#"><i class="fas fa-chevron-right fa-xs"></i>EASTER</a>
							<a class="dropdown-item" href="#"><i class="fas fa-chevron-right fa-xs"></i>MOTHER'S DAY</a>
						</div>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">
							BABYCAKES
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="#"><i class="fas fa-chevron-right fa-xs"></i>BABYCAKES CUPCAKES</a>
							<a class="dropdown-item" href="#"><i class="fas fa-chevron-right fa-xs"></i>GIFTS</a>
						</div>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="#">ALL PRODUCTS</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">VENUE & EVENT SERVICES</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">MY ACCOUNT</a>
					</li>
					<li class="nav-item cart">
						<a  class="nav-link pt-0" href="<?php echo esc_url(wc_get_cart_url()); ?>">		
							<i class="fas fa-shopping-cart fa-2x"></i>
							<a class="cart-icon-number"></a>
							<div class="cart-hover-holder">
								<div class="widget_shopping_cart_content"><?php woocommerce_mini_cart(); ?></div>
							</div>		
						</a>
					</li>

				</ul>
			</div>

		</nav>


