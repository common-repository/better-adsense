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

// add new menu to admin page
	add_action( 'admin_menu', 'mba_addAdminMenu' );


function mba_addAdminMenu(){
	add_menu_page('Better AdSense Settings', 'Better AdSense', 'manage_options', 'mysiak-better-adsense', 'mba_pluginDescription', '');
}

// register plugin settings
if ( is_admin() ){
  add_action( 'admin_init', 'mba_registerSettings' );
}

// register plugin settings #2
function mba_registerSettings() {
	//register our settings
	register_setting( 'mba-app', 'mba' );
}


// create shortcode [mba id=id]
add_shortcode( 'mba', 'mba_adCode' );
// Enable shortcodes in text widgets
add_filter('widget_text','do_shortcode');

?>
