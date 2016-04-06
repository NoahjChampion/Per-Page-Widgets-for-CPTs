<?php
/*
Plugin Name: Per Page Widgets for CPTs
Version: 1.0
Plugin URI: http://stephanieleary.com
Description: Enables the Per Page Widgets interface for custom post types.
Author: Stephanie Leary
Author URI: http://stephanieleary.com
*/

add_action( 'add_meta_boxes', 'i123_widgets_custom_fields_add_cpts' );

function i123_widgets_custom_fields_add_cpts() {
    if ( function_exists( 'i123_widgets_admin_init' ) ) 
		i123_widgets_admin_init();
	$types = array( 'people', 'publication', 'facility', 'research', 'course' );
	foreach ( $types as $type ) {
		add_meta_box( 'i123_widgets_custom_fields', __('Per Page Widgets', 'i123_widgets'), 'i123_widgets_custom_fields_controllbox', $type, 'side', 'high' );
	}
}