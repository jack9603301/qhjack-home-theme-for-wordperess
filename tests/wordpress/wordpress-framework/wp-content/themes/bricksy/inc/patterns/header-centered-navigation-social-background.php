<?php
/**
 * Centered header with navigation and social links block pattern
 */
return array(
	'title'	  => __( 'Centered header with navigation and social links', 'bricksy' ),
	'categories' => array( 'bricksy-headers' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'	=> '<!-- wp:group {"align":"wide","className":"alignwide","layout":{"inherit":true}} -->
	<div class="wp-block-group alignwide"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left"}} /--></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":""} -->
	<div class="wp-block-column"><!-- wp:site-title {"textAlign":"center","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}}} /--></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:social-links {"iconColor":"primary","iconColorValue":"var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dcolor\u002d\u002dprimary)","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"right"}} -->
	<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"twitter"} /-->
	
	<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
	<!-- /wp:social-links --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
);
