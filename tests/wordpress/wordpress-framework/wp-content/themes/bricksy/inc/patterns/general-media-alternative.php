<?php
/**
 * Media left and text right block pattern
 */
return array(
	'title'	  => __( 'Media Left and Text Right', 'bricksy' ),
	'categories' => array( 'bricksy-general', 'featured' ),
	'content'	=> '<!-- wp:media-text {"align":"full","mediaPosition":"right","mediaLink":"' . esc_url( get_theme_file_uri( '/assets/images/gallery-4.jpg' ) ) . '","mediaType":"image","mediaWidth":42,"imageFill":true} -->
	<div class="wp-block-media-text alignfull has-media-on-the-right is-stacked-on-mobile is-image-fill" style="grid-template-columns:auto 42%"><figure class="wp-block-media-text__media" style="background-image:url(' . esc_url( get_theme_file_uri( '/assets/images/gallery-4.jpg' ) ) . ');background-position:50% 50%"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/gallery-4.jpg" alt="' . esc_attr__( 'Pure Nature', 'bricksy' ) . '" /></figure><div class="wp-block-media-text__content"><!-- wp:group {"style":{"spacing":{"padding":{"top":"20%","right":"20%","bottom":"20%","left":"20%"}}}} -->
	<div class="wp-block-group" style="padding-top:20%;padding-right:20%;padding-bottom:20%;padding-left:20%"><!-- wp:heading {"level":1} -->
	<h1 id="about-bricksy">About Bricksy</h1>
	<!-- /wp:heading -->
		
	<!-- wp:paragraph -->
	<p>Founded by Bricksy Wiliams on <em>October 24, 2001</em></p>
	<!-- /wp:paragraph -->
  
	</div>
	<!-- /wp:group --></div></div>
	<!-- /wp:media-text -->',
);
