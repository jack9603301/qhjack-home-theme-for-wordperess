<?php
function home_get_the_archive_title($title) {
	$term = get_queried_object();
	if($term->taxonomy == 'wpdmcategory') {
		$title = __('File grouping:','home').$term->name;
	} elseif(is_category()) {
		$title = sprintf( __( 'Group of articles: %s','home' ), single_cat_title( '', false ) );
	} elseif ( is_post_type_archive() ) {
        /* translators: Post type archive title. 1: Post type name */
        $title = sprintf( __( 'Group of articles: %s','home' ), post_type_archive_title( '', false ) );
    } elseif(is_tag()) {
    	$title = sprintf( __( 'Article label: %s','home'  ), single_tag_title( '', false ) );
    } elseif(is_tag()) {
    	$title = sprintf( __( 'Article label: %s','home' ), single_tag_title( '', false ) );
    } elseif ( is_author() ) {
        /* translators: Author archive title. 1: Author name */
        $title = sprintf( __( 'Author: %s','home'  ), '<span class="vcard">' . get_the_author() . '</span>' );
    } else {
        $title = __( 'Other groups','home' );
    }
	return $title;
}
function qh_JQuery_UI_header() {
    wp_register_script("default","/wp-includes/js/jquery/jquery-ui.js",array('jquery'));
    wp_enqueue_script( "default" );
}
?>