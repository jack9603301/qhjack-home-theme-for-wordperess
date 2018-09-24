<?php
function home_get_the_archive_title($title) {
	$term = get_queried_object();
	if($term->taxonomy == 'wpdmcategory') {
		$title = '文件分组：'.$term->name;
	} elseif(is_category()) {
		$title = sprintf( __( '文章分组: %s' ), single_cat_title( '', false ) );
	} elseif ( is_post_type_archive() ) {
        /* translators: Post type archive title. 1: Post type name */
        $title = sprintf( __( '文章分组: %s' ), post_type_archive_title( '', false ) );
    } elseif(is_tag()) {
    	$title = sprintf( __( '文章标签: %s' ), single_tag_title( '', false ) );
    } elseif(is_tag()) {
    	$title = sprintf( __( '文章标签: %s' ), single_tag_title( '', false ) );
    } elseif ( is_author() ) {
        /* translators: Author archive title. 1: Author name */
        $title = sprintf( __( '作者: %s' ), '<span class="vcard">' . get_the_author() . '</span>' );
    } else {
        $title = __( '其他分组' );
    }
	return $title;
}
function qh_JQuery_UI_header() {
    wp_register_script("default","/wp-includes/js/jquery/jquery-ui.js",array('jquery'));
    wp_enqueue_script( "default" );
}
?>