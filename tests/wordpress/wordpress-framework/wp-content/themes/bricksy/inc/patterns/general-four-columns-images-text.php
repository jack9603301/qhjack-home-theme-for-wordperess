<?php
/**
 * Four column images and text block pattern
 */
return array(
	'title'	  => __( 'Four Column Images and Text', 'bricksy' ),
	'categories' => array( 'bricksy-general', 'featured' ),
	'content'	=> '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"4rem","bottom":"0rem","right":"4rem","left":"0px"}}},"className":"emoly-gallery-columns","layout":{"inherit":false}} -->
	<div class="wp-block-group alignfull emoly-gallery-columns" style="padding-top:4rem;padding-right:4rem;padding-bottom:0rem;padding-left:0px"><!-- wp:columns {"align":"full"} -->
	<div class="wp-block-columns alignfull"><!-- wp:column {"width":"80%"} -->
	<div class="wp-block-column" style="flex-basis:80%"><!-- wp:gallery {"linkTo":"none"} -->
	<figure class="wp-block-gallery has-nested-images columns-default is-cropped"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/gallery-1.jpg" alt="' . esc_attr__( 'Gallery One', 'bricksy' ) . '" /></figure>
	<!-- /wp:image -->
	
	<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/gallery-2.jpg" alt="' . esc_attr__( 'Gallery Two', 'bricksy' ) . '" /></figure>
	<!-- /wp:image -->
	
	<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/gallery-3.jpg" alt="' . esc_attr__( 'Gallery Three', 'bricksy' ) . '" /></figure>
	<!-- /wp:image --></figure>
	<!-- /wp:gallery --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"bottom","width":"20%","style":{"spacing":{"padding":{"bottom":"15px"}}}} -->
	<div class="wp-block-column is-vertically-aligned-bottom" style="padding-bottom:15px;flex-basis:20%"><!-- wp:paragraph {"style":{"typography":{"fontSize":"19px"}}} -->
	<p style="font-size:19px">' . esc_html__( 'Designs for wedding dresses were created by Sed gravida ornare vestibulum turpis quam urna aliquam in feugiat lorem dolor pulvinar a, scelerisque amet ultrices consectetur magna sit.', 'bricksy' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
);
