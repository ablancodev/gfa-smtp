<?php
/*
 Plugin Name: Groups File Access with WP Mail SMTP
Plugin URI: http://www.eggemplo.com
Description: Makes Groups File Access compatible with WP Mail SMTP
Author: eggemplo
Version: 1.0
Author URI: http://www.eggemplo.com
*/

add_action ( 'plugins_loaded', 'my_plugins_loaded', 1 );
function my_plugins_loaded()  {
	remove_action( 'plugins_loaded', array( 'Groups_File_Access', 'server' ) );
}

add_action( 'init', array( 'Groups_File_Access', 'server' ) );
