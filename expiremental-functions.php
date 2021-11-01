<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

foreach ( $understrap_includes as $file ) {
	$filepath = locate_template( 'inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}

/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );

function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
<a class="cart-icon-number"
	href="<?php echo esc_url(wc_get_cart_url()); ?>"><?php echo WC()->cart->get_cart_contents_count();?></a>
<?php
	$fragments['a.cart-icon-number'] = ob_get_clean();
	return $fragments;
}


// adds class view-cart to btn in mini-cart template
remove_action( 'woocommerce_widget_shopping_cart_buttons', 'woocommerce_widget_shopping_cart_button_view_cart', 10 );

function my_woocommerce_widget_shopping_cart_button_view_cart() {
    echo '<a href="' . esc_url( wc_get_cart_url() ) . '" class="button wc-forward view-cart">' . esc_html__( 'View Cart', 'woocommerce' ) . '</a>';
}

add_action( 'woocommerce_widget_shopping_cart_buttons', 'my_woocommerce_widget_shopping_cart_button_view_cart', 10 );

/**
 * Change number of related products output
 */ 
function woo_related_products_limit() {
	global $product;
	  
	  $args['posts_per_page'] = 6;
	  return $args;
  }
  add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args', 20 );
	function jk_related_products_args( $args ) {
	  $args['posts_per_page'] = 4; // 4 related products
	  $args['columns'] = 4; // arranged in 2 columns
	  return $args;
  	}

  // Exclude categories from single-product page related products
  add_filter( 'woocommerce_related_products', 'exclude_product_category_from_related_products', 10, 3 );
  function exclude_product_category_from_related_products( $related_posts, $product_id, $args  ){
      // HERE define your product category slug
      $term_slug = 'happy-holiday';

      // Get the product Ids in the defined product category
      $exclude_ids = wc_get_products( array(
          'status'    => 'publish',
          'limit'     => -1,
          'category'  => array($term_slug),
          'return'    => 'ids',
      ) );

      return array_diff( $related_posts, $exclude_ids );
  }


/**
 * Set a minimum order amount for checkout
 */
add_action('woocommerce_checkout_process', 'wc_minimum_order_amount');
add_action('woocommerce_before_cart', 'wc_minimum_order_amount');

function wc_minimum_order_amount()
{
    // Set this variable to specify a minimum order value
    $minimum = 34.99;

    if (WC()->cart->total < $minimum) {

        if (is_cart()) {

            wc_print_notice(
                sprintf(
                    'Your current order total is %s — you must have an order with a minimum of %s to place your order ',
                    wc_price(WC()->cart->total),
                    wc_price($minimum)
                ),
                'error'
            );
        } else {

            wc_add_notice(
                sprintf(
                    'Your current order total is %s — you must have an order with a minimum of %s to place your order',
                    wc_price(WC()->cart->total),
                    wc_price($minimum)
                ),
                'error'
            );
        }
    }
}

// hide billing info when in store pickup
add_filter('woocommerce_checkout_fields', 'xa_remove_billing_checkout_fields');

function xa_remove_billing_checkout_fields($fields)
{
    $shipping_method = 'local_pickup:7'; // Value of the applicable shipping method.
	$hide_fields = array( 'billing_address_1', 'billing_address_2', 'billing_city', 'billing_state', 'billing_postcode' );
	
    $chosen_methods = WC()->session->get('chosen_shipping_methods');
    $chosen_shipping = $chosen_methods[0];

     foreach($hide_fields as $field ) {
        if ($chosen_shipping == $shipping_method) {
            $fields['billing'][$field]['required'] = false;
            $fields['billing'][$field]['class'][] = 'hide';
        }
        $fields['billing'][$field]['class'][] = 'billing-dynamic';
    }
    return $fields;
}

add_action( 'wp_footer', 'cart_update_script', 999 );
function cart_update_script() {
    if (is_checkout()) :
//     ?>
//     <style>
//         .hide {display: none!important;}
//     </style>
    <script>
        jQuery( function( $ ) {

            // woocommerce_params is required to continue, ensure the object exists
            if ( typeof woocommerce_params === 'undefined' ) {
                return false;
            }

            $('input:radio[name="shipping_method[0]"]').filter('[value="flat_rate:1"]').prop('checked', true);
			
            $(document).on( 'change', '#shipping_method input[type="radio"]', function() {
                $('.billing-dynamic').toggleClass('hide', this.value == 'local_pickup:7');
                $('#billing_address_1_field').toggleClass('hide');
                $('#billing_address_2_field').toggleClass('hide');
                $('#billing_city_field').toggleClass('hide');
                $('#billing_company_field').toggleClass('hide');
                $('#billing_postcode_field').toggleClass('hide');
                $('#billing_state_field').toggleClass('hide');
                $('#billing_credit_card_number_field').toggleClass('hide');
                $('#billing_credit_card_expirati_field').toggleClass('hide');
                $('#billing_cv_code_field').toggleClass('hide');
                $('.woocommerce-shipping-fields').toggleClass('hide');
                $('#order_comments_field').toggleClass('hide');
                $('#order_card_message_field').toggleClass('hide');
                $("label[for='order_date_of_delivery']").text('Date of Pickup');
            });
        });
    </script>
    <?php
    endif;
}

// Remove Address from cart page when using local delivery

add_action( 'woocommerce_after_checkout_form', 'bbloomer_disable_shipping_local_pickup' );
  
function bbloomer_disable_shipping_local_pickup( $available_gateways ) {
    
   // Part 1: Hide shipping based on the static choice @ Cart
   // Note: "#customer_details .col-2" strictly depends on your theme
 
   $chosen_methods = WC()->session->get( 'chosen_shipping_methods' );
   $chosen_shipping = $chosen_methods[0];
   if ( 0 === strpos( $chosen_shipping, 'local_pickup' ) ) {
   ?>
      <script type="text/javascript">
         jQuery('#customer_details .col-2').fadeOut();
      </script>
   <?php  
   } 
 
   // Part 2: Hide shipping based on the dynamic choice @ Checkout
   // Note: "#customer_details .col-2" strictly depends on your theme
 
   ?>
      <script type="text/javascript">
         jQuery('form.checkout').on('change','input[name^="shipping_method"]',function() {
            var val = jQuery( this ).val();
            if (val.match("^local_pickup")) {
                     jQuery('#customer_details .col-2').fadeOut();
               } else {
               jQuery('#customer_details .col-2').fadeIn();
            }
         });
      </script>
   <?php
}