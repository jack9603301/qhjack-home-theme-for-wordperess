<?php
/**
 * People block pattern
 */
return array(
	'title'	  => __( 'People', 'bricksy' ),
	'categories' => array( 'bricksy-general', 'featured' ),
	'content'	=> '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"4rem","right":"0rem","bottom":"4rem","left":"0rem"}}},"className":"is-style-default bricksy-team-additional","layout":{"inherit":false,"contentSize":"1200px"}} -->
	<div class="wp-block-group alignwide is-style-default bricksy-team-additional" style="padding-top:4rem;padding-right:0rem;padding-bottom:4rem;padding-left:0rem"><!-- wp:columns {"className":"is-style-default"} -->
	<div class="wp-block-columns is-style-default"><!-- wp:column {"style":{"elements":{"link":{"color":{}}},"spacing":{"padding":{"top":"4rem","right":"2rem","bottom":"4rem","left":"2rem"}}},"backgroundColor":"white"} -->
	<div class="wp-block-column has-white-background-color has-background has-link-color" style="padding-top:4rem;padding-right:2rem;padding-bottom:4rem;padding-left:2rem"><!-- wp:group {"align":"full","style":{"border":{"width":"2px","style":"solid"},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"40px","left":"0px"}}},"borderColor":"foreground"} -->
	<div class="wp-block-group alignfull has-border-color has-foreground-border-color" style="border-style:solid;border-width:2px;padding-top:0px;padding-right:0px;padding-bottom:40px;padding-left:0px"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/people-1.jpg" alt="' . esc_attr__( 'Team One', 'bricksy' ) . '" /></figure>
	<!-- /wp:image -->
	
	<!-- wp:group {"align":"full"} -->
	<div class="wp-block-group alignfull"><!-- wp:group {"align":"full","className":"is-style-emoly-border"} -->
	<div class="wp-block-group alignfull is-style-emoly-border"><!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><strong>' . esc_html__( 'Marie Martín', 'bricksy' ) . '<br></strong>' . esc_html__( 'Editor-in-chief', 'bricksy' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:social-links {"customIconColor":"#ffffff","iconColorValue":"#ffffff","iconBackgroundColor":"main-blue","iconBackgroundColorValue":"#172144","className":"is-style-default","layout":{"type":"flex","justifyContent":"center"}} -->
	<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default"><!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->
	
	<!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->
	
	<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->
	
	<!-- wp:social-link {"url":"https://wordpress.org","service":"wordpress"} /--></ul>
	<!-- /wp:social-links --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"style":{"elements":{"link":{"color":{}}},"spacing":{"padding":{"top":"4rem","right":"2rem","bottom":"4rem","left":"2rem"}}},"backgroundColor":"white"} -->
	<div class="wp-block-column has-white-background-color has-background has-link-color" style="padding-top:4rem;padding-right:2rem;padding-bottom:4rem;padding-left:2rem"><!-- wp:paragraph {"align":"center","className":"handwritten-alternative","fontSize":"gigantic"} -->
	<p class="has-text-align-center handwritten-alternative has-gigantic-font-size">' . esc_html__( 'adventurous', 'bricksy' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:heading {"textAlign":"center","fontSize":"large"} -->
	<h2 class="has-text-align-center has-large-font-size" id="our-team">' . esc_html__( 'Our Team', 'bricksy' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:group {"align":"full","style":{"border":{"width":"2px","style":"solid"},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"40px","left":"0px"}}},"borderColor":"foreground"} -->
	<div class="wp-block-group alignfull has-border-color has-foreground-border-color" style="border-style:solid;border-width:2px;padding-top:0px;padding-right:0px;padding-bottom:40px;padding-left:0px"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
	<div class="wp-block-image is-style-default"><figure class="aligncenter size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/people-2.jpg" alt="' . esc_attr__( 'Team Three', 'bricksy' ) . '" /></figure></div>
	<!-- /wp:image -->
	
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><strong>' . esc_html__( 'Elizabeth Linden', 'bricksy' ) . '<br></strong>' . esc_html__( 'Travel Editor', 'bricksy' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:social-links {"customIconColor":"#ffffff","iconColorValue":"#ffffff","iconBackgroundColor":"main-blue","iconBackgroundColorValue":"#172144","className":"is-style-default","layout":{"type":"flex","justifyContent":"center"}} -->
	<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default"><!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->
	
	<!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->
	
	<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->
	
	<!-- wp:social-link {"url":"https://wordpress.org","service":"wordpress"} /--></ul>
	<!-- /wp:social-links --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"style":{"elements":{"link":{"color":{}}},"spacing":{"padding":{"top":"4rem","right":"2rem","bottom":"2rem","left":"2rem"}}},"backgroundColor":"white"} -->
	<div class="wp-block-column has-white-background-color has-background has-link-color" style="padding-top:4rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem"><!-- wp:group {"align":"full","style":{"border":{"width":"2px","style":"solid"},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"40px","left":"0px"}}},"borderColor":"foreground"} -->
	<div class="wp-block-group alignfull has-border-color has-foreground-border-color" style="border-style:solid;border-width:2px;padding-top:0px;padding-right:0px;padding-bottom:40px;padding-left:0px"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
	<div class="wp-block-image is-style-default"><figure class="aligncenter size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/people-3.jpg" alt="' . esc_attr__( 'Team Three', 'bricksy' ) . '" /></figure></div>
	<!-- /wp:image -->
	
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><strong>' . esc_html__( 'Janet Smith', 'bricksy' ) . '<br></strong>' . esc_html__( 'Tour Guide', 'bricksy' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:social-links {"customIconColor":"#ffffff","iconColorValue":"#ffffff","iconBackgroundColor":"main-blue","iconBackgroundColorValue":"#172144","className":"is-style-default","layout":{"type":"flex","justifyContent":"center"}} -->
	<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default"><!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->
	
	<!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->
	
	<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->
	
	<!-- wp:social-link {"url":"https://wordpress.org","service":"wordpress"} /--></ul>
	<!-- /wp:social-links --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
);
