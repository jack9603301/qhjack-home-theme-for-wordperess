<?php
/**
 * Default footer block pattern
 */
return array(
	'title'	  => __( 'Default header', 'bricksy' ),
	'categories' => array( 'bricksy-headers' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'	=> '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dspacing\u002d\u002dsmall, 1.25rem)","left":"var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dspacing\u002d\u002dsmall, 1.25rem)"}}},"layout":{"inherit":true}} -->
	<div class="wp-block-group alignwide" style="padding-right:var(--wp--custom--spacing--small, 1.25rem);padding-left:var(--wp--custom--spacing--small, 1.25rem)"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"calc(.5*var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dspacing\u002d\u002dsmall, 1.25rem))","top":"calc(.5*var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dspacing\u002d\u002dsmall, 1.25rem))"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide" style="padding-top:calc(.5*var(--wp--custom--spacing--small, 1.25rem));padding-bottom:calc(.5*var(--wp--custom--spacing--small, 1.25rem))"><!-- wp:group {"layout":{"type":"flex"}} -->
	<div class="wp-block-group"><!-- wp:site-logo {"width":212.630136986301} /--></div>
	<!-- /wp:group -->
	
	<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"}} /--></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->',
);
