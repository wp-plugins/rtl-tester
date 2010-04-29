<?php
/**
 * @package RTL_Tester
 * @version 0.1
 */
/*
Plugin Name: RTL Tester
Plugin URI: http://wordpress.org/extend/plugins/rtl-tester/
Description: This plugin can be used to test WordPress themes and plugins with Right To Left (RTL) text direction. Simply activate this plugin to enable RTL and deactivate to return to normal operation.
Author: <a href="http://blog.yoavfarhi.com">Yoav Farhi</a>, <a href="http://automattic.com">Automattic</a>
Version: 0.1
*/

function force_text_direction_rtl() {
	global $wp_locale;
	if ( isset( $wp_locale ) )
		$wp_locale->text_direction = 'rtl';
}

add_action( 'init', 'force_text_direction_rtl' );

?>