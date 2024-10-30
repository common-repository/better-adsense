<?php

/**
 * 
 *
 * @package     MYSIAK Better AdSense
 * @subpackage  Admin
 * @copyright   Copyright (c) 2017, Przemyslaw Mysiak
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0
 */
// Exit if accessed directly
if( !defined( 'ABSPATH' ) )
    exit;




// display main settings page
function mba_pluginDescription(){
	global $mbaOptions;

if(!current_user_can('manage_options')){
wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
}
/*add any form processing code here in PHP:*/
?>
<div class="mba-plugin-container">

<h1><?php echo MBA_PLUGIN_NAME . ' ' . MBA_PLUGIN_VERSION . ' Plugin'; ?></h1>

<main>
  
  <input id="tab1" type="radio" name="tabs" checked>
  <label for="tab1">Google Ad Codes</label>
    
 
    
  <input id="tab3" type="radio" name="tabs">
  <label for="tab3">Help</label>

    
  <section id="content1">
    <div class="mba-left">
<h2>AdSense Codes</h2>
<p>Set your Google AdSense ads below. You can use up to 5 Ads!</p>
	<?php mba_generateAdsCodesForm(); ?>

</form>
</div>
<div class="mba-right">
<h2>How to use?</h2>
<p><strong>Shortcode:</strong> [mba id=id]</p>
<p><strong>PHP:</strong> echo do_shortcode('[mba id=id]'); </p>

<h2>About <?php echo MBA_PLUGIN_NAME . ' ' . MBA_PLUGIN_VERSION; ?></h2>
<p>
✓ Easy to start<br />
✓ AdSense Responsive Ads ready<br />
✓ 1 minute configure time<br />
✓ 5 different ad codes
</p>

<h2>Questions/Problems/Bugs?</h2>
<p><strong>Name:</strong> Przemyslaw Mysiak</p>
<p><strong>E-Mail:</strong> hello@mysiak.net</p>
<p><strong>www:</strong> <a href="http://mysiak.net/">http://mysiak.net</a></p>
</div>
  </section>
    
  <section id="content3">
    <h2>Help section</h2>
    <p>If you have problems with MBA, feel free to contact with me!</p>
<p><strong>name:</strong> Przemyslaw Mysiak</p>
<p><strong>e-mail:</strong> hello@mysiak.net</p>
<p><strong>www:</strong> <a href="http://mysiak.net/">http://mysiak.net</a></p>
  </section>
    

</main>




<?php } ?>
