<?php

/**
 * 
 *
 * @package     MYSIAK Better AdSense
 * @subpackage  Function/Scripts
 * @copyright   Copyright (c) 2017, Przemyslaw Mysiak
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0
 */
// Exit if accessed directly
if( !defined( 'ABSPATH' ) )
    exit;




// add better-adsense.css style to head section
add_action( 'admin_enqueue_scripts', 'mba_loadAdminScripts' );

function mba_loadAdminScripts() {
        wp_enqueue_style( 'mba-style', MBA_PLUGIN_URL . 'assets/better-adsense.css', false, MBA_PLUGIN_VERSION );
	wp_enqueue_script( 'mba-js', MBA_PLUGIN_URL . 'assets/better-adsense.js', array(), MBA_PLUGIN_VERSION, true );
}


?>
