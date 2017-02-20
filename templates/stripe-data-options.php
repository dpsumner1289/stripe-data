<?php

$logo = '/' . STRIPE_DATA_PATH . 'images/logo.jpg';

/** Step 2 (from text above). */
add_action( 'admin_menu', 'stripe_data_menu' );

/** Step 1. */
function stripe_data_menu() {
	add_menu_page( 'Stripe Data Options', 'Stripe Data', 'manage_options', 'stripe-data-options', 'stripe_data_options');
	// add_options_page( 'Stripe Data Options', 'Stripe Data', 'manage_options', 'stripe-data-options', 'stripe_data_options' );
}

/** Step 3. */
function stripe_data_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	echo '<div class="wrap stripe-admin">';
	echo '<h1>Stripe Data Options</h1>';
	echo '<form method="post">
			<label for="test_secret_key">Test Secret Key:</label>
			<br/>
			<input type="text" id="test_secret_key" name="test_secret_key"></input><input type="submit" value="Save" class="save_button"></input>
		</form>
			<br/>
		<form method="post">
			<label for="test_publishable_key">Test Publishable Key:</label>
			<br/>
			<input type="text" id="test_publishable_key" name="test_publishable_key"></input><input type="submit" value="Save" class="save_button"></input>
		</form>
		<form method="post">
			<br/>
			<br/>
			<br/>
			<label for="">Live Secret Key:</label>
			<br/>
			<input type="text" id="live_secret_key" name="live_secret_key"></input><input type="submit" value="Save" class="save_button"></input>
		</form>
		<form method="post">
			<br/>
			<label for="live_publishable_key">Live Publishable Key:</label>
			<br/>
			<input type="text" id="live_publishable_key" name="live_publishable_key"></input><input type="submit" value="Save" class="save_button"></input>
		  </form>';
	echo '</div>';
	$test_secret_key = trim($_POST["test_secret_key"]);
	$test_publishable_key = trim($_POST["test_publishable_key"]);
	$live_secret_key = trim($_POST["live_secret_key"]);
	$live_publishable_key = trim($_POST["live_publishable_key"]);

	echo 'Your Test Secret Key is: ' . $test_secret_key;
}
?>
