<?php

/**
 * 
 *
 * @package     MYSIAK Better AdSense
 * @subpackage  Function/Widgets
 * @copyright   Copyright (c) 2017, Przemyslaw Mysiak
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0.5
 */
// Exit if accessed directly
if( !defined( 'ABSPATH' ) )
    exit;

add_action( 'widgets_init', 'mba_register_adsense_widgets', 1 );
 
function mba_register_adsense_widgets() {

    $maximumWidgets = 5;	
    for ($i = 1; $i <= $maximumWidgets; $i++) {	
    register_widget( 'mba_adsense_widget_' . $i );
    }
}
 
class mba_adsense_widget_1 extends WP_Widget
{
 
    public function __construct()
    {
    	$this->mba_AdID = '1';
    	$this->mba_AdName = sprintf( 'Better AdSense %d', $this->mba_AdID );

	parent::__construct(
                $this->mba_AdID, // Base ID
                $this->mba_AdName, // Name
                array(
                    'classname' => 'mba_adsense' . $this->mba_AdID.'_widget',
            'description' => 'Insert Ad #' . $this->mba_AdID . ' code to website'
                    ) // Args
        );
    }

 
    public function widget( $args, $instance ) {
    	echo mba_renderAdSenseCode($this->mba_AdID);
    }
 
}

class mba_adsense_widget_2 extends WP_Widget
{
 
    public function __construct()
    {
    	$this->mba_AdID = '2';
    	$this->mba_AdName = sprintf( 'Better AdSense %d', $this->mba_AdID );

	parent::__construct(
                $this->mba_AdID, // Base ID
                $this->mba_AdName, // Name
                array(
                    'classname' => 'mba_adsense' . $this->mba_AdID.'_widget',
            'description' => 'Insert Ad #' . $this->mba_AdID . ' code to website'
                    ) // Args
        );
    }

 
    public function widget( $args, $instance ) {
    	echo mba_renderAdSenseCode($this->mba_AdID);
    }
 
}

class mba_adsense_widget_3 extends WP_Widget
{
 
    public function __construct()
    {
    	$this->mba_AdID = '3';
    	$this->mba_AdName = sprintf( 'Better AdSense %d', $this->mba_AdID );

	parent::__construct(
                $this->mba_AdID, // Base ID
                $this->mba_AdName, // Name
                array(
                    'classname' => 'mba_adsense' . $this->mba_AdID.'_widget',
            'description' => 'Insert Ad #' . $this->mba_AdID . ' code to website'
                    ) // Args
        );
    }

 
    public function widget( $args, $instance ) {
    	echo mba_renderAdSenseCode($this->mba_AdID);
    }
 
}

class mba_adsense_widget_4 extends WP_Widget
{
 
    public function __construct()
    {
    	$this->mba_AdID = '4';
    	$this->mba_AdName = sprintf( 'Better AdSense %d', $this->mba_AdID );

	parent::__construct(
                $this->mba_AdID, // Base ID
                $this->mba_AdName, // Name
                array(
                    'classname' => 'mba_adsense' . $this->mba_AdID.'_widget',
            'description' => 'Insert Ad #' . $this->mba_AdID . ' code to website'
                    ) // Args
        );
    }

 
    public function widget( $args, $instance ) {
    	echo mba_renderAdSenseCode($this->mba_AdID);
    }
 
}

class mba_adsense_widget_5 extends WP_Widget
{
 
    public function __construct()
    {
    	$this->mba_AdID = '5';
    	$this->mba_AdName = sprintf( 'Better AdSense %d', $this->mba_AdID );

	parent::__construct(
                $this->mba_AdID, // Base ID
                $this->mba_AdName, // Name
                array(
                    'classname' => 'mba_adsense' . $this->mba_AdID.'_widget',
            'description' => 'Insert Ad #' . $this->mba_AdID . ' code to website'
                    ) // Args
        );
    }
 
 
    public function widget( $args, $instance ) {
    
    	echo '<div id="mba-ad' . $this->mba_AdID . '_widget">';
    	echo mba_renderAdSenseCode($this->mba_AdID);
    	echo '</div>';
    }
 
}

?>
