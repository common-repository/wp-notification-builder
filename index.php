<?php
/**
 *
 * @link              		https://www.enriquejros.com
 * @since             		1.0.0
 * @package           		wpnotifiction
 *
 * @wordpress-plugin
 * Plugin Name: 			Wordpress Notification Builder
 * Description: 			WordPress Notification Builder you can build fully custom notification for your website any time anywhere. You can set special notification easily and customize as you like.
 * Plugin URI: 				https://www.wpaccuracy.com/plugins/
 * Author: 					Wp Accuracy
 * Author URI:              http://wpaccuracy.com/
 * Version: 				1.0
 * Requires at least:		3.7
 * Tested up to:			5.0
 *
 */
add_action( 'wp_enqueue_scripts', 'wpnb_script');
add_action( 'wp_enqueue_scripts', 'wpnb_styles');
function wpnb_script() {
	wp_enqueue_script( 'wpnb_script', plugins_url( '/inc/js/wpnb_script.js', __FILE__ ), array( 'jquery' ) );
}
function wpnb_styles() {
	wp_register_style( 'wpnb_style', plugins_url( '/inc/css/wpnb_style.css', __FILE__ ) );
	wp_enqueue_style( 'wpnb_style' );
}


defined ('ABSPATH') or exit;

if(!function_exists('carbon_fields_boot_plugin')){ // CHECK IF CARBON ALREADY EXIST OR NOT
	include 'inc/option_fields/carbon-fields-plugin.php';
}
require_once( 'inc/wpnb_add_option.php' );
require_once( 'inc/wpnb_funtion_call.php' );


