<?php
/*
 * Plugin Name: Solberg Tests
 * Description: This plugin requires PHP 7.4 or higher to function.
 * Author: Vlad Hordiienko
 * Version: 1.0
 * Requires at least: PHP 7.4
 * Tested up to: PHP 7.4
 */

class Solberg_Tests_Plugin {
	
	public function __construct() {
		
		// Check PHP version
		if ( version_compare( PHP_VERSION, '7.4', '<' ) ) {
			
			// Deactivate the plugin if the PHP version is lower than 7.4
			function deactivate_php74_only_plugin() {
				deactivate_plugins( plugin_basename( __FILE__ ) );
			}
			add_action( 'admin_init', 'deactivate_php74_only_plugin' );
			
			// Show an error message
			function php74_only_plugin_notice() {
				echo '<div class="error"><p>This plugin requires PHP 7.4 or higher. Your current PHP version is ' . PHP_VERSION . '. Please upgrade your PHP version to use this plugin.</p></div>';
			}
			add_action( 'admin_notices', 'php74_only_plugin_notice' );
			
		} else {
			
			// Add the post creation date to the post title
			add_filter( 'the_title', array( $this, 'add_post_date_to_title' ), 10, 2 );
			
		}
		
	}
	
	public function add_post_date_to_title( $title, $post_id ) {
		$post = get_post( $post_id );
		return get_the_date( get_option( 'date_format' ), $post ) . ' - ' . $title;
	}
	
}
new Solberg_Tests_Plugin();