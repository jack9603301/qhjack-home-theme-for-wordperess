<?php
/**
 * Subscribe block pattern
 */
return array(
	'title'	  => __( 'Subscribe', 'bricksy' ),
	'categories' => array( 'bricksy-general', 'featured' ),
	'content'	=> '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"8rem","bottom":"8rem","left":"0px","right":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"cyan-bluish-gray","textColor":"foreground","className":"bricksy-general-color-me-in"} -->
	<div class="wp-block-group alignfull bricksy-general-color-me-in has-foreground-color has-cyan-bluish-gray-background-color has-text-color has-background has-link-color" style="padding-top:8rem;padding-right:0px;padding-bottom:8rem;padding-left:0px"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"left":"max(1.25rem, 5vw)","right":"max(1.25rem, 5vw)"}}},"layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull" style="padding-right:max(1.25rem, 5vw);padding-left:max(1.25rem, 5vw)"><!-- wp:spacer {"height":32} -->
	<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:heading -->
	<h2 id="watch-birdsfrom-your-inbox-1">' . esc_html__( 'Go on an adventure', 'bricksy' ) . '<br>' . esc_html__( 'from your inbox', 'bricksy' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline","fontSize":"normal"} -->
	<div class="wp-block-button has-custom-font-size is-style-outline has-normal-font-size"><a class="wp-block-button__link">' . esc_html__( 'JOIN OUR MAILING LIST', 'bricksy' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem"}}}} -->
	<div class="wp-block-column is-vertically-aligned-center" style="padding-top:2rem;padding-bottom:2rem"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none"} -->
	<div class="wp-block-image"><figure class="aligncenter size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/globe.png" alt="' . esc_attr__( 'Globe', 'bricksy' ) . '" /></figure></div>
	<!-- /wp:image --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:group {"align":"wide"} -->
	<div class="wp-block-group alignwide"></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->',
);
