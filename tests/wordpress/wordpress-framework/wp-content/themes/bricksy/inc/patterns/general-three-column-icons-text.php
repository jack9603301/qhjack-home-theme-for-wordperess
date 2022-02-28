<?php
/**
 * Three column icons and text block pattern
 */
return array(
	'title'	  => __( 'Three Column Icons and Text', 'bricksy' ),
	'categories' => array( 'bricksy-general', 'featured' ),
	'content'	=> '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"3rem","right":"3rem","bottom":"3rem","left":"3rem"}}},"className":"bricksy-general-two-column-text","layout":{"inherit":false,"contentSize":"1200px"}} -->
	<div class="wp-block-group alignwide bricksy-general-two-column-text" style="padding-top:3rem;padding-right:3rem;padding-bottom:3rem;padding-left:3rem"><!-- wp:columns {"style":{"spacing":{"blockGap":"%"}}} -->
	<div class="wp-block-columns"><!-- wp:column {"width":"100%"} -->
	<div class="wp-block-column" style="flex-basis:100%"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"className":"emoly-features"} -->
	<div class="wp-block-group alignfull emoly-features" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:columns {"align":"full","style":{"spacing":{"blockGap":"20px"}}} -->
	<div class="wp-block-columns alignfull"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none"} -->
	<div class="wp-block-image"><figure class="aligncenter size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/icon-1.png" alt="' . esc_attr__( 'Icon One', 'bricksy' ) . '" /></figure></div>
	<!-- /wp:image -->
	
	<!-- wp:heading {"textAlign":"center","fontSize":"large"} -->
	<h2 class="has-text-align-center has-large-font-size" id="a-top-service">' . esc_html__( 'A Top Service', 'bricksy' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">' . esc_html__( 'Once receiving your order, we will arrange a call with you to arrange the best for you.', 'bricksy' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none"} -->
	<div class="wp-block-image"><figure class="aligncenter size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/icon-2.png" alt="' . esc_attr__( 'Icon Two', 'bricksy' ) . '" /></figure></div>
	<!-- /wp:image -->
	
	<!-- wp:heading {"textAlign":"center","fontSize":"large"} -->
	<h2 class="has-text-align-center has-large-font-size" id="a-top-service">' . esc_html__( 'Best Community', 'bricksy' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">' . esc_html__( 'We have a long-standing reputation as one of the best travel communities in the world.', 'bricksy' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none"} -->
	<div class="wp-block-image"><figure class="aligncenter size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/icon-3.png" alt="' . esc_attr__( 'Icon Three', 'bricksy' ) . '" /></figure></div>
	<!-- /wp:image -->
	
	<!-- wp:heading {"textAlign":"center","fontSize":"large"} -->
	<h2 class="has-text-align-center has-large-font-size" id="a-top-service">' . esc_html__( 'Relax & Enjoy', 'bricksy' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">' . esc_html__( 'We make commitments that the quality of our work will and always will be superb.', 'bricksy' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
);
