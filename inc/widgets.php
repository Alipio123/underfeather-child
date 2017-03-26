<?php
/**
 * Declaring widgets
 *
 * @package understrap
 */

if ( ! function_exists( 'underfeather_widgets_init' ) ) {
	/**
	 * Initializes themes widgets.
	 */
	function underfeather_widgets_init() {
		
		$header_layout = get_theme_mod( 'understrap_header_layout' );
		$topbar_status = get_theme_mod( 'understrap_topbar_status' );
		
		if( $header_layout == "header-classic" ){
			register_sidebar( array(
				'name'          => __( 'Header Right', 'understrap' ),
				'id'            => 'header-right',
				'description'   => 'Add Widget in the header right part for Header Classic layout',
				'before_widget' => '<div class="header-right-widget">',
				'after_widget'  => '</div>',
				'before_title'  => '',
				'after_title'   => '',
			) );
		}

		if( $topbar_status == "topbar-enable" || empty($topbar_status) ){
			register_sidebar( array(
				'name'          => __( 'Top Bar Left', 'understrap' ),
				'id'            => 'topbar-left',
				'description'   => 'Add Widget in the Top Bar left part',
				'before_widget' => '<div class="topbar-left-widget">',
				'after_widget'  => '</div>',
				'before_title'  => '',
				'after_title'   => '',
			) );

			register_sidebar( array(
				'name'          => __( 'Top Bar Right', 'understrap' ),
				'id'            => 'topbar-right',
				'description'   => 'Add Widget in the Top Bar right part',
				'before_widget' => '<div class="topbar-right-widget">',
				'after_widget'  => '</div>',
				'before_title'  => '',
				'after_title'   => '',
			) );
		}

	}
} // endif function_exists( 'underfeather_widgets_init' ).
add_action( 'widgets_init', 'underfeather_widgets_init' );

