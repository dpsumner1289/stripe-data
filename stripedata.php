<?php 
/*
Plugin Name: Stripe Data Manipulation
Plugin URI:  http://webdev.douglassumner.com
Description: Software that allows acocuntants to manipulate Stripe Data without having to log in to their Stripe accounts, and also to view the common calculations of said data.
Version:     1.0
Author:      Douglas Sumner
Author URI:  http://webdev.douglassumner.com/
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wporg
Domain Path: /languages
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

// define version
define( 'HOOKTURN_ITEM_VERSION', '1.0' );

// Define Path
if ( ! defined( 'STRIPE_DATA_PATH' ) ) {
	define( 'STRIPE_DATA_PATH' , str_replace( site_url().'/', '', plugin_dir_url( __FILE__ ) ).'assets/' );
}

include_once 'includes/file-funnel.php';

function stripe_date_display($atts) {
	$request = new WP_REST_Request( 'GET', 'https://api.stripe.com' );
	$response = rest_do_request( $request );
	 
	if ( $response->is_error() ) {
	    // Convert to a WP_Error object.
	    echo '<p>No Data!:</p>';
	}
	 
	$data = $response->get_data();
	$headers = $response->get_headers();
	echo '<p>Success! Here is the data:</p>';
	var_dump( $data );
}

add_shortcode( 'stripedata', 'stripe_date_display' );