<?php 
/**
 * Plugin Name: WooCommerce Cart Page Skipper
 * Plugin URI: https://github.com/kamaroly/wc-cart-page-skipper
 * Description: Enable this plugin to skip cart page upon adding Item to cart
 * Author: KAMARO Lambert(Paul)
 * Author URI: #
 * Version: 1.0.0
 * License: GPL3
 */

add_filter('woocommerce_add_to_cart_redirect', 'Wc_Redirect_Add_To_Cart');

/**
 * Overwrite redirect aDD TO Cart to checkout URL
 */
function Wc_Redirect_Add_To_Cart() {
    global $woocommerce;
    $wc_redirect_url_checkout = wc_get_checkout_url();
    return $wc_redirect_url_checkout;
}

add_filter( 'woocommerce_product_single_add_to_cart_text', 'Wc_ButtonNext_Cart' );
add_filter( 'woocommerce_product_add_to_cart_text', 'Wc_ButtonNext_Cart' );

/**
 * Overwrite message for view Cart
 */
function Wc_ButtonNext_Cart() {
    return __( 'Buy ', 'woocommerce' );
}
