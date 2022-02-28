<?php
/**
 * Call to action block pattern
 */
return array(
	'title'	  => __( 'Call to Action', 'bricksy' ),
	'categories' => array( 'bricksy-general', 'featured' ),
	'content'	=> '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"8rem","right":"2rem","bottom":"8rem","left":"2rem"}}},"backgroundColor":"beidge","className":"bricksy-general-color-me-in","layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull bricksy-general-color-me-in has-beidge-background-color has-background" style="padding-top:8rem;padding-right:2rem;padding-bottom:8rem;padding-left:2rem"><!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><strong>' . esc_html__( 'GET IN TOUCH', 'bricksy' ) . '</strong></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":59}}} -->
	<h2 class="has-text-align-center" id="schedule-a-visit" style="font-size:59px">' . esc_html__( 'Schedule a visit', 'bricksy' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"width":50,"style":{"border":{"radius":"0px"}},"className":"is-style-outline"} -->
	<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link" style="border-radius:0px">' . esc_html__( 'CONTACT US', 'bricksy' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group -->',
);
