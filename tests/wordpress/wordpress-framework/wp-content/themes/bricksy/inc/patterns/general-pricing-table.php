<?php
/**
 * Pricing table block pattern
 */
return array(
	'title'	  => __( 'Pricing table', 'bricksy' ),
	'categories' => array( 'bricksy-general', 'featured' ),
	'content'	=> '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"5rem"}}},"layout":{"inherit":true}} -->
	<div class="wp-block-group alignwide" style="padding-bottom:5rem"><!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"color":{"background":"#a7c6d8"},"elements":{"link":{"color":{"text":"#000000"}}},"spacing":{"padding":{"top":"2em","right":"2em","bottom":"2em","left":"2em"}}}} -->
	<div class="wp-block-column has-background has-link-color" style="background-color:#a7c6d8;padding-top:2em;padding-right:2em;padding-bottom:2em;padding-left:2em"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"40px"}}} -->
	<h2 class="has-text-align-center" id="single-1" style="font-size:40px">' . esc_html__( 'Single', 'bricksy' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}},"fontSize":"normal"} -->
	<p class="has-text-align-center has-normal-font-size" style="line-height:1.5"><strong>' . esc_html__( 'Enrich our growing community.', 'bricksy' ) . '</strong> </p>
	<!-- /wp:paragraph -->
	
	<!-- wp:separator {"customColor":"#000000","className":"is-style-wide"} -->
	<hr class="wp-block-separator has-text-color has-background is-style-wide" style="background-color:#000000;color:#000000"/>
	<!-- /wp:separator -->
	
	<!-- wp:list {"fontSize":"normal"} -->
	<ul class="has-normal-font-size"><li>' . esc_html__( 'General admission and member discounts for one adult', 'bricksy' ) . '</li><li>' . esc_html__( 'One free ticket per special exhibition', 'bricksy' ) . '</li><li>' . esc_html__( 'Two single-use guest passes per year', 'bricksy' ) . '</li></ul>
	<!-- /wp:list -->
	
	<!-- wp:buttons {"align":"full","layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
	<div class="wp-block-buttons alignfull"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
	<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link">' . esc_html__( '$110 / YEAR', 'bricksy' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"style":{"color":{"background":"#a7d5d2","text":"#000000"},"elements":{"link":{"color":{"text":"#000000"}}},"spacing":{"padding":{"top":"2em","right":"2em","bottom":"4em","left":"2em"}}}} -->
	<div class="wp-block-column has-text-color has-background has-link-color" style="background-color:#a7d5d2;color:#000000;padding-top:2em;padding-right:2em;padding-bottom:4em;padding-left:2em"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"40px"}}} -->
	<h2 class="has-text-align-center" id="family-1" style="font-size:40px">' . esc_html__( 'Family', 'bricksy' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}},"fontSize":"normal"} -->
	<p class="has-text-align-center has-normal-font-size" style="line-height:1.5"><strong>' . esc_html__( 'Support special exhibitions.', 'bricksy' ) . '</strong></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:separator {"className":"is-style-wide"} -->
	<hr class="wp-block-separator is-style-wide"/>
	<!-- /wp:separator -->
	
	<!-- wp:list {"fontSize":"normal"} -->
	<ul class="has-normal-font-size"><li>' . esc_html__( 'General admission and member discounts for two adult', 'bricksy' ) . '</li><li>' . esc_html__( 'Four free ticket per special exhibition', 'bricksy' ) . '</li><li>' . esc_html__( 'Four single-use guest passes per year', 'bricksy' ) . '</li></ul>
	<!-- /wp:list -->
	
	<!-- wp:buttons {"align":"full","layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
	<div class="wp-block-buttons alignfull"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
	<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link">' . esc_html__( '$200 / YEAR', 'bricksy' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"style":{"color":{"text":"#000000","background":"#c3d9e7"},"elements":{"link":{"color":{"text":"#000000"}}},"spacing":{"padding":{"top":"2em","right":"2em","bottom":"2em","left":"2em"}}}} -->
	<div class="wp-block-column has-text-color has-background has-link-color" style="background-color:#c3d9e7;color:#000000;padding-top:2em;padding-right:2em;padding-bottom:2em;padding-left:2em"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"40px"}}} -->
	<h2 class="has-text-align-center" id="patron-1" style="font-size:40px">' . esc_html__( 'Patron', 'bricksy' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"center","fontSize":"normal"} -->
	<p class="has-text-align-center has-normal-font-size"><strong>' . esc_html__( 'Take support to the next level.', 'bricksy' ) . '</strong></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:separator {"className":"is-style-wide"} -->
	<hr class="wp-block-separator is-style-wide"/>
	<!-- /wp:separator -->
	
	<!-- wp:list {"fontSize":"normal"} -->
	<ul class="has-normal-font-size"><li>' . esc_html__( 'General admission and member discounts for two adult', 'bricksy' ) . '</li><li>' . esc_html__( 'Five free ticket per special exhibition', 'bricksy' ) . '</li><li>' . esc_html__( 'Five single-use guest passes per year', 'bricksy' ) . '</li></ul>
	<!-- /wp:list -->
	
	<!-- wp:buttons {"align":"full","layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
	<div class="wp-block-buttons alignfull"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
	<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link">' . esc_html__( '$400 / YEAR', 'bricksy' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
);
