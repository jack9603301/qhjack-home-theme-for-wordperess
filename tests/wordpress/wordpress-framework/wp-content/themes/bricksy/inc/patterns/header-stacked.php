<?php
/**
 * Logo and navigation header centered block pattern
 */
return array(
	'title'	  => __( 'Logo and navigation header centered', 'bricksy' ),
	'categories' => array( 'bricksy-headers' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'	=> '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"8rem","top":"max(1.25rem, 5vw)"}}}} -->
	<div class="wp-block-group alignwide" style="padding-top:max(1.25rem, 5vw);padding-bottom:8rem"><!-- wp:site-logo {"width":128,"align":"center"} /-->
	
	<!-- wp:site-title {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase"}}} /-->
	
	<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"center"}} /--></div>
	<!-- /wp:group -->',
);
