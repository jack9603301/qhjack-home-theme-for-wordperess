<?php
/**
 * Three columns with images and text block pattern
 */
return array(
	'title'	  => __( 'Three Columns with Images and Text', 'bricksy' ),
	'categories' => array( 'bricksy-general' ),
	'content'	=> '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"4rem","right":"2rem","left":"2rem"}}},"className":"bricksy-about","layout":{"inherit":true}} -->
	<div class="wp-block-group alignwide bricksy-about" style="padding-right:2rem;padding-bottom:4rem;padding-left:2rem"><!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:heading {"fontSize":"huge"} -->
	<h2 class="has-huge-font-size" id="our-adventures">' . esc_html__( 'Our Adventures', 'bricksy' ) . '</h2>
	<!-- /wp:heading --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33.38%"} -->
	<div class="wp-block-column" style="flex-basis:33.38%"><!-- wp:paragraph {"textColor":"main-blue","fontSize":"normal"} -->
	<p class="has-main-blue-color has-text-color has-normal-font-size">' . esc_html__( 'Sed gravida ornare vestibulum turpis quam urna aliquam in feugiat lorem dolor pulvinar a, scelerisque amet ultrices consectetur magna sit. Sed gravida ornare vestibulum turpis quam urna aliquam in feugiat lorem dolor pulvinar a, scelerisque amet ultrices consectetur magna sit. Sed gravida ornare vestibulum turpis quam urna aliquam in feugiat lorem dolor pulvinar a, scelerisque amet ultrices consectetur magna sit.', 'bricksy' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"33%"} -->
	<div class="wp-block-column" style="flex-basis:33%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"emoly-special-image-width"} -->
	<figure class="wp-block-image size-full emoly-special-image-width"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/gallery-1.jpg" alt="' . esc_attr__( 'Gallery One', 'bricksy' ) . '" /></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"33.62%"} -->
	<div class="wp-block-column" style="flex-basis:33.62%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/gallery-2.jpg" alt="' . esc_attr__( 'Gallery Two', 'bricksy' ) . '" /></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"width":"67%"} -->
	<div class="wp-block-column" style="flex-basis:67%"><!-- wp:image {"align":"left","sizeSlug":"full","linkDestination":"none"} -->
	<div class="wp-block-image"><figure class="alignleft size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/gallery-3.jpg" alt="' . esc_attr__( 'Gallery Three', 'bricksy' ) . '" /></figure></div>
	<!-- /wp:image --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"33%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33%"><!-- wp:paragraph {"textColor":"main-blue","fontSize":"normal"} -->
	<p class="has-main-blue-color has-text-color has-normal-font-size">' . esc_html__( 'Sed gravida ornare vestibulum turpis quam urna aliquam in feugiat lorem dolor pulvinar a, scelerisque amet ultrices consectetur magna sit.Sed gravida ornare vestibulum turpis quam urna aliquam in feugiat lorem dolor pulvinar a, scelerisque amet ultrices consectetur magna sit.', 'bricksy' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"className":"handwritten-alternative","fontSize":"gigantic"} -->
	<p class="handwritten-alternative has-gigantic-font-size">' . esc_html__( 'freedom', 'bricksy' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
);
