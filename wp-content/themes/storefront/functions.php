<?php
/**
 * Storefront engine room
 *
 * @package storefront
 */

/**
 * Assign the Storefront version to a var
 */
$theme              = wp_get_theme( 'storefront' );
$storefront_version = $theme['Version'];

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 980; /* pixels */
}

$storefront = (object) array(
	'version'    => $storefront_version,

	/**
	 * Initialize all the things.
	 */
	'main'       => require 'inc/class-storefront.php',
	'customizer' => require 'inc/customizer/class-storefront-customizer.php',
);

require 'inc/storefront-functions.php';
require 'inc/storefront-template-hooks.php';
require 'inc/storefront-template-functions.php';
require 'inc/wordpress-shims.php';

if ( class_exists( 'Jetpack' ) ) {
	$storefront->jetpack = require 'inc/jetpack/class-storefront-jetpack.php';
}

if ( storefront_is_woocommerce_activated() ) {
	$storefront->woocommerce            = require 'inc/woocommerce/class-storefront-woocommerce.php';
	$storefront->woocommerce_customizer = require 'inc/woocommerce/class-storefront-woocommerce-customizer.php';

	require 'inc/woocommerce/class-storefront-woocommerce-adjacent-products.php';

	require 'inc/woocommerce/storefront-woocommerce-template-hooks.php';
	require 'inc/woocommerce/storefront-woocommerce-template-functions.php';
	require 'inc/woocommerce/storefront-woocommerce-functions.php';
}

if ( is_admin() ) {
	$storefront->admin = require 'inc/admin/class-storefront-admin.php';

	require 'inc/admin/class-storefront-plugin-install.php';
}

/**
 * NUX
 * Only load if wp version is 4.7.3 or above because of this issue;
 * https://core.trac.wordpress.org/ticket/39610?cversion=1&cnum_hist=2
 */
if ( version_compare( get_bloginfo( 'version' ), '4.7.3', '>=' ) && ( is_admin() || is_customize_preview() ) ) {
	require 'inc/nux/class-storefront-nux-admin.php';
	require 'inc/nux/class-storefront-nux-guided-tour.php';

	if ( defined( 'WC_VERSION' ) && version_compare( WC_VERSION, '3.0.0', '>=' ) ) {
		require 'inc/nux/class-storefront-nux-starter-content.php';
	}
}

/*increment*/
  // 
// add_action( 'init', 'add_filter_to_overwrite_increment' );

// function add_filter_to_overwrite_increment() {
//     add_filter( 'woocommerce_quantity_input_args', 'overwrite_woocommerce_quantity_input_args', 10, 2 );
// }

// function overwrite_woocommerce_quantity_input_args( $args, $product ) {
//     $args['input_value'] = 1; // Starting quantity value
//     $args['max_value'] = 100; // Quantity can not go beyond this value
//     $args['min_value'] = 1;   // Quantity cannot go below this value
//     $args['step'] = 5;        // Value with which you want to increment or decrement
//     return $args;
// }
/**
 * Adjust the quantity input values
 */
// add_filter( 'woocommerce_quantity_input_args', 'rk_bag_qty_input_args', 10, 2 ); // Simple products

// function rk_bag_qty_input_args( $args, $product ) {
	
// 	$args['input_value'] = 1;
// 	$args['max_value'] 	= 80; 	// Maximum value
// 	$args['min_value'] 	= 5;   	// Minimum value
// 	$args['step'] 		= 5;    // Quantity steps
// 	return $args;
// }

// add_filter( 'woocommerce_available_variation', 'jk_woocommerce_available_variation' ); // Variations

// function jk_woocommerce_available_variation( $args ) {
// 	$args['max_qty'] = 80; 		// Maximum value (variations)
// 	$args['min_qty'] = 5;   	// Minimum value (variations)
// 	return $args;
// }

// add_action( 'init', 'add_filter_to_overwrite_increment' );

// function add_filter_to_overwrite_increment() {
//     add_filter( 'woocommerce_quantity_input_args', 'overwrite_woocommerce_quantity_input_args', 10, 2 );
// }

// function overwrite_woocommerce_quantity_input_args( $args, $product ) {
//     $args['input_value'] = 1; // Starting quantity value
//     $args['max_value'] = 100; // Quantity can not go beyond this value
//     $args['min_value'] = 1;   // Quantity cannot go below this value
//     $args['step'] = 5;        // Value with which you want to increment or decrement
//     return $args;
// }
