<?php

/**
 * Dequeue scripts and styles.
 */
require_once( get_stylesheet_directory() . '/inc/dequeue.php');

/**
 * Enqueue scripts and styles.
 */
require_once( get_stylesheet_directory() . '/inc/enqueue.php');

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
require_once( get_stylesheet_directory() . '/inc/widgets.php');

/**
 * Customizer additions.
 */
require_once( get_stylesheet_directory() . '/inc/customizer.php');

/**
 * Load Split Menu functions.
 */
require_once( get_stylesheet_directory() . '/inc/split-menu.php');

/**
* Your custom code below
*/

function first_paragraph($content){
    return preg_replace('/<p([^>]+)?>/', '<p$1 class="intro-content">', $content, 1);
}
add_filter('the_content', 'first_paragraph');

/******************************************************************************************************
 * Filter the except length to 200 characters.
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
******************************************************************************************************/
function wpdocs_custom_excerpt_length( $length ) {
    return 100;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

