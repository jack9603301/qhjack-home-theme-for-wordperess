<?php
/**
 * About page block pattern
 */
return array(
	'title'	  => __( 'Team Page', 'bricksy' ),
	'categories' => array( 'bricksy-pages' ),
	'content'	=> '<!-- wp:media-text {"align":"full","mediaPosition":"right","mediaId":4335,"mediaLink":"' . esc_url( get_theme_file_uri( '/assets/images/gallery-4.jpg' ) ) . '","mediaType":"image","mediaWidth":42,"imageFill":true} -->
	<div class="wp-block-media-text alignfull has-media-on-the-right is-stacked-on-mobile is-image-fill" style="grid-template-columns:auto 42%"><figure class="wp-block-media-text__media" style="background-image:url(' . esc_url( get_theme_file_uri( '/assets/images/gallery-4.jpg' ) ) . ');background-position:50% 50%"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/gallery-4.jpg" alt="' . esc_attr__( 'Pure Nature', 'bricksy' ) . '" class="wp-image-4335 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group {"style":{"spacing":{"padding":{"top":"20%","right":"20%","bottom":"20%","left":"20%"}}}} -->
	<div class="wp-block-group" style="padding-top:20%;padding-right:20%;padding-bottom:20%;padding-left:20%">
	
	<!-- wp:heading {"level":1} -->
	<h1 id="about-bricksy">' . esc_html__( 'About Bricksy', 'bricksy' ) . '</h1>
	<!-- /wp:heading -->
	 
	<!-- wp:paragraph -->
	<p>' . esc_html__( 'Founded by Bricksy Wiliams on October 24, 2001', 'bricksy' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline","fontSize":"normal"} -->
	<div class="wp-block-button has-custom-font-size is-style-outline has-normal-font-size"><a class="wp-block-button__link">' . esc_html__( 'BOOK NOW', 'bricksy' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:media-text -->
	
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"4rem","bottom":"0rem","right":"4rem","left":"0px"}}},"className":"emoly-gallery-columns","layout":{"inherit":false}} -->
	<div class="wp-block-group alignfull emoly-gallery-columns" style="padding-top:4rem;padding-right:4rem;padding-bottom:0rem;padding-left:0px"><!-- wp:columns {"align":"full"} -->
	<div class="wp-block-columns alignfull"><!-- wp:column {"width":"80%"} -->
	<div class="wp-block-column" style="flex-basis:80%"><!-- wp:gallery {"linkTo":"none"} -->
	<figure class="wp-block-gallery has-nested-images columns-default is-cropped"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/gallery-1.jpg" alt="' . esc_attr__( 'Gallery One', 'bricksy' ) . '" /></figure>
	<!-- /wp:image -->
	
	<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/gallery-2.jpg" alt="' . esc_attr__( 'Gallery Two', 'bricksy' ) . '" /></figure>
	<!-- /wp:image -->
	
	<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/gallery-3.jpg" alt="' . esc_attr__( 'Gallery Three', 'bricksy' ) . '" /></figure>
	<!-- /wp:image --></figure>
	<!-- /wp:gallery --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"bottom","width":"20%","style":{"spacing":{"padding":{"bottom":"15px"}}}} -->
	<div class="wp-block-column is-vertically-aligned-bottom" style="padding-bottom:15px;flex-basis:20%"><!-- wp:paragraph {"style":{"typography":{"fontSize":"19px"}}} -->
	<p style="font-size:19px">' . esc_html__( 'Designs for wedding dresses were created by Sed gravida ornare vestibulum turpis quam urna aliquam in feugiat lorem dolor pulvinar a, scelerisque amet ultrices consectetur magna sit.', 'bricksy' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"4rem","right":"2rem","left":"2rem"}}},"className":"bricksy-about","layout":{"inherit":true}} -->
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
    <p class="handwritten-alternative has-gigantic-font-size">' . esc_html__( 'adventurous', 'bricksy' ) . '</p>
    <!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"4rem","right":"0rem","bottom":"4rem","left":"0rem"}}},"className":"is-style-default bricksy-team-additional","layout":{"inherit":false,"contentSize":"1200px"}} -->
	<div class="wp-block-group alignwide is-style-default bricksy-team-additional" style="padding-top:4rem;padding-right:0rem;padding-bottom:4rem;padding-left:0rem"><!-- wp:columns {"className":"is-style-default"} -->
	<div class="wp-block-columns is-style-default"><!-- wp:column {"style":{"elements":{"link":{"color":{}}},"spacing":{"padding":{"top":"4rem","right":"2rem","bottom":"4rem","left":"2rem"}}},"backgroundColor":"white"} -->
	<div class="wp-block-column has-white-background-color has-background has-link-color" style="padding-top:4rem;padding-right:2rem;padding-bottom:4rem;padding-left:2rem"><!-- wp:group {"align":"full","style":{"border":{"width":"2px","style":"solid"},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"40px","left":"0px"}}},"borderColor":"foreground"} -->
	<div class="wp-block-group alignfull has-border-color has-foreground-border-color" style="border-style:solid;border-width:2px;padding-top:0px;padding-right:0px;padding-bottom:40px;padding-left:0px"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/people-1.jpg" alt="' . esc_attr__( 'Team One', 'bricksy' ) . '" /></figure>
	<!-- /wp:image -->
	
	<!-- wp:group {"align":"full"} -->
	<div class="wp-block-group alignfull"><!-- wp:group {"align":"full","className":"is-style-emoly-border"} -->
	<div class="wp-block-group alignfull is-style-emoly-border"><!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><strong>' . esc_html__( 'Marie Martín', 'bricksy' ) . '<br></strong>' . esc_html__( 'Editor-in-chief', 'bricksy' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:social-links {"customIconColor":"#ffffff","iconColorValue":"#ffffff","iconBackgroundColor":"main-blue","iconBackgroundColorValue":"#172144","className":"is-style-default","layout":{"type":"flex","justifyContent":"center"}} -->
	<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default"><!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->
	
	<!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->
	
	<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->
	
	<!-- wp:social-link {"url":"https://wordpress.org","service":"wordpress"} /--></ul>
	<!-- /wp:social-links --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"style":{"elements":{"link":{"color":{}}},"spacing":{"padding":{"top":"4rem","right":"2rem","bottom":"4rem","left":"2rem"}}},"backgroundColor":"white"} -->
	<div class="wp-block-column has-white-background-color has-background has-link-color" style="padding-top:4rem;padding-right:2rem;padding-bottom:4rem;padding-left:2rem"><!-- wp:paragraph {"align":"center","className":"handwritten-alternative","fontSize":"gigantic"} -->
    <p class="has-text-align-center handwritten-alternative has-gigantic-font-size">' . esc_html__( 'freedom', 'bricksy' ) . '</p>
    <!-- /wp:paragraph -->
	
	<!-- wp:heading {"textAlign":"center","fontSize":"large"} -->
	<h2 class="has-text-align-center has-large-font-size" id="our-team">' . esc_html__( 'Our Team', 'bricksy' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:group {"align":"full","style":{"border":{"width":"2px","style":"solid"},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"40px","left":"0px"}}},"borderColor":"foreground"} -->
	<div class="wp-block-group alignfull has-border-color has-foreground-border-color" style="border-style:solid;border-width:2px;padding-top:0px;padding-right:0px;padding-bottom:40px;padding-left:0px"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
	<div class="wp-block-image is-style-default"><figure class="aligncenter size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/people-2.jpg" alt="' . esc_attr__( 'Team Three', 'bricksy' ) . '" /></figure></div>
	<!-- /wp:image -->
	
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><strong>' . esc_html__( 'Elizabeth Linden', 'bricksy' ) . '<br></strong>' . esc_html__( 'Travel Editor', 'bricksy' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:social-links {"customIconColor":"#ffffff","iconColorValue":"#ffffff","iconBackgroundColor":"main-blue","iconBackgroundColorValue":"#172144","className":"is-style-default","layout":{"type":"flex","justifyContent":"center"}} -->
	<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default"><!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->
	
	<!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->
	
	<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->
	
	<!-- wp:social-link {"url":"https://wordpress.org","service":"wordpress"} /--></ul>
	<!-- /wp:social-links --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"style":{"elements":{"link":{"color":{}}},"spacing":{"padding":{"top":"4rem","right":"2rem","bottom":"2rem","left":"2rem"}}},"backgroundColor":"white"} -->
	<div class="wp-block-column has-white-background-color has-background has-link-color" style="padding-top:4rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem"><!-- wp:group {"align":"full","style":{"border":{"width":"2px","style":"solid"},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"40px","left":"0px"}}},"borderColor":"foreground"} -->
	<div class="wp-block-group alignfull has-border-color has-foreground-border-color" style="border-style:solid;border-width:2px;padding-top:0px;padding-right:0px;padding-bottom:40px;padding-left:0px"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
	<div class="wp-block-image is-style-default"><figure class="aligncenter size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/people-3.jpg" alt="' . esc_attr__( 'Team Three', 'bricksy' ) . '" /></figure></div>
	<!-- /wp:image -->
	
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><strong>' . esc_html__( 'Janet Smith', 'bricksy' ) . '<br></strong>' . esc_html__( 'Tour Guide', 'bricksy' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:social-links {"customIconColor":"#ffffff","iconColorValue":"#ffffff","iconBackgroundColor":"main-blue","iconBackgroundColorValue":"#172144","className":"is-style-default","layout":{"type":"flex","justifyContent":"center"}} -->
	<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default"><!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->
	
	<!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->
	
	<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->
	
	<!-- wp:social-link {"url":"https://wordpress.org","service":"wordpress"} /--></ul>
	<!-- /wp:social-links --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"3rem","left":"3rem","top":"6rem","bottom":"6rem"}}},"layout":{"inherit":true}} -->
	<div class="wp-block-group alignwide" style="padding-top:6rem;padding-right:3rem;padding-bottom:6rem;padding-left:3rem"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1","textTransform":"uppercase","fontSize":"18px"}}} -->
	<p class="has-text-align-center" style="font-size:18px;line-height:1;text-transform:uppercase">' . esc_html__( 'Introducing', 'bricksy' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:heading {"textAlign":"center","fontSize":"huge"} -->
	<h2 class="has-text-align-center has-huge-font-size" id="bricksy-new-tours">' . esc_html__( 'Adventours New Tours', 'bricksy' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"22px"}}} -->
	<p class="has-text-align-center" style="font-size:22px">' . esc_html__( 'Made with love, the best adventures, for you and family.', 'bricksy' ) . ' <br>' . esc_html__( 'Available for a limited time.', 'bricksy' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:spacer {"height":10} -->
	<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
	<div class="wp-block-button is-style-outline"><a class="wp-block-button__link">' . esc_html__( 'Shop Now', 'bricksy' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons -->
	
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"padding":{"top":"4rem"}}}} -->
	<div class="wp-block-column" style="padding-top:4rem"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"is-style-olorien-round-edges"} -->
	<figure class="wp-block-image size-large is-style-olorien-round-edges"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/gallery-1.jpg" alt="' . esc_attr__( 'Wooden Pier', 'bricksy' ) . '" /><figcaption>' . esc_html__( 'A long wooden pier on a smooth lake. Original public domain image from Wikimedia Commons', 'bricksy' ) . '</figcaption></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"style":{"spacing":{"padding":{"top":"8rem"}}}} -->
	<div class="wp-block-column" style="padding-top:8rem"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"is-style-olorien-round-edges"} -->
	<figure class="wp-block-image size-large is-style-olorien-round-edges"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/gallery-4.jpg" alt="' . esc_attr__( 'A woman meditating', 'bricksy' ) . '" /><figcaption>' . esc_html__( 'A woman meditating in an infinity pool overlooking a forest. Original public domain image from Wikimedia Commons', 'bricksy' ) . '</figcaption></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
);
