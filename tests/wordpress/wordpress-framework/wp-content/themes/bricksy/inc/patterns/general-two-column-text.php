<?php
/**
 * Two column text block pattern
 */
return array(
	'title'	  => __( 'Two Column Text', 'bricksy' ),
	'categories' => array( 'bricksy-general', 'featured' ),
	'content'	=> '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"3rem","right":"3rem","bottom":"0%","left":"3rem"}}},"className":"bricksy-general-two-column-text","layout":{"inherit":false,"contentSize":"1200px"}} -->
	<div class="wp-block-group alignwide bricksy-general-two-column-text" style="padding-top:3rem;padding-right:3rem;padding-bottom:0%;padding-left:3rem"><!-- wp:columns {"style":{"spacing":{"blockGap":"%"}}} -->
	<div class="wp-block-columns"><!-- wp:column {"width":"66.66%"} -->
	<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph -->
	<p>' . esc_html__( 'TRAVEL &amp; OUTDOOR RECREATION', 'bricksy' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:heading {"textAlign":"left","fontSize":"colossal"} -->
	<h2 class="has-text-align-left has-colossal-font-size" id="adventure-for-your-soul">' . esc_html__( 'Adventure for your Soul', 'bricksy' ) . '</h1>
	<!-- /wp:heading --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"33.33%"} -->
	<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"fontSize":"normal"} -->
	<p class="has-normal-font-size"><strong>' . esc_html__( '“We live in a wonderful world that is full of beauty, charm and adventure. There is no end to the adventures that we can have if only we seek them with our eyes open.” – Jawaharlal Nehru', 'bricksy' ) . '</strong></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"className":"handwritten-alternative","fontSize":"gigantic"} -->
	<p class="handwritten-alternative has-gigantic-font-size">' . esc_html__( 'freedom', 'bricksy' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
);
