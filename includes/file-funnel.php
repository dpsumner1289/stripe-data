<?php

// Include all admin files

foreach ( glob( plugin_dir_path( __FILE__ ) . "../admin/*.php" ) as $file ) {
    include_once $file;
}

// Include all template files

foreach ( glob( plugin_dir_path( __FILE__ ) . "../templates/*.php" ) as $file ) {
    include_once $file;
}

// Include all style files

include_once plugin_dir_path( __FILE__ ) . "styles.php";