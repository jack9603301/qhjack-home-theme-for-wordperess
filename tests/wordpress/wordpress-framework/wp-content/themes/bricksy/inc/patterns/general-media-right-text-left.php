<?php
/**
 * Media right and text left block pattern
 */
return array(
	'title'	  => __( 'Media Right and Text Left', 'bricksy' ),
	'categories' => array( 'bricksy-general' ),
	'content'	=> '<!-- wp:media-text {"align":"full","mediaPosition":"right","mediaLink":"' . esc_url( get_theme_file_uri( '/assets/images/gallery-4.jpg' ) ) . '","mediaType":"image","mediaWidth":42,"imageFill":true} -->
	<div class="wp-block-media-text alignfull has-media-on-the-right is-stacked-on-mobile is-image-fill" style="grid-template-columns:auto 42%"><figure class="wp-block-media-text__media" style="background-image:url(' . esc_url( get_theme_file_uri( '/assets/images/gallery-4.jpg' ) ) . ');background-position:50% 50%"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/gallery-4.jpg" alt="' . esc_attr__( 'Pure Nature', 'bricksy' ) . '" /></figure><div class="wp-block-media-text__content"><!-- wp:group {"style":{"spacing":{"padding":{"top":"20%","right":"20%","bottom":"20%","left":"20%"}}}} -->
	<div class="wp-block-group" style="padding-top:20%;padding-right:20%;padding-bottom:20%;padding-left:20%"><!-- wp:paragraph -->
	<p>' . esc_html__( 'TAKE A MOMENT', 'bricksy' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:heading -->
	<h2 id="wide-open-spaces">' . esc_html__( 'Pure Nature & You…', 'bricksy' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph -->
	<p>' . esc_html__( 'The word nature is borrowed from the Old French nature and is derived from the Latin word natura, or essential qualities, innate disposition, and in ancient times, literally meant birth. The word nature is borrowed from the Old French nature and is derived from the Latin word natura, or essential qualities, innate disposition, and in ancient times, literally meant birth.', 'bricksy' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline","fontSize":"normal"} -->
	<div class="wp-block-button has-custom-font-size is-style-outline has-normal-font-size"><a class="wp-block-button__link">' . esc_html__( 'BOOK NOW', 'bricksy' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:media-text -->',
);
