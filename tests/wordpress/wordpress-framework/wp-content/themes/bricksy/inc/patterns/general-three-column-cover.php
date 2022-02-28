<?php
/**
 * Three Column Cover block pattern
 */
return array(
	'title'	  => __( 'Three Column Cover', 'bricksy' ),
	'categories' => array( 'bricksy-general', 'featured' ),
	'content'	=> '<!-- wp:columns {"align":"full","className":"is-style-default"} -->
	<div class="wp-block-columns alignfull is-style-default"><!-- wp:column {"style":{"spacing":{"padding":{"top":"0rem","right":"0rem","bottom":"4rem","left":"0rem"}}},"backgroundColor":"white"} -->
	<div class="wp-block-column has-white-background-color has-background" style="padding-top:0rem;padding-right:0rem;padding-bottom:4rem;padding-left:0rem"><!-- wp:group {"align":"full"} -->
	<div class="wp-block-group alignfull"><!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( '/assets/images/gallery-1.jpg' ) ) . '","dimRatio":70,"minHeight":700} -->
	<div class="wp-block-cover" style="min-height:700px"><span aria-hidden="true" class="has-background-dim-70 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background" alt="' . esc_attr__( 'Gallery One', 'bricksy' ) . '" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/gallery-1.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":3,"textColor":"background","fontSize":"large"} -->
	<h3 class="has-text-align-center has-background-color has-text-color has-large-font-size" id="travel">' . esc_html__( 'Travel', 'bricksy' ) . '</h3>
	<!-- /wp:heading -->
	
	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"align":"center","style":{"typography":{"fontSize":"14px"}},"className":"is-style-outline"} -->
	<div class="wp-block-button aligncenter has-custom-font-size is-style-outline" style="font-size:14px"><a class="wp-block-button__link">' . esc_html__( 'READ MORE', 'bricksy' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div></div>
	<!-- /wp:cover -->
	
	<!-- wp:group {"align":"full"} -->
	<div class="wp-block-group alignfull"><!-- wp:group {"align":"full","className":"is-style-emoly-border"} -->
	<div class="wp-block-group alignfull is-style-emoly-border"></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"style":{"spacing":{"padding":{"top":"0rem","right":"0rem","bottom":"4rem","left":"0rem"}}},"backgroundColor":"white"} -->
	<div class="wp-block-column has-white-background-color has-background" style="padding-top:0rem;padding-right:0rem;padding-bottom:4rem;padding-left:0rem"><!-- wp:group {"align":"full"} -->
	<div class="wp-block-group alignfull"><!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( '/assets/images/gallery-2.jpg' ) ) . '","dimRatio":70,"minHeight":700} -->
	<div class="wp-block-cover" style="min-height:700px"><span aria-hidden="true" class="has-background-dim-70 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background" alt="' . esc_attr__( 'Gallery Two', 'bricksy' ) . '" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/gallery-2.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":3,"textColor":"background","fontSize":"large"} -->
	<h3 class="has-text-align-center has-background-color has-text-color has-large-font-size" id="travel">' . esc_html__( 'Adventure', 'bricksy' ) . '</h3>
	<!-- /wp:heading -->
	
	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"align":"center","style":{"typography":{"fontSize":"14px"}},"className":"is-style-outline"} -->
	<div class="wp-block-button aligncenter has-custom-font-size is-style-outline" style="font-size:14px"><a class="wp-block-button__link">' . esc_html__( 'READ MORE', 'bricksy' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div></div>
	<!-- /wp:cover -->
	
	<!-- wp:group {"align":"full"} -->
	<div class="wp-block-group alignfull"><!-- wp:group {"align":"full","className":"is-style-emoly-border"} -->
	<div class="wp-block-group alignfull is-style-emoly-border"></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"style":{"spacing":{"padding":{"top":"0rem","right":"0rem","bottom":"4rem","left":"0rem"}}},"backgroundColor":"white"} -->
	<div class="wp-block-column has-white-background-color has-background" style="padding-top:0rem;padding-right:0rem;padding-bottom:4rem;padding-left:0rem"><!-- wp:group {"align":"full"} -->
	<div class="wp-block-group alignfull"><!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( '/assets/images/gallery-3.jpg' ) ) . '","dimRatio":70,"minHeight":700} -->
	<div class="wp-block-cover" style="min-height:700px"><span aria-hidden="true" class="has-background-dim-70 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background" alt="' . esc_attr__( 'Gallery Three', 'bricksy' ) . '" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/gallery-3.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":3,"textColor":"background","fontSize":"large"} -->
	<h3 class="has-text-align-center has-background-color has-text-color has-large-font-size" id="travel">' . esc_html__( 'Journey', 'bricksy' ) . '</h3>
	<!-- /wp:heading -->
	
	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"align":"center","style":{"typography":{"fontSize":"14px"}},"className":"is-style-outline"} -->
	<div class="wp-block-button aligncenter has-custom-font-size is-style-outline" style="font-size:14px"><a class="wp-block-button__link">' . esc_html__( 'READ MORE', 'bricksy' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div></div>
	<!-- /wp:cover -->
	
	<!-- wp:group {"align":"full"} -->
	<div class="wp-block-group alignfull"><!-- wp:group {"align":"full","className":"is-style-emoly-border"} -->
	<div class="wp-block-group alignfull is-style-emoly-border"></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->',
);
