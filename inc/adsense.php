<?php

/**
 * 
 *
 * @package     MYSIAK Better AdSense
 * @subpackage  Function/AdSense
 * @copyright   Copyright (c) 2017, Przemyslaw Mysiak
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0
 */
// Exit if accessed directly
if( !defined( 'ABSPATH' ) )
    exit;
// main function
function mba_adCode($mba_atts) {
	//shortcode_atts(array(
     	//	 'id' => $id,
 	//	 ), $mba_atts);
	$mbaAdId = $mba_atts['id'];

	$mbaAdCode = mba_renderAdSenseCode($mbaAdId);
	return $mbaAdCode;
}

function mba_renderAdSenseCode($mbaAdId) {
	global $mbaOptions;
		
	#var_dump($mbaOptions);
	$ad_name   = "mba_unit" . $mbaAdId;
	$ad_client = $mbaOptions['ads'][$mbaAdId]['adClient'];
	$ad_slot   = $mbaOptions['ads'][$mbaAdId]['adSlot'];
		
	if ($mbaAdId >= 1 || $mbaAdId <= $mbaOptions['mba_settings']['maximum_ads']) {

	$return = "\r\n<!-- Created with " . MBA_PLUGIN_NAME . ' v.' . MBA_PLUGIN_VERSION . " plugin. -->\r\n\r\n";

	$return .= "<script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>\r\n";
	$return .= "<ins class=\"adsbygoogle $ad_name\"\r\n\t";
	$return .= "style=\"display:block\"\r\n\t";
	$return .= "data-ad-client=\"$ad_client\"\r\n\t";
	$return .= "data-ad-slot=\"$ad_slot\"\r\n\t";
	$return .= "data-ad-format=\"auto\"></ins>\r\n";
	$return .= "<script>\r\n";
	$return .= "(adsbygoogle = window.adsbygoogle || []).push({});\r\n";
	$return .= "</script>\r\n";
	$return .= "\r\n<!-- END " . MBA_PLUGIN_NAME . ' v.' . MBA_PLUGIN_VERSION . " plugin. -->\r\n";
	}
	return $return;
}

function mba_generateAdsCodesForm() {
	global $mbaOptions;
 ?>
<form method="post" action="options.php">
    <?php settings_fields( 'mba-app' ); ?>
    <?php do_settings_sections( 'mba-app' ); ?>
<?php for($i = 1; $i < $mbaOptions['mba_settings']['maximum_ads']+1; $i++) { ?>

<div class="accordion">AdSense Ad <?php echo $i;?></div>
<div class="panel">
  <table class="form-table">
        <tr valign="top">
        <th scope="row">AdSense Client ID*</th>
        <td><input type="text" name="mba[ads][<?php echo $i;?>][adClient]" value="<?php echo $mbaOptions['ads'][$i]['adClient']; ?>" /></td>
	<td><p style="font-style: italic;">TIP: ca-pub-XXXXXXX11XXX9</p></td>
        </tr>
         
        <tr valign="top">
        <th scope="row">Adsense AD Slot ID*</th>
        <td><input type="text" name="mba[ads][<?php echo $i;?>][adSlot]" value="<?php echo $mbaOptions['ads'][$i]['adSlot']; ?>" /></td>
	<td><p style="font-style: italic;">TIP: 8XXXXX1</p></td>
        </tr>
        
        <tr valign="top">
        <th scope="row">Ad Size Type</th>
	<td><select name="mba[ads][<?php echo $i;?>][adSenseType]">
          <option value="responsive" selected="true">Responsive</option>
        </select>
	</td> 
       </tr>

    </table>
</div>
<?php } ?>

    
    
    <?php submit_button();  } ?>
