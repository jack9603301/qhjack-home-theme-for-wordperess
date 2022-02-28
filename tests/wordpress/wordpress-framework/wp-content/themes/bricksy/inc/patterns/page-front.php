<?php
/**
 * Front page block pattern
 */
return array(
	'title'	  => __( 'Front Page', 'bricksy' ),
	'categories' => array( 'bricksy-pages' ),
	'content'	=> '<!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( '/assets/images/cover-image.jpg' ) ) . '","hasParallax":true,"dimRatio":50,"minHeight":800,"isDark":false,"align":"full","className":"bricksy-general-hero"} -->
	<div class="wp-block-cover alignfull is-light has-parallax bricksy-general-hero" style="background-image:url(' . esc_url( get_theme_file_uri( '/assets/images/cover-image.jpg' ) ) . ');min-height:800px"><span aria-hidden="true" class="wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"textColor":"background","layout":{"inherit":false}} -->
	<div class="wp-block-group has-background-color has-text-color"><!-- wp:group {"layout":{"inherit":true}} -->
	<div class="wp-block-group"><!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">' . esc_html__( 'OUR SPECIAL TOURS', 'bricksy' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"gigantic"} -->
	<h1 class="has-text-align-center has-gigantic-font-size" id="adventures-lifestyle-1">' . esc_html__( 'Adventures &amp; Lifestyle', 'bricksy' ) . '</h1>
	<!-- /wp:heading -->
	
	<!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"padding":{"top":"40px","right":"20px","bottom":"0px","left":"20px"}}}} -->
	<div class="wp-block-column" style="padding-top:40px;padding-right:20px;padding-bottom:0px;padding-left:20px"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"custom","style":{"color":{"duotone":["#ffffff","#ffffff"]}}} -->
	<div class="wp-block-image"><figure class="aligncenter size-full"><a href="#"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/icon-1.png" alt="' . esc_attr__( 'Icon One', 'bricksy' ) . '" /></a></figure></div>
	<!-- /wp:image -->
	
	<!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
	<p class="has-text-align-center has-small-font-size" id="city" style="text-transform:uppercase">' . esc_html__( 'Tours', 'bricksy' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"style":{"spacing":{"padding":{"top":"40px","right":"20px","bottom":"0px","left":"20px"}}}} -->
	<div class="wp-block-column" style="padding-top:40px;padding-right:20px;padding-bottom:0px;padding-left:20px"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"custom","style":{"color":{"duotone":["#ffffff","#ffffff"]}}} -->
	<div class="wp-block-image"><figure class="aligncenter size-full"><a href="#"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/icon-2.png" alt="' . esc_attr__( 'Icon Two', 'bricksy' ) . '" /></a></figure></div>
	<!-- /wp:image -->
	
	<!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
	<p class="has-text-align-center has-small-font-size" id="city" style="text-transform:uppercase">' . esc_html__( 'Relax', 'bricksy' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"style":{"spacing":{"padding":{"top":"40px","right":"20px","bottom":"0px","left":"20px"}}}} -->
	<div class="wp-block-column" style="padding-top:40px;padding-right:20px;padding-bottom:0px;padding-left:20px"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"custom","style":{"color":{"duotone":["#ffffff","#ffffff"]}}} -->
	<div class="wp-block-image"><figure class="aligncenter size-full"><a href="#"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/icon-3.png" alt="' . esc_attr__( 'Icon One', 'bricksy' ) . '" /></a></figure></div>
	<!-- /wp:image -->
	
	<!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
	<p class="has-text-align-center has-small-font-size" id="city" style="text-transform:uppercase">' . esc_html__( 'City', 'bricksy' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"style":{"spacing":{"padding":{"top":"40px","right":"20px","bottom":"0px","left":"20px"}}}} -->
	<div class="wp-block-column" style="padding-top:40px;padding-right:20px;padding-bottom:0px;padding-left:20px"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"custom","style":{"color":{"duotone":["#ffffff","#ffffff"]}}} -->
	<div class="wp-block-image"><figure class="aligncenter size-full"><a href="#"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/icon-4.png" alt="' . esc_attr__( 'Icon One', 'bricksy' ) . '" /></a></figure></div>
	<!-- /wp:image -->
	
	<!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
	<p class="has-text-align-center has-small-font-size" id="city" style="text-transform:uppercase">' . esc_html__( 'Sea', 'bricksy' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:cover -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"3rem","right":"3rem","bottom":"0%","left":"3rem"}}},"className":"bricksy-general-two-column-text","layout":{"inherit":false,"contentSize":"1200px"}} -->
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
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0%","right":"3rem","bottom":"0%","left":"3rem"}}},"className":"bricksy-general-three-column-image"} -->
	<div class="wp-block-group alignfull bricksy-general-three-column-image" style="padding-top:0%;padding-right:3rem;padding-bottom:0%;padding-left:3rem"><!-- wp:columns {"align":"full"} -->
	<div class="wp-block-columns alignfull"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:spacer -->
	<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/gallery-1.jpg" alt="' . esc_attr__( 'Kinney Lake', 'bricksy' ) . '" /><figcaption>' . esc_html__( 'Kinney Lake, Canada. Original public domain image from Wikimedia Commons', 'bricksy' ) . '</figcaption></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/gallery-2.jpg" alt="' . esc_attr__( 'Emerald Spring', 'bricksy' ) . '" /><figcaption>' . esc_html__( 'Emerald Spring steams on a cold winter morning. Original public domain image from Flickr', 'bricksy' ) . '</figcaption></figure>
	<!-- /wp:image -->
	
	<!-- wp:paragraph {"align":"center","className":"handwritten-alternative","fontSize":"gigantic"} -->
	<p class="has-text-align-center handwritten-alternative has-gigantic-font-size">' . esc_html__( 'journey', 'bricksy' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:spacer -->
	<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/gallery-6.jpg" alt="' . esc_attr__( 'A pier', 'bricksy' ) . '" /><figcaption>' . esc_html__( 'A long wooden pier on a smooth lake. Original public domain image from Wikimedia Commons', 'bricksy' ) . '</figcaption></figure>
	<!-- /wp:image -->
	
	<!-- wp:spacer -->
	<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->

	<!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( '/assets/images/cover-image-1.jpg' ) ) . '","hasParallax":true,"dimRatio":50,"minHeight":800,"isDark":false,"align":"full","className":"bricksy-general-hero"} -->
	<div class="wp-block-cover alignfull is-light has-parallax bricksy-general-hero" style="background-image:url(' . esc_url( get_theme_file_uri( '/assets/images/cover-image-1.jpg' ) ) . ');min-height:800px"><span aria-hidden="true" class="wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"textColor":"background","layout":{"inherit":false}} -->
	<div class="wp-block-group has-background-color has-text-color"></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"layout":{"inherit":true}} -->
	<div class="wp-block-group"><!-- wp:group {"align":"wide","textColor":"background","layout":{"inherit":false}} -->
	<div class="wp-block-group alignwide has-background-color has-text-color"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":".9"}},"fontSize":"small"} -->
	<p class="has-text-align-center has-small-font-size" style="line-height:.9"><strong>' . esc_html__( 'GET IN TOUCH', 'bricksy' ) . '</strong></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":"1.15"}},"fontSize":"gigantic"} -->
	<h2 class="has-text-align-center has-gigantic-font-size" id="schedule-a-visit-1" style="line-height:1.15"><strong>' . esc_html__( 'Schedule a Visit', 'bricksy' ) . '</strong></h2>
	<!-- /wp:heading -->
	
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"width":50,"style":{"border":{"radius":"0px"}},"className":"is-style-outline"} -->
	<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link" style="border-radius:0px">' . esc_html__( 'CONTACT US', 'bricksy' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons -->
	
	<!-- wp:spacer {"height":64} -->
	<div style="height:64px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:cover -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"3rem","right":"3rem","bottom":"3rem","left":"3rem"}}},"className":"bricksy-general-two-column-text","layout":{"inherit":false,"contentSize":"1200px"}} -->
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
	<!-- /wp:group -->
	
	<!-- wp:media-text {"align":"full","mediaId":4335,"mediaLink":"' . esc_url( get_theme_file_uri( '/assets/images/gallery-3.jpg' ) ) . '","mediaType":"image","mediaWidth":42,"imageFill":true} -->
	<div class="wp-block-media-text alignfull is-stacked-on-mobile is-image-fill" style="grid-template-columns:42% auto"><figure class="wp-block-media-text__media" style="background-image:url(' . esc_url( get_theme_file_uri( '/assets/images/gallery-3.jpg' ) ) . ');background-position:50% 50%"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/gallery-3.jpg" alt="' . esc_attr__( 'Bird Watch', 'bricksy' ) . '" class="wp-image-4335 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group {"style":{"spacing":{"padding":{"top":"20%","right":"20%","bottom":"20%","left":"20%"}}}} -->
	<div class="wp-block-group" style="padding-top:20%;padding-right:20%;padding-bottom:20%;padding-left:20%"><!-- wp:paragraph -->
	<p>' . esc_html__( 'EXPAND YOUR SENSES', 'bricksy' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:heading -->
	<h2 id="wide-open-spaces">' . esc_html__( 'Enjoy Bird Watch…', 'bricksy' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph -->
	<p>' . esc_html__( 'The word nature is borrowed from the Old French nature and is derived from the Latin word natura, or essential qualities, innate disposition, and in ancient times, literally meant birth. The word nature is borrowed from the Old French nature and is derived from the Latin word natura, or essential qualities, innate disposition, and in ancient times, literally meant birth.', 'bricksy' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline","fontSize":"normal"} -->
	<div class="wp-block-button has-custom-font-size is-style-outline has-normal-font-size"><a class="wp-block-button__link">' . esc_html__( 'BOOK NOW', 'bricksy' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:media-text -->
	<!-- wp:media-text {"align":"full","mediaPosition":"right","mediaId":4335,"mediaLink":"' . esc_url( get_theme_file_uri( '/assets/images/gallery-4.jpg' ) ) . '","mediaType":"image","mediaWidth":42,"imageFill":true} -->
	<div class="wp-block-media-text alignfull has-media-on-the-right is-stacked-on-mobile is-image-fill" style="grid-template-columns:auto 42%"><figure class="wp-block-media-text__media" style="background-image:url(' . esc_url( get_theme_file_uri( '/assets/images/gallery-4.jpg' ) ) . ');background-position:50% 50%"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/gallery-4.jpg" alt="' . esc_attr__( 'Pure Nature', 'bricksy' ) . '" class="wp-image-4335 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group {"style":{"spacing":{"padding":{"top":"20%","right":"20%","bottom":"20%","left":"20%"}}}} -->
	<div class="wp-block-group" style="padding-top:20%;padding-right:20%;padding-bottom:20%;padding-left:20%"><!-- wp:paragraph -->
	<p>' . esc_html__( 'TAKE A MOMENT', 'bricksy' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:heading -->
	<h2 id="wide-open-spaces">' . esc_html__( 'Pure Nature & You…', 'bricksy' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph -->
	<p>' . esc_html__( 'The word nature is borrowed from the Old French nature and is derived from the Latin word natura, or essential qualities, innate disposition, and in ancient times, literally meant birth. The word nature is borrowed from the Old French nature and is derived from the Latin word natura, or essential qualities, innate disposition, and in ancient times, literally meant birth.', 'bricksy' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline","fontSize":"normal"} -->
	<div class="wp-block-button has-custom-font-size is-style-outline has-normal-font-size"><a class="wp-block-button__link">' . esc_html__( 'BOOK NOW', 'bricksy' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:media-text -->
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"5rem"}}},"layout":{"inherit":true}} -->
	<div class="wp-block-group alignwide" style="padding-bottom:5rem"><!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"color":{"background":"#a7c6d8"},"elements":{"link":{"color":{"text":"#000000"}}},"spacing":{"padding":{"top":"2em","right":"2em","bottom":"2em","left":"2em"}}}} -->
	<div class="wp-block-column has-background has-link-color" style="background-color:#a7c6d8;padding-top:2em;padding-right:2em;padding-bottom:2em;padding-left:2em"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"40px"}}} -->
	<h2 class="has-text-align-center" id="single-1" style="font-size:40px">' . esc_html__( 'Single', 'bricksy' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}},"fontSize":"normal"} -->
	<p class="has-text-align-center has-normal-font-size" style="line-height:1.5"><strong>' . esc_html__( 'Enrich our growing community.', 'bricksy' ) . '</strong> </p>
	<!-- /wp:paragraph -->
	
	<!-- wp:separator {"customColor":"#000000","className":"is-style-wide"} -->
	<hr class="wp-block-separator has-text-color has-background is-style-wide" style="background-color:#000000;color:#000000"/>
	<!-- /wp:separator -->
	
	<!-- wp:list {"fontSize":"normal"} -->
	<ul class="has-normal-font-size"><li>' . esc_html__( 'General admission and member discounts for one adult', 'bricksy' ) . '</li><li>' . esc_html__( 'One free ticket per special exhibition', 'bricksy' ) . '</li><li>' . esc_html__( 'Two single-use guest passes per year', 'bricksy' ) . '</li></ul>
	<!-- /wp:list -->
	
	<!-- wp:buttons {"align":"full","layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
	<div class="wp-block-buttons alignfull"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
	<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link">' . esc_html__( '$110 / YEAR', 'bricksy' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"style":{"color":{"background":"#a7d5d2","text":"#000000"},"elements":{"link":{"color":{"text":"#000000"}}},"spacing":{"padding":{"top":"2em","right":"2em","bottom":"4em","left":"2em"}}}} -->
	<div class="wp-block-column has-text-color has-background has-link-color" style="background-color:#a7d5d2;color:#000000;padding-top:2em;padding-right:2em;padding-bottom:4em;padding-left:2em"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"40px"}}} -->
	<h2 class="has-text-align-center" id="family-1" style="font-size:40px">' . esc_html__( 'Family', 'bricksy' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}},"fontSize":"normal"} -->
	<p class="has-text-align-center has-normal-font-size" style="line-height:1.5"><strong>' . esc_html__( 'Support special exhibitions.', 'bricksy' ) . '</strong></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:separator {"className":"is-style-wide"} -->
	<hr class="wp-block-separator is-style-wide"/>
	<!-- /wp:separator -->
	
	<!-- wp:list {"fontSize":"normal"} -->
	<ul class="has-normal-font-size"><li>' . esc_html__( 'General admission and member discounts for two adult', 'bricksy' ) . '</li><li>' . esc_html__( 'Four free ticket per special exhibition', 'bricksy' ) . '</li><li>' . esc_html__( 'Four single-use guest passes per year', 'bricksy' ) . '</li></ul>
	<!-- /wp:list -->
	
	<!-- wp:buttons {"align":"full","layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
	<div class="wp-block-buttons alignfull"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
	<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link">' . esc_html__( '$200 / YEAR', 'bricksy' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"style":{"color":{"text":"#000000","background":"#c3d9e7"},"elements":{"link":{"color":{"text":"#000000"}}},"spacing":{"padding":{"top":"2em","right":"2em","bottom":"2em","left":"2em"}}}} -->
	<div class="wp-block-column has-text-color has-background has-link-color" style="background-color:#c3d9e7;color:#000000;padding-top:2em;padding-right:2em;padding-bottom:2em;padding-left:2em"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"40px"}}} -->
	<h2 class="has-text-align-center" id="patron-1" style="font-size:40px">' . esc_html__( 'Patron', 'bricksy' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"center","fontSize":"normal"} -->
	<p class="has-text-align-center has-normal-font-size"><strong>' . esc_html__( 'Take support to the next level.', 'bricksy' ) . '</strong></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:separator {"className":"is-style-wide"} -->
	<hr class="wp-block-separator is-style-wide"/>
	<!-- /wp:separator -->
	
	<!-- wp:list {"fontSize":"normal"} -->
	<ul class="has-normal-font-size"><li>' . esc_html__( 'General admission and member discounts for two adult', 'bricksy' ) . '</li><li>' . esc_html__( 'Five free ticket per special exhibition', 'bricksy' ) . '</li><li>' . esc_html__( 'Five single-use guest passes per year', 'bricksy' ) . '</li></ul>
	<!-- /wp:list -->
	
	<!-- wp:buttons {"align":"full","layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
	<div class="wp-block-buttons alignfull"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
	<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link">' . esc_html__( '$400 / YEAR', 'bricksy' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"8rem","bottom":"8rem","left":"0px","right":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"cyan-bluish-gray","textColor":"foreground","className":"bricksy-general-color-me-in"} -->
	<div class="wp-block-group alignfull bricksy-general-color-me-in has-foreground-color has-cyan-bluish-gray-background-color has-text-color has-background has-link-color" style="padding-top:8rem;padding-right:0px;padding-bottom:8rem;padding-left:0px"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"left":"max(1.25rem, 5vw)","right":"max(1.25rem, 5vw)"}}},"layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull" style="padding-right:max(1.25rem, 5vw);padding-left:max(1.25rem, 5vw)"><!-- wp:spacer {"height":32} -->
	<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:heading -->
	<h2 id="watch-birdsfrom-your-inbox-1">' . esc_html__( 'Go on an adventure', 'bricksy' ) . '<br>' . esc_html__( 'from your inbox', 'bricksy' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline","fontSize":"normal"} -->
	<div class="wp-block-button has-custom-font-size is-style-outline has-normal-font-size"><a class="wp-block-button__link">' . esc_html__( 'JOIN OUR MAILING LIST', 'bricksy' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem"}}}} -->
	<div class="wp-block-column is-vertically-aligned-center" style="padding-top:2rem;padding-bottom:2rem"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none"} -->
	<div class="wp-block-image"><figure class="aligncenter size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/globe.png" alt="' . esc_attr__( 'Globe', 'bricksy' ) . '" /></figure></div>
	<!-- /wp:image --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:group {"align":"wide"} -->
	<div class="wp-block-group alignwide"></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->',
);
