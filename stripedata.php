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

require_once('vendor/autoload.php');

function stripe_date_display($atts) {
	// $customer = \Stripe\Customer::all();
	 
	echo '<p>Success! Here is the data:</p>';
	// var_dump( $request );
	echo '<h1>Customer List</h1>';
	// var_dump( $customer );
}

add_shortcode( 'stripedata', 'stripe_date_display' );