<?php
/**
 * Three column text block pattern
 */
return array(
	'title'	  => __( 'Three Column Text', 'bricksy' ),
	'categories' => array( 'bricksy-general', 'featured' ),
	'content'	=> '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"3rem","bottom":"3rem","right":"3rem","left":"3rem"}}},"layout":{"inherit":true}} -->
	<div class="wp-block-group alignwide" style="padding-top:3rem;padding-right:3rem;padding-bottom:3rem;padding-left:3rem"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"width":"50%"} -->
	<div class="wp-block-column" style="flex-basis:50%"><!-- wp:heading -->
	<h2 id="our-inspiration">' . esc_html__( 'Our Inspiration', 'bricksy' ) . '</h2>
	<!-- /wp:heading --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"50%"} -->
	<div class="wp-block-column" style="flex-basis:50%"><!-- wp:separator {"customColor":"#000000","className":"is-style-wide"} -->
	<hr class="wp-block-separator has-text-color has-background is-style-wide" style="background-color:#000000;color:#000000"/>
	<!-- /wp:separator --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"is-style-olorien-round-edges"} -->
	<figure class="wp-block-image size-large is-style-olorien-round-edges"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/gallery-3.jpg" alt="' . esc_attr__( 'Birds', 'bricksy' ) . '" /><figcaption>' . esc_html__( 'OParrot. Original public domain image from Wikimedia Commons', 'bricksy' ) . '</figcaption></figure>
	<!-- /wp:image -->
	
	<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/gallery-1.jpg" alt="' . esc_attr__( 'Nature', 'bricksy' ) . '" /><figcaption>' . esc_html__( 'A long wooden pier on a smooth lake. Original public domain image from Wikimedia Commons', 'bricksy' ) . '</figcaption></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"small"} -->
	<p class="has-small-font-size">' . esc_html__( 'Winding veils round their heads, the women walked on deck. They were now moving steadily down the river, passing the dark shapes of ships at anchor, and London was a swarm of lights with a pale yellow canopy drooping above it. There were the lights of the great theatres, the lights of the long streets, lights that indicated huge squares of domestic comfort, lights that hung high in air.', 'bricksy' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"fontSize":"small"} -->
	<p class="has-small-font-size">' . esc_html__( 'No darkness would ever settle upon those lamps, as no darkness had settled upon them for hundreds of years. It seemed dreadful that the town should blaze for ever in the same spot; dreadful at least to people going away to adventure! n deck.', 'bricksy' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"fontSize":"small"} -->
	<p class="has-small-font-size">' . esc_html__( 'They were now moving steadily down the river, passing the dark shapes of ships at anchor, and London was a swarm of lights with a pale yellow canopy drooping above it. There were the lights of the great theatres, the lights of the long streets, lights that indicated huge squares of domestic comfort, lights that hung high in air.', 'bricksy' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"small"} -->
	<p class="has-small-font-size">' . esc_html__( 'No darkness would ever settle upon those lamps, as no darkness had settled upon them for hundreds of years. It seemed dreadful that the town should blaze for ever in the same spot; dreadful at least to people going away to adventure upon the sea, and beholding it as a circumscribed mound, eternally burnt, eternally scarred. From the deck of the ship the great city appeared a crouched and cowardly figure, a sedentary miser.', 'bricksy' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"className":"handwritten-alternative","fontSize":"gigantic"} -->
	<p class="handwritten-alternative has-gigantic-font-size">' . esc_html__( 'freedom', 'bricksy' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	</div>
	<!-- /wp:group -->',
);
