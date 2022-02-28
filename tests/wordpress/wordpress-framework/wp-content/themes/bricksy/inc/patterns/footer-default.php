<?php
/**
 * Default footer
 */
return array(
	'title'	  => __( 'Default footer', 'bricksy' ),
	'categories' => array( 'bricksy-footers' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'	=> '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"3rem","bottom":"8rem","right":"3rem","left":"3rem"}}},"layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull" style="padding-top:3rem;padding-right:3rem;padding-bottom:8rem;padding-left:3rem"><!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:heading {"level":4} -->
	<h4 id="about-us">' . esc_html__( 'About Us', 'bricksy' ) . '</h4>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph -->
	<p>' . wp_kses_post( __( 'Etiam consequat sem ullamcorper, euismod metus sit amet, tristi justo. Vestibulum mattis, nisi ut.', 'bricksy' ) ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p><strong>' . esc_html__( 'email:&nbsp;', 'bricksy' ) . '</strong><a href="#">' . esc_html__( 'bricksy@example.com', 'bricksy' ) . '</a></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p><strong>' . esc_html__( 'phone:&nbsp;', 'bricksy' ) . '</strong><a href="#">' . esc_html__( '+1 265 013 7253', 'bricksy' ) . '</a></p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:heading {"level":4} -->
	<h4 id="our-adventures">' . esc_html__( 'Our Adventures', 'bricksy' ) . '</h4>
	<!-- /wp:heading -->
	
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"padding":{"top":"0rem","right":"0rem","bottom":"0rem","left":"0rem"}}}} -->
	<div class="wp-block-column" style="padding-top:0rem;padding-right:0rem;padding-bottom:0rem;padding-left:0rem"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/gallery-1.jpg" alt="' . esc_attr__( 'Nature Image', 'bricksy' ) . '" /></figure>
	<!-- /wp:image -->
	
	<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/gallery-2.jpg" alt="' . esc_attr__( 'Nature Image', 'bricksy' ) . '" /></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"style":{"spacing":{"padding":{"top":"0rem","right":"0rem","bottom":"0rem","left":"0rem"}}}} -->
	<div class="wp-block-column" style="padding-top:0rem;padding-right:0rem;padding-bottom:0rem;padding-left:0rem"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/gallery-3.jpg" alt="' . esc_attr__( 'Nature Image', 'bricksy' ) . '" /></figure>
	<!-- /wp:image -->
	
	<!-- wp:image {"id":4348,"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/gallery-4.jpg" alt="' . esc_attr__( 'Nature Image', 'bricksy' ) . '" /></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"style":{"spacing":{"padding":{"top":"0rem","right":"0rem","bottom":"0rem","left":"0rem"}}}} -->
	<div class="wp-block-column" style="padding-top:0rem;padding-right:0rem;padding-bottom:0rem;padding-left:0rem"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/gallery-5.jpg" alt="' . esc_attr__( 'Nature Image', 'bricksy' ) . '" /></figure>
	<!-- /wp:image -->
	
	<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/gallery-6.jpg" alt="' . esc_attr__( 'Nature Image', 'bricksy' ) . '" /></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:heading {"level":4} -->
	<h4 id="categories">' . esc_html__( 'Categories', 'bricksy' ) . '</h4>
	<!-- /wp:heading -->
	
	<!-- wp:list -->
	<ul><li><a href="#">' . esc_html__( 'Experience Thailand', 'bricksy' ) . ' </a></li><li><a href="#">' . esc_html__( 'Best Adventures', 'bricksy' ) . '</a></li><li><a href="#"></a><a href="#">' . esc_html__( 'Sea & Beach', 'bricksy' ) . ' </a></li><li><a href="#">' . esc_html__( 'Hiking Tours', 'bricksy' ) . '</a><a href="#"> </a></li><li><a href="#">' . esc_html__( 'Kayaking Tours', 'bricksy' ) . '</a><a href="#"> </a></li><li><a href="#">' . esc_html__( 'Winter Destinations', 'bricksy' ) . '</a></li></ul>
	<!-- /wp:list --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:separator {"align":"wide","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignwide is-style-wide"/>
	<!-- /wp:separator -->
	
	<!-- wp:spacer {"height":50} -->
	<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:site-logo {"align":"center","width":232.591549295775} /-->
	
	<!-- wp:social-links {"iconColor":"foreground","iconColorValue":"#000000","align":"center","className":"has-icon-color is-style-logos-only"} -->
	<ul class="wp-block-social-links aligncenter has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"https://wordpress.org","service":"wordpress"} /-->
	
	<!-- wp:social-link {"url":"twitter.com","service":"twitter"} /-->
	
	<!-- wp:social-link {"url":"instagram.com","service":"instagram"} /--></ul>
	<!-- /wp:social-links -->
	
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide" style="padding-top:4rem;padding-bottom:4rem"><!-- wp:site-title /-->
	
	<!-- wp:paragraph {"align":"right"} -->
	<p class="has-text-align-right">' .
	sprintf(
		/* Translators: WordPress link. */
		esc_html__( 'Proudly powered by %s', 'bricksy' ),
		'<a href="' . esc_url( __( 'https://wordpress.org', 'bricksy' ) ) . '" rel="nofollow">WordPress</a>'
	) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->',
);
