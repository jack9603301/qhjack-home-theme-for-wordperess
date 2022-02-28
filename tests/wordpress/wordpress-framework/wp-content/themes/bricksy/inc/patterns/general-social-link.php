<?php
/**
 * Social links block pattern
 */
return array(
	'title'	  => __( 'Social Links', 'bricksy' ),
	'categories' => array( 'bricksy-general', 'featured' ),
	'content'	=> '<!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( '/assets/images/cover-image-1.jpg' ) ) . '","hasParallax":true,"dimRatio":50,"minHeight":100,"minHeightUnit":"vh","isDark":false,"align":"full"} -->
	<div class="wp-block-cover alignfull is-light has-parallax" style="background-image:url(' . esc_url( get_theme_file_uri( '/assets/images/cover-image-1.jpg' ) ) . ');min-height:100vh"><span aria-hidden="true" class="wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:spacer {"height":80} -->
	<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:image {"align":"center","width":120,"height":120,"sizeSlug":"thumbnail","linkDestination":"none","className":"is-style-rounded"} -->
	<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-thumbnail is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/logo.jpg" alt="' . esc_attr__( 'Circle Logo', 'bricksy' ) . '" width="120" height="120"/></figure></div>
	<!-- /wp:image -->
	
	<!-- wp:group {"layout":{"inherit":true}} -->
	<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"48px"}},"textColor":"background"} -->
	<h2 class="has-text-align-center has-background-color has-text-color" id="bricksy" style="font-size:48px"><strong>' . esc_html__( 'Bricksy', 'bricksy' ) . '</strong></h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"}},"textColor":"background"} -->
	<p class="has-text-align-center has-background-color has-text-color" style="text-transform:uppercase">' . esc_html__( 'A travel Agency', 'bricksy' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:spacer {"height":60} -->
	<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"tertiary","textColor":"foreground","width":100} -->
	<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-foreground-color has-tertiary-background-color has-text-color has-background">' . esc_html__( 'Instagram', 'bricksy' ) . '</a></div>
	<!-- /wp:button -->
	
	<!-- wp:button {"backgroundColor":"secondary","width":100,"style":{"color":{"text":"#111111"}}} -->
	<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-secondary-background-color has-text-color has-background" style="color:#111111">' . esc_html__( 'Website', 'bricksy' ) . '</a></div>
	<!-- /wp:button -->
	
	<!-- wp:button {"backgroundColor":"primary","width":100,"style":{"color":{"text":"#111111"}}} -->
	<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-primary-background-color has-text-color has-background" style="color:#111111">' . esc_html__( 'YouTube', 'bricksy' ) . '</a></div>
	<!-- /wp:button -->
	
	<!-- wp:button {"width":100,"style":{"color":{"background":"#fefefe","text":"#111111"}}} -->
	<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-text-color has-background" style="background-color:#fefefe;color:#111111">' . esc_html__( 'Shop', 'bricksy' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons -->
	
	<!-- wp:spacer {"height":60} -->
	<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:social-links {"iconColor":"foreground","iconColorValue":"#000000","iconBackgroundColor":"secondary","iconBackgroundColorValue":"#a7d5d2","align":"center","className":"","layout":{"type":"flex","justifyContent":"center"}} -->
	<ul class="wp-block-social-links aligncenter has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"https://wordpress.org","service":"wordpress"} /-->
	
	<!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->
	
	<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->
	
	<!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /--></ul>
	<!-- /wp:social-links --></div>
	<!-- /wp:group -->
	
	<!-- wp:spacer {"height":90} -->
	<div style="height:90px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div></div>
	<!-- /wp:cover -->',
);
