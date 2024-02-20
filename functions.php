<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Lesson One
 * @since 1.0.0
 */

/**
 * Enqueue the style.css file.
 *
 * @since 1.0.0
 */
function enqueue_fse_styles() {
	wp_enqueue_style(
		'fse-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'enqueue_fse_styles' );

/**
 * Check if the WordPress theme is in development mode.
 * If true, display a message indicating it's a development environment.
 */
function get_development_mode() {

	if ( wp_is_development_mode( 'theme' ) ) {
		echo ( 'This is a development environment.' );
	} else {
		echo 'This is a production environment.';
	}
}
