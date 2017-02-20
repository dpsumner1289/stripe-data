<?php

/* -- Enqueue CSS Files -- */			

add_action( 'admin_enqueue_scripts', 'load_admin_styles' );
function load_admin_styles() {
	wp_enqueue_style( 'stripe-admin-style', '/'.STRIPE_DATA_PATH.'/styles/stripe-admin.css', array(), null, 'all' );
} 