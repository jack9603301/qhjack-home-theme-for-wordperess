<?php
/**
 * Team block pattern
 */
return array(
	'title'	  => __( 'Team', 'bricksy' ),
	'categories' => array( 'bricksy-general', 'featured' ),
	'content'	=> '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"4rem","right":"2rem","bottom":"4rem","left":"2rem"}}},"backgroundColor":"beidge","className":"bricksy-general-color-me-in","layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull bricksy-general-color-me-in has-beidge-background-color has-background" style="padding-top:4rem;padding-right:2rem;padding-bottom:4rem;padding-left:2rem"><!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"padding":{"top":"4rem","right":"2rem","bottom":"4rem","left":"2rem"}}}} -->
	<div class="wp-block-column" style="padding-top:4rem;padding-right:2rem;padding-bottom:4rem;padding-left:2rem"><!-- wp:image {"align":"center","width":150,"height":150,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
	<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-full is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/team-1.jpg" alt="' . esc_attr__( 'Team One', 'bricksy' ) . '" width="150" height="150"/></figure></div>
	<!-- /wp:image -->
	
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><strong>' . esc_html__( 'Marie Martín', 'bricksy' ) . '<br></strong>' . esc_html__( 'Editor-in-chief', 'bricksy' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:separator {"align":"full","className":"is-style-default"} -->
	<hr class="wp-block-separator alignfull is-style-default"/>
	<!-- /wp:separator -->
	
	<!-- wp:social-links {"customIconColor":"#ffffff","iconColorValue":"#ffffff","customIconBackgroundColor":"#000000","iconBackgroundColorValue":"#000000","className":"is-style-default","layout":{"type":"flex","justifyContent":"center"}} -->
	<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default"><!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->
	
	<!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->
	
	<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->
	
	<!-- wp:social-link {"url":"https://wordpress.org","service":"wordpress"} /--></ul>
	<!-- /wp:social-links --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"style":{"spacing":{"padding":{"top":"4rem","right":"2rem","bottom":"4rem","left":"2rem"}}}} -->
	<div class="wp-block-column" style="padding-top:4rem;padding-right:2rem;padding-bottom:4rem;padding-left:2rem"><!-- wp:image {"align":"center","width":150,"height":150,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
	<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-full is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/team-2.jpg" alt="' . esc_attr__( 'Team Two', 'bricksy' ) . '" width="150" height="150"/></figure></div>
	<!-- /wp:image -->
	
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><strong>' . esc_html__( 'Elizabeth Linden', 'bricksy' ) . '<br></strong>' . esc_html__( 'Travel Editor', 'bricksy' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:separator {"align":"full","className":"is-style-default"} -->
	<hr class="wp-block-separator alignfull is-style-default"/>
	<!-- /wp:separator -->
	
	<!-- wp:social-links {"customIconColor":"#ffffff","iconColorValue":"#ffffff","customIconBackgroundColor":"#000000","iconBackgroundColorValue":"#000000","className":"","layout":{"type":"flex","justifyContent":"center"}} -->
	<ul class="wp-block-social-links has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->
	
	<!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->
	
	<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->
	
	<!-- wp:social-link {"url":"https://wordpress.org","service":"wordpress"} /--></ul>
	<!-- /wp:social-links --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"style":{"spacing":{"padding":{"top":"4rem","right":"2rem","bottom":"2rem","left":"2rem"}}}} -->
	<div class="wp-block-column" style="padding-top:4rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem"><!-- wp:image {"align":"center","width":150,"height":150,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
	<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-full is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/team-3.jpg" alt="' . esc_attr__( 'Team Three', 'bricksy' ) . '" width="150" height="150"/></figure></div>
	<!-- /wp:image -->
	
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><strong>' . esc_html__( 'Janet Smith', 'bricksy' ) . '<br></strong>' . esc_html__( 'Tour Guide', 'bricksy' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:separator {"align":"full","className":"is-style-default"} -->
	<hr class="wp-block-separator alignfull is-style-default"/>
	<!-- /wp:separator -->
	
	<!-- wp:social-links {"customIconColor":"#ffffff","iconColorValue":"#ffffff","customIconBackgroundColor":"#000000","iconBackgroundColorValue":"#000000","className":"","layout":{"type":"flex","justifyContent":"center"}} -->
	<ul class="wp-block-social-links has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->
	
	<!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->
	
	<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->
	
	<!-- wp:social-link {"url":"https://wordpress.org","service":"wordpress"} /--></ul>
	<!-- /wp:social-links --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
);
