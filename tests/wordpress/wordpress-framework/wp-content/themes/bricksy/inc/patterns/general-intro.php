<?php
/**
 * Intro block pattern
 */
return array(
	'title'	  => __( 'Intro', 'bricksy' ),
	'categories' => array( 'bricksy-general', 'featured' ),
	'content'	=> '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"3rem","left":"3rem","top":"6rem","bottom":"6rem"}}},"layout":{"inherit":true}} -->
	<div class="wp-block-group alignwide" style="padding-top:6rem;padding-right:3rem;padding-bottom:6rem;padding-left:3rem"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1","textTransform":"uppercase","fontSize":"18px"}}} -->
	<p class="has-text-align-center" style="font-size:18px;line-height:1;text-transform:uppercase">' . esc_html__( 'Introducing', 'bricksy' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:heading {"textAlign":"center","fontSize":"huge"} -->
	<h2 class="has-text-align-center has-huge-font-size" id="bricksy-new-tours">' . esc_html__( 'Adventours New Tours', 'bricksy' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"22px"}}} -->
	<p class="has-text-align-center" style="font-size:22px">' . esc_html__( 'Made with love, the best adventures, for you and family.', 'bricksy' ) . ' <br>' . esc_html__( 'Available for a limited time.', 'bricksy' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:spacer {"height":10} -->
	<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
	<div class="wp-block-button is-style-outline"><a class="wp-block-button__link">' . esc_html__( 'Shop Now', 'bricksy' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons -->
	
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"padding":{"top":"4rem"}}}} -->
	<div class="wp-block-column" style="padding-top:4rem"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"is-style-olorien-round-edges"} -->
	<figure class="wp-block-image size-large is-style-olorien-round-edges"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/gallery-1.jpg" alt="' . esc_attr__( 'Wooden Pier', 'bricksy' ) . '" /><figcaption>' . esc_html__( 'A long wooden pier on a smooth lake. Original public domain image from Wikimedia Commons', 'bricksy' ) . '</figcaption></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"style":{"spacing":{"padding":{"top":"8rem"}}}} -->
	<div class="wp-block-column" style="padding-top:8rem"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"is-style-olorien-round-edges"} -->
	<figure class="wp-block-image size-large is-style-olorien-round-edges"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/gallery-4.jpg" alt="' . esc_attr__( 'A woman meditating', 'bricksy' ) . '" /><figcaption>' . esc_html__( 'A woman meditating in an infinity pool overlooking a forest. Original public domain image from Wikimedia Commons', 'bricksy' ) . '</figcaption></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
);
