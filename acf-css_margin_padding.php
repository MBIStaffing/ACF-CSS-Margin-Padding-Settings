<?php

/*
Plugin Name: Advanced Custom Fields: CSS Margin & Padding Settings
Plugin URI: dreihochzwo.de
Description: Adds an Advanced Custom Field field to setup CSS values for margins, paddings and borders. This plugin needs the installation/activation of Advanced Custom Fields V5.
Version: 1.0.2
Author: Thomas Meyer
Author URI: dreihochzwo.de
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/




// 1. set text domain
// Reference: https://codex.wordpress.org/Function_Reference/load_plugin_textdomain
load_plugin_textdomain( 'acf-css_margin_padding', false, dirname( plugin_basename(__FILE__) ) . '/lang/' ); 




// 2. Include field type for ACF5
// $version = 5 and can be ignored until ACF6 exists
function include_field_types_css_margin_padding( $version ) {
	
	include_once('acf-css_margin_padding-v5.php');
	
}

add_action('acf/include_field_types', 'include_field_types_css_margin_padding');	
	
?>