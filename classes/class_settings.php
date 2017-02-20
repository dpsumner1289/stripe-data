<?php

/**
 * Base settings class
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'SD_Settings' ) ) {
	class SD_Settings {
		var $user;

		function set_test_secret($new_test_secret_key) {
			$this->test_secret_key = $new_test_secret_key;
		}

		function set_test_publishable($new_test_publishable_key) {
			$this->test_publishable_key = $new_test_publishable_key;
		}

		function get_test_secret() {
			return $this->test_secret_key;
		}

		function get_test_publishable() {
			return $this->test_publishable_key;
		}
	}
}