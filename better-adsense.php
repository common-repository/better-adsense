<?php
/*
Plugin Name: MYSIAK Better AdSense
Plugin URI: http://wordpress.org/plugins/better-adsense/
Description: Wordpress Adsense plugin with responsive units support. Now you can earn more money with our plugin.
Author: Przemysław Mysiak
Version: 1.0.6
Author URI: http://mysiak.net
*/
defined( 'ABSPATH' ) or die();

// Plugin version - MBA = MysiakBetterAdSense
if(!defined('MBA_PLUGIN_VERSION')) {
    define('MBA_PLUGIN_VERSION', '1.0.6');
}

// Plugin name
if(!defined('MBA_PLUGIN_NAME')) {
    define('MBA_PLUGIN_NAME', 'MYSIAK Better Adsense');
}

if(!defined('MBA_PLUGIN_DIR')) {
    define('MBA_PLUGIN_DIR', plugin_dir_path(__FILE__));
}

if(!defined('MBA_PLUGIN_URL')) {
    define('MBA_PLUGIN_URL', plugin_dir_url(__FILE__));
}

// global options
	$mbaSettings = array('mba_settings' =>
				array('maximum_ads' => 5)
			    );
	$mbaGetOption = array();
	if(get_option('mba')) {
	$mbaGetOption = get_option('mba');
	}
	 
	$mbaOptions = array_merge($mbaSettings, $mbaGetOption);
	
	
// include inc files
	 require_once MBA_PLUGIN_DIR . 'inc/admin.php';
	 require_once MBA_PLUGIN_DIR . 'inc/settings.php';
	 require_once MBA_PLUGIN_DIR . 'inc/scripts.php';
	 require_once MBA_PLUGIN_DIR . 'inc/adsense.php';
	 require_once MBA_PLUGIN_DIR . 'inc/widgets.php';

?>
