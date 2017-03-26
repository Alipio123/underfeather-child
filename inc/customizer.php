<?php
/**
 * Understrap Theme Customizer
 *
 * @package understrap
 */


if ( ! function_exists( 'underfeather_theme_customize_register' ) ) {
	/**
	 * Register individual settings through customizer's API.
	 *
	 * @param WP_Customize_Manager $wp_customize Customizer reference.
	 */
	function underfeather_theme_customize_register( $wp_customize ) {

		// Theme header settings.
		$wp_customize->add_section( 'understrap_theme_header_options', array(
			'title'       => __( 'Theme Header Settings', 'underfeather' ),
			'capability'  => 'edit_theme_options',
			'description' => __( 'Choose your header layout option', 'underfeather' ),
			'priority'    => 120,
		) );

		$wp_customize->add_setting('understrap_header_layout', array(
		    'default'        => 'header-inline',
		    'type'           => 'theme_mod',
			'sanitize_callback' => 'esc_textarea',
		    'capability'     => 'edit_theme_options',
		));
		 
		$wp_customize->add_control('understrap_theme_header_options', array(
		    'label'      => __('Header layout', 'underfeather'),
		    'section'    => 'understrap_theme_header_options',
		    'settings'   => 'understrap_header_layout',
		    'type'       => 'radio',
		    'choices'    => array(
		    	'header-inline' => 'Inline Header',
		        'header-classic' => 'Classic Header',
		        'header-split' => 'Split Header',
		    ),
		));

		//Theme top bar setting
		$wp_customize->add_setting('understrap_topbar_status', array(
		    'default'        => 'topbar-enable',
		    'type'           => 'theme_mod',
			'sanitize_callback' => 'esc_textarea',
		    'capability'     => 'edit_theme_options',
		));

		$wp_customize->add_control('understrap_theme_topbar_options', array(
		    'label'      => __('Top Bar Status', 'underfeather'),
		    'section'    => 'understrap_theme_header_options',
		    'settings'   => 'understrap_topbar_status',
		    'type'       => 'radio',
		    'choices'    => array(
		    	'topbar-enable' => 'Enable',
		        'topbar-disable' => 'Disable'
		    ),
		));

		//Theme Page Header Title setting
		$wp_customize->add_setting('understrap_page_header_title_setting', array(
		    'default'        => 'page-header-title-enable',
		    'type'           => 'theme_mod',
			'sanitize_callback' => 'esc_textarea',
		    'capability'     => 'edit_theme_options',
		));

		$wp_customize->add_control('understrap_theme_page_header_options', array(
		    'label'      => __('Page Header Title Visibility', 'understrap'),
		    'section'    => 'understrap_theme_header_options',
		    'settings'   => 'understrap_page_header_title_setting',
		    'type'       => 'radio',
		    'choices'    => array(
		    	'page-header-title-enable' => 'Show',
		        'page-header-title-disable' => 'Hide'
		    ),
		));

	}
} // endif function_exists( 'understrap_theme_customize_register' ).
add_action( 'customize_register', 'underfeather_theme_customize_register' );