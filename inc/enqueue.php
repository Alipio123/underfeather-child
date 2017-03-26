<?php
/**
 * Underfeather enqueue scripts
 *
 * @package understrap
 */

if ( ! function_exists( 'underfeather_scripts' ) ) {
	/**
	 * Load theme's JavaScript sources.
	 */
	function underfeather_scripts() {
		// Get the theme data
		$the_theme = wp_get_theme();

	    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
	    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
	    
		//jasny file
		wp_enqueue_style( 'jasny_bootstrap-styles', get_stylesheet_directory_uri() . '/css/assets/jasny-bootstrap.min.css', array(), '3.1.3' );
		wp_enqueue_script( 'jasny_bootstrap-scripts', get_stylesheet_directory_uri() . '/js/jasny-bootstrap.min.js', array(), '3.1.3', true );
	}
} // endif function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'underfeather_scripts' );
