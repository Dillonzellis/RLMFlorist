<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div class="container">
	<div class="checkout-header-wrapper">
		<img loading=lazy src="<?php echo get_template_directory_uri(); ?>/img/about-us-logo.png" alt="">

		<h1>We are closed for vacation 6/12-6/20.</h1>
		<br>
		<h1>Thank you for your patience.</h1>

		<h4 class="title">Our shop serves the following areas in Georgia: Flowery Branch, Gainesville, Buford, Hoschton, Braselton,
			Winder and Oakwood.</h4>

		<h5 class="subtitle">***In Store Pickups and Deliveries are only available during store hours.***</h5>
		<div class="hours-title">
			Store Hours
		</div>
		<div class="hours">
			Monday: Call in only, showroom closed.
		</div>
		<div class="hours">
			Tuesday: 10:00am - 4:00pm
		</div>
		<div class="hours">
			Wednesday: 10:00am - 4:00pm
		</div>
		<div class="hours">
			Thursday: 10:00am - 4:00pm
		</div>
		<div class="hours">
			Friday: 10:00am - 4:00pm
		</div>
		<div class="hours">
			Saturday: 10:00am - 12:00pm
		</div>

		<h5 class="post-hours">
			RLM Florist offers 24 hour phone and internet service for your orders and questions after the showroom has 	closed.
		</h5>

		<div class="store-phone">
			770-536-7306
		</div>

		<h1>Checkout</h1>
	
		

	</div>

	<?php
	do_action( 'woocommerce_before_checkout_form', $checkout );

	// If checkout registration is disabled and not logged in, the user cannot checkout.
	if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
		echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'understrap' ) ) );
		return;
	}

	?>

	<form name="checkout" method="post" class="checkout woocommerce-checkout"
		action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

		<?php if ( $checkout->get_checkout_fields() ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

		<div class="row" id="customer_details">
			<div class="col-12 col-sm-7">
				<?php do_action( 'woocommerce_checkout_billing' ); ?>
			</div>

			<div class="col-12 col-sm-5">
				<?php do_action( 'woocommerce_checkout_shipping' ); ?>
			</div>
		</div>

		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

		<?php endif; ?>

		<h3 id="order_review_heading"><?php esc_html_e( 'Your order', 'understrap' ); ?></h3>

		<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

		<div id="order_review" class="woocommerce-checkout-review-order">
			<?php do_action( 'woocommerce_checkout_order_review' ); ?>
		</div>

		<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

	</form>

	<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
</div>