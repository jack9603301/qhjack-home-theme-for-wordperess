<?php
/**
 * Three column title and images block pattern
 */
return array(
	'title'	  => __( 'Three Column Title and Images', 'bricksy' ),
	'categories' => array( 'bricksy-general' ),
	'content'	=> '<!-- wp:group {"align":"full"} -->
	<div class="wp-block-group alignfull"><!-- wp:columns {"align":"full"} -->
	<div class="wp-block-columns alignfull"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:cover {"overlayColor":"primary","minHeight":600,"contentPosition":"center left","isDark":false,"style":{"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}}}} -->
	<div class="wp-block-cover is-light has-custom-content-position is-position-center-left" style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem;min-height:600px"><span aria-hidden="true" class="has-primary-background-color has-background-dim-100 wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"70px"}}} -->
	<h2 class="has-text-align-center" id="about-us" style="font-size:70px">' . esc_html__( 'About Us', 'bricksy' ) . '</h2>
	<!-- /wp:heading --></div></div>
	<!-- /wp:cover --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( '/assets/images/gallery-1.jpg' ) ) . '","dimRatio":0,"minHeight":600,"align":"full","style":{"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}}}} -->
	<div class="wp-block-cover alignfull" style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem;min-height:600px"><span aria-hidden="true" class="has-background-dim-0 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background" alt="' . esc_attr__( 'Nature', 'bricksy' ) . '" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/gallery-1.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
	<p class="has-text-align-center has-large-font-size"></p>
	<!-- /wp:paragraph --></div></div>
	<!-- /wp:cover --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( '/assets/images/gallery-4.jpg' ) ) . '","dimRatio":0,"minHeight":600,"isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}}}} -->
	<div class="wp-block-cover alignfull is-light" style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem;min-height:600px"><span aria-hidden="true" class="has-background-dim-0 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background" alt="' . esc_attr__( 'Enjoy and Relax', 'bricksy' ) . '" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/gallery-4.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
	<p class="has-text-align-center has-large-font-size"></p>
	<!-- /wp:paragraph --></div></div>
	<!-- /wp:cover --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
);
