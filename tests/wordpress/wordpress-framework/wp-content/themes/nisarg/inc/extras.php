<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package Nisarg
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function nisarg_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}
	return $classes;
}
add_filter( 'body_class', 'nisarg_body_classes' );

/**
 * Adds the URL to the top level navigation menu item.
 */
function nisarg_add_top_level_menu_url( $atts, $item, $args ) {
	if ( isset( $args->has_children ) && $args->has_children ) {
		$atts['href'] = ! empty( $item->url ) ? $item->url : '';
	}
	return $atts;
}
add_filter( 'nav_menu_link_attributes', 'nisarg_add_top_level_menu_url', 99, 3 );
