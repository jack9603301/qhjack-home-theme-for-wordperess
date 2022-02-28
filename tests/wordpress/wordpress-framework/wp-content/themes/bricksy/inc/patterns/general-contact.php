<?php
/**
 * Contact block pattern
 */
return array(
	'title'	  => __( 'Contact', 'bricksy' ),
	'categories' => array( 'bricksy-general', 'featured' ),
	'content'	=> '<!-- wp:media-text {"align":"full","mediaLink":"' . esc_url( get_theme_file_uri( '/assets/images/gallery-3.jpg' ) ) . '","mediaType":"image","verticalAlignment":"center","style":{"color":{"background":"#ffffff","text":"#000000"},"elements":{"link":{"color":{"text":"#000000"}}}}} -->
	<div class="wp-block-media-text alignfull is-stacked-on-mobile is-vertically-aligned-center has-text-color has-background has-link-color" style="background-color:#ffffff;color:#000000"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/gallery-3.jpg" alt="' . esc_attr__( 'Bird Watch', 'bricksy' ) . '" /></figure><div class="wp-block-media-text__content"><!-- wp:spacer {"height":60} -->
	<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:heading {"style":{"typography":{"fontWeight":"700","fontSize":"3em"}}} -->
	<h2 id="contact-us" style="font-size:3em;font-weight:700">' . esc_html__( 'Contact Us', 'bricksy' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.1em"}}} -->
	<p style="font-size:1.1em">' . esc_html__( '123 Columbia St, Brooklyn, NY', 'bricksy' ) . '<br>' . esc_html__( '12345, United States<', 'bricksy' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.1em"}}} -->
	<p style="font-size:1.1em">Phone: +12345678900<br>Email: <a href="#">' . esc_html__( 'example@example.com', 'bricksy' ) . '</a></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:social-links {"className":"is-style-olorien-social-icons-color"} -->
	<ul class="wp-block-social-links is-style-olorien-social-icons-color"><!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->
	
	<!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->
	
	<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /--></ul>
	<!-- /wp:social-links --></div></div>
	<!-- /wp:media-text -->',
);
