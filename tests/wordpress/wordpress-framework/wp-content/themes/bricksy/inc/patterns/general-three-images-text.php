<?php
/**
 * Three images with text block pattern
 */
return array(
	'title'	  => __( 'Three Images with Text', 'bricksy' ),
	'categories' => array( 'bricksy-general', 'featured' ),
	'content'	=> '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0%","right":"3rem","bottom":"0%","left":"3rem"}}},"className":"bricksy-general-three-column-image"} -->
	<div class="wp-block-group alignfull bricksy-general-three-column-image" style="padding-top:0%;padding-right:3rem;padding-bottom:0%;padding-left:3rem"><!-- wp:columns {"align":"full"} -->
	<div class="wp-block-columns alignfull"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:spacer -->
	<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/gallery-1.jpg" alt="' . esc_attr__( 'Kinney Lake', 'bricksy' ) . '" /><figcaption>' . esc_html__( 'Kinney Lake, Canada. Original public domain image from Wikimedia Commons', 'bricksy' ) . '</figcaption></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/gallery-2.jpg" alt="' . esc_attr__( 'Emerald Spring', 'bricksy' ) . '" /><figcaption>' . esc_html__( 'Emerald Spring steams on a cold winter morning. Original public domain image from Flickr', 'bricksy' ) . '</figcaption></figure>
	<!-- /wp:image -->
	
	<!-- wp:paragraph {"align":"center","className":"handwritten-alternative","fontSize":"gigantic"} -->
	<p class="has-text-align-center handwritten-alternative has-gigantic-font-size">' . esc_html__( 'freedom', 'bricksy' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:spacer -->
	<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/gallery-6.jpg" alt="' . esc_attr__( 'A pier', 'bricksy' ) . '" /><figcaption>' . esc_html__( 'A long wooden pier on a smooth lake. Original public domain image from Wikimedia Commons', 'bricksy' ) . '</figcaption></figure>
	<!-- /wp:image -->
	
	<!-- wp:spacer -->
	<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
);
