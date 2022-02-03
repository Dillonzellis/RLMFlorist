<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

// Exit if accessed directly.
defined("ABSPATH") || exit();

$understrap_includes = [
    "/theme-settings.php", // Initialize theme default settings.
    "/setup.php", // Theme setup and custom theme supports.
    "/widgets.php", // Register widget area.
    "/enqueue.php", // Enqueue scripts and styles.
    "/template-tags.php", // Custom template tags for this theme.
    "/pagination.php", // Custom pagination for this theme.
    "/hooks.php", // Custom hooks.
    "/extras.php", // Custom functions that act independently of the theme templates.
    "/customizer.php", // Customizer additions.
    "/custom-comments.php", // Custom Comments file.
    "/jetpack.php", // Load Jetpack compatibility file.
    "/class-wp-bootstrap-navwalker.php", // Load custom WordPress nav walker.
    "/woocommerce.php", // Load WooCommerce functions.
    "/editor.php", // Load Editor functions.
    "/deprecated.php", // Load deprecated functions.
];

foreach ($understrap_includes as $file) {
    $filepath = locate_template("inc" . $file);
    if (!$filepath) {
        trigger_error(
            sprintf("Error locating /inc%s for inclusion", $file),
            E_USER_ERROR
        );
    }
    require_once $filepath;
}

/**
 * Show cart contents / total Ajax
 */
add_filter(
    "woocommerce_add_to_cart_fragments",
    "woocommerce_header_add_to_cart_fragment"
);

function woocommerce_header_add_to_cart_fragment($fragments)
{
    global $woocommerce;

    ob_start();
    ?>
<a class="cart-icon-number"
	href="<?php echo esc_url(
     wc_get_cart_url()
 ); ?>"><?php echo WC()->cart->get_cart_contents_count(); ?></a>
<?php
$fragments["a.cart-icon-number"] = ob_get_clean();
return $fragments;
}

// adds class view-cart to btn in mini-cart template
remove_action(
    "woocommerce_widget_shopping_cart_buttons",
    "woocommerce_widget_shopping_cart_button_view_cart",
    10
);

function my_woocommerce_widget_shopping_cart_button_view_cart()
{
    echo '<a href="' .
        esc_url(wc_get_cart_url()) .
        '" class="button wc-forward view-cart">' .
        esc_html__("View Cart", "woocommerce") .
        "</a>";
}

add_action(
    "woocommerce_widget_shopping_cart_buttons",
    "my_woocommerce_widget_shopping_cart_button_view_cart",
    10
);

/**
 * Change number of related products output
 */
function woo_related_products_limit()
{
    global $product;

    $args["posts_per_page"] = 6;
    return $args;
}
add_filter(
    "woocommerce_output_related_products_args",
    "jk_related_products_args",
    20
);
function jk_related_products_args($args)
{
    $args["posts_per_page"] = 4; // 4 related products
    $args["columns"] = 4; // arranged in 2 columns
    return $args;
}

// Exclude categories from single-product page related products
add_filter(
    "woocommerce_related_products",
    "exclude_product_category_from_related_products",
    10,
    3
);
function exclude_product_category_from_related_products(
    $related_posts,
    $product_id,
    $args
) {
    // HERE define your product category slug
    $term_slug = "happy-holiday";

    // Get the product Ids in the defined product category
    $exclude_ids = wc_get_products([
        "status" => "publish",
        "limit" => -1,
        "category" => [$term_slug],
        "return" => "ids",
    ]);

    return array_diff($related_posts, $exclude_ids);
}

// remove optional text on checkout fields
add_filter(
    "woocommerce_form_field",
    "elex_remove_checkout_optional_text",
    10,
    4
);
function elex_remove_checkout_optional_text($field, $key, $args, $value)
{
    if (is_checkout() && !is_wc_endpoint_url()) {
        $optional =
            '&nbsp;<span class="optional">(' .
            esc_html__("optional", "woocommerce") .
            ")</span>";
        $field = str_replace($optional, "", $field);
    }
    return $field;
}

// ajax to update order summary to update shipping method
add_action("wp_footer", "billing_country_update_checkout", 50);
function billing_country_update_checkout()
{
    if (!is_checkout()) {
        return;
    } ?>
    <script type="text/javascript">
        jQuery(function($){
            $('select#billing_state, select#shipping_state, #billing_postcode_field').on( 'change', function (){
                var t = { updateTimer: !1,  dirtyInput: !1,
                reset_update_checkout_timer: function() {
                    clearTimeout(t.updateTimer)
                    },
                trigger_update_checkout: function() {
                    t.reset_update_checkout_timer(), t.dirtyInput = !1,
                    $(document.body).trigger("update_checkout")
                }
                };
                $(document.body).trigger('update_checkout');
                console.log('Event: update_checkout');
            });
        });
    </script>
    <?php
}

// update date of delivery text when in store shipping
add_action( 'wp_footer', 'cart_update_script', 999 );
function cart_update_script() {
    if (is_checkout()) :
     ?>

    <script>
        jQuery( function( $ ) {

            // woocommerce_params is required to continue, ensure the object exists
            if ( typeof woocommerce_params === 'undefined' ) {
                return false;
            }

            $(document).on( 'change', '#shipping_method input[type="radio"]', function() {
                $("label[for='order_date_of_delivery']").text('Date of Pickup');
            });
        });
    </script>
    <?php
    endif;
}


/**
 * Set a minimum order amount for checkout
 */
add_action("woocommerce_checkout_process", "wc_minimum_order_amount");
// add_action("woocommerce_before_cart", "wc_minimum_order_amount");

function wc_minimum_order_amount()
{
    
    // Set this variable to specify a minimum order value
    $minimum = 34.99;

    $chosen_shipping = WC()->session->get( 'chosen_shipping_methods' )[0];

    if (WC()->cart->total < $minimum && $chosen_shipping != 'local_pickup:7') {
        if (is_cart()) {
            wc_print_notice(
                sprintf(
                    "Your current order total is %s — you must have an order with a minimum of %s to place your order for delivery. In store pickup has no minimum requirement.",
                    wc_price(WC()->cart->total),
                    wc_price($minimum)
                ),
                "error"
            );
        } else {
            wc_add_notice(
                sprintf(
                    "Your current order total is %s — you must have an order with a minimum of %s to place your order for delivery. In store pickup has no minimum requirement.",
                    wc_price(WC()->cart->total),
                    wc_price($minimum)
                ),
                "error"
            );
        }
    }    
}

// create character limit for recipient card message
add_filter( 'woocommerce_checkout_fields', 'bbloomer_checkout_fields_custom_attributes', 9999 );

function bbloomer_checkout_fields_custom_attributes( $fields ) {
    $fields['order']['order_card_message']['maxlength'] = 120;
    return $fields;
 }

 // minimum for credit card input
 add_action( 'woocommerce_checkout_process', 'bbloomer_checkout_fields_custom_validation' );
   
function bbloomer_checkout_fields_custom_validation() { 
   if ( isset( $_POST['billing_credit_card_number'] ) && ! empty( $_POST['billing_credit_card_number'] ) ) {
      if ( strlen( $_POST['billing_credit_card_number'] ) < 16 ) {
         wc_add_notice( 'Credit Card requires at least 16 numbers', 'error' );
      }
   }   
}