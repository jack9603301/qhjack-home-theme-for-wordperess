<?php
/**
 * Image with caption and title rotated block pattern
 */
return array(
	'title'	  => __( 'Image with caption and title rotated', 'bricksy' ),
	'categories' => array( 'bricksy-general', 'featured' ),
	'content'	=> '<!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( '/assets/images/cover-image.jpg' ) ) . '","hasParallax":true,"dimRatio":50,"minHeight":800,"isDark":false,"align":"full","className":"bricksy-general-hero one"} -->
	<div class="wp-block-cover alignfull is-light has-parallax bricksy-general-hero one" style="background-image:url(' . esc_url( get_theme_file_uri( '/assets/images/cover-image.jpg' ) ) . ');min-height:800px"><span aria-hidden="true" class="wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"textColor":"background","layout":{"inherit":false}} -->
	<div class="wp-block-group has-background-color has-text-color"><!-- wp:heading {"level":1,"className":"rotate","fontSize":"normal"} -->
	<h1 class="rotate has-normal-font-size" id="adventures-lifestyle">' . esc_html__( 'ADVENTURES &amp; LIFESTYLE', 'bricksy' ) . '</h1>
	<!-- /wp:heading -->
	
	<!-- wp:group {"layout":{"inherit":true}} -->
	<div class="wp-block-group"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"padding":{"top":"40px","right":"20px","bottom":"0px","left":"20px"}}}} -->
	<div class="wp-block-column" style="padding-top:40px;padding-right:20px;padding-bottom:0px;padding-left:20px"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"custom","style":{"color":{"duotone":["#ffffff","#ffffff"]}}} -->
	<div class="wp-block-image"><figure class="aligncenter size-full"><a href="#"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/icon-1.png" alt="' . esc_attr__( 'Icon One', 'bricksy' ) . '" /></a></figure></div>
	<!-- /wp:image -->
	
	<!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
	<p class="has-text-align-center has-small-font-size" id="city" style="text-transform:uppercase">' . esc_html__( 'Tours', 'bricksy' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"style":{"spacing":{"padding":{"top":"40px","right":"20px","bottom":"0px","left":"20px"}}}} -->
	<div class="wp-block-column" style="padding-top:40px;padding-right:20px;padding-bottom:0px;padding-left:20px"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"custom","style":{"color":{"duotone":["#ffffff","#ffffff"]}}} -->
	<div class="wp-block-image"><figure class="aligncenter size-full"><a href="#"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/icon-2.png" alt="' . esc_attr__( 'Icon Two', 'bricksy' ) . '" /></a></figure></div>
	<!-- /wp:image -->
	
	<!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
	<p class="has-text-align-center has-small-font-size" id="city" style="text-transform:uppercase">' . esc_html__( 'Relax', 'bricksy' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"style":{"spacing":{"padding":{"top":"40px","right":"20px","bottom":"0px","left":"20px"}}}} -->
	<div class="wp-block-column" style="padding-top:40px;padding-right:20px;padding-bottom:0px;padding-left:20px"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"custom","style":{"color":{"duotone":["#ffffff","#ffffff"]}}} -->
	<div class="wp-block-image"><figure class="aligncenter size-full"><a href="#"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/icon-3.png" alt="' . esc_attr__( 'Icon One', 'bricksy' ) . '" /></a></figure></div>
	<!-- /wp:image -->
	
	<!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
	<p class="has-text-align-center has-small-font-size" id="city" style="text-transform:uppercase">' . esc_html__( 'City', 'bricksy' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"style":{"spacing":{"padding":{"top":"40px","right":"20px","bottom":"0px","left":"20px"}}}} -->
	<div class="wp-block-column" style="padding-top:40px;padding-right:20px;padding-bottom:0px;padding-left:20px"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"custom","style":{"color":{"duotone":["#ffffff","#ffffff"]}}} -->
	<div class="wp-block-image"><figure class="aligncenter size-full"><a href="#"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/icon-4.png" alt="' . esc_attr__( 'Icon One', 'bricksy' ) . '" /></a></figure></div>
	<!-- /wp:image -->
	
	<!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
	<p class="has-text-align-center has-small-font-size" id="city" style="text-transform:uppercase">' . esc_html__( 'Sea', 'bricksy' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:cover -->',
);
