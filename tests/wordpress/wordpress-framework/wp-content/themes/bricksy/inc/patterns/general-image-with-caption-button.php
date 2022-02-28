<?php
/**
 * Image with caption and call to action block pattern
 */
return array(
	'title'	  => __( 'Image with Caption and Call to Action', 'bricksy' ),
	'categories' => array( 'bricksy-general', 'featured' ),
	'content'	=> '<!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( '/assets/images/cover-image-1.jpg' ) ) . '","hasParallax":true,"dimRatio":50,"minHeight":800,"isDark":false,"align":"full","className":"bricksy-general-hero"} -->
	<div class="wp-block-cover alignfull is-light has-parallax bricksy-general-hero" style="background-image:url(' . esc_url( get_theme_file_uri( '/assets/images/cover-image-1.jpg' ) ) . ');min-height:800px"><span aria-hidden="true" class="wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"textColor":"background","layout":{"inherit":false}} -->
	<div class="wp-block-group has-background-color has-text-color"></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"layout":{"inherit":true}} -->
	<div class="wp-block-group"><!-- wp:group {"align":"wide","textColor":"background","layout":{"inherit":false}} -->
	<div class="wp-block-group alignwide has-background-color has-text-color"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":".9"}},"fontSize":"small"} -->
	<p class="has-text-align-center has-small-font-size" style="line-height:.9"><strong>' . esc_html__( 'GET IN TOUCH', 'bricksy' ) . '</strong></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":"1.15"}},"fontSize":"gigantic"} -->
	<h2 class="has-text-align-center has-gigantic-font-size" id="schedule-a-visit-1" style="line-height:1.15"><strong>' . esc_html__( 'Schedule a Visit', 'bricksy' ) . '</strong></h2>
	<!-- /wp:heading -->
	
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"width":50,"style":{"border":{"radius":"0px"}},"className":"is-style-outline"} -->
	<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link" style="border-radius:0px">' . esc_html__( 'CONTACT US', 'bricksy' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons -->
	
	<!-- wp:spacer {"height":64} -->
	<div style="height:64px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:cover -->',
);
