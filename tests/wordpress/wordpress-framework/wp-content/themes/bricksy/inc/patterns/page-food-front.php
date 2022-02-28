<?php
/**
 * Front page block pattern
 */
return array(
	'title'	  => __( 'Front Page', 'bricksy' ),
	'categories' => array( 'bricksy-pages-food' ),
	'content'	=> '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0%"}}},"layout":{"inherit":true}} -->
	<div class="wp-block-group alignwide" style="padding-top:0%"><!-- wp:columns {"align":"wide","className":"is-style-default"} -->
	<div class="wp-block-columns alignwide is-style-default"><!-- wp:column {"style":{"spacing":{"padding":{"top":"0rem","right":"0rem","bottom":"0rem","left":"0rem"}}},"backgroundColor":"white"} -->
	<div class="wp-block-column has-white-background-color has-background" style="padding-top:0rem;padding-right:0rem;padding-bottom:0rem;padding-left:0rem"><!-- wp:group {"align":"full"} -->
	<div class="wp-block-group alignfull"><!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( '/assets/images/food-1.jpg' ) ) . '","dimRatio":70,"minHeight":700,"style":{"color":{}}} -->
	<div class="wp-block-cover" style="min-height:700px"><span aria-hidden="true" class="has-background-dim-70 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background" alt="' . esc_attr__( 'Food One', 'bricksy' ) . '" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/food-1.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","style":{"typography":{"textTransform":"capitalize"}},"textColor":"background","fontSize":"large"} -->
	<h2 class="has-text-align-center has-background-color has-text-color has-large-font-size" id="travel" style="text-transform:capitalize">' . esc_html__( 'Dessert', 'bricksy' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"align":"center","style":{"typography":{"fontSize":"14px"}},"className":"is-style-outline"} -->
	<div class="wp-block-button aligncenter has-custom-font-size is-style-outline" style="font-size:14px"><a class="wp-block-button__link">' . esc_html__( 'RECIPES', 'bricksy' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div></div>
	<!-- /wp:cover --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"style":{"spacing":{"padding":{"top":"0rem","right":"0rem","bottom":"0rem","left":"0rem"}}},"backgroundColor":"white"} -->
	<div class="wp-block-column has-white-background-color has-background" style="padding-top:0rem;padding-right:0rem;padding-bottom:0rem;padding-left:0rem"><!-- wp:group {"align":"full"} -->
	<div class="wp-block-group alignfull"><!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( '/assets/images/food-2.jpg' ) ) . '","dimRatio":70,"minHeight":700} -->
	<div class="wp-block-cover" style="min-height:700px"><span aria-hidden="true" class="has-background-dim-70 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background" alt="' . esc_attr__( 'Food Two', 'bricksy' ) . '" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/food-2.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","style":{"typography":{"textTransform":"capitalize"}},"textColor":"background","fontSize":"large"} -->
	<h2 class="has-text-align-center has-background-color has-text-color has-large-font-size" id="travel" style="text-transform:capitalize">' . esc_html__( 'Lunch', 'bricksy' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"align":"center","style":{"typography":{"fontSize":"14px"}},"className":"is-style-outline"} -->
	<div class="wp-block-button aligncenter has-custom-font-size is-style-outline" style="font-size:14px"><a class="wp-block-button__link">' . esc_html__( 'RECIPES', 'bricksy' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div></div>
	<!-- /wp:cover --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"style":{"spacing":{"padding":{"top":"0rem","right":"0rem","bottom":"0rem","left":"0rem"}}},"backgroundColor":"white"} -->
	<div class="wp-block-column has-white-background-color has-background" style="padding-top:0rem;padding-right:0rem;padding-bottom:0rem;padding-left:0rem"><!-- wp:group {"align":"full"} -->
	<div class="wp-block-group alignfull"><!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( '/assets/images/food-3.jpg' ) ) . '","dimRatio":70,"minHeight":700} -->
	<div class="wp-block-cover" style="min-height:700px"><span aria-hidden="true" class="has-background-dim-70 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background" alt="' . esc_attr__( 'Food Three', 'bricksy' ) . '" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/food-3.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","textColor":"background","fontSize":"large"} -->
	<h2 class="has-text-align-center has-background-color has-text-color has-large-font-size" id="travel">' . esc_html__( 'Breakfast', 'bricksy' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"align":"center","style":{"typography":{"fontSize":"14px"}},"className":"is-style-outline"} -->
	<div class="wp-block-button aligncenter has-custom-font-size is-style-outline" style="font-size:14px"><a class="wp-block-button__link">' . esc_html__( 'RECIPES', 'bricksy' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div></div>
	<!-- /wp:cover --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"40px"}}},"layout":{"inherit":true}} -->
	<div class="wp-block-group alignwide" style="padding-bottom:40px"><!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"color":{"background":"#bedccb"}}} -->
	<div class="wp-block-column has-background" style="background-color:#bedccb"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0px"}},"className":"is-style-default"} -->
	<div class="wp-block-image is-style-default" style="border-radius:0px"><figure class="aligncenter size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/food-1.jpg" alt="' . esc_attr__( 'Plant-based', 'bricksy' ) . '" /></figure></div>
	<!-- /wp:image -->
	
	<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"medium"} -->
	<h3 class="has-text-align-center has-medium-font-size" id="cook-book">' . esc_html__( 'Cook Book', 'bricksy' ) . '</h3>
	<!-- /wp:heading --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"style":{"color":{"background":"#bedccb"}}} -->
	<div class="wp-block-column has-background" style="background-color:#bedccb"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0px"}},"className":"is-style-default"} -->
	<div class="wp-block-image is-style-default" style="border-radius:0px"><figure class="aligncenter size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/food-2.jpg" alt="' . esc_attr__( 'Plant-based', 'bricksy' ) . '" /></figure></div>
	<!-- /wp:image -->
	
	<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"medium"} -->
	<h3 class="has-text-align-center has-medium-font-size" id="instagram">' . esc_html__( 'Instagram', 'bricksy' ) . '</h3>
	<!-- /wp:heading --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"style":{"color":{"background":"#bedccb"}}} -->
	<div class="wp-block-column has-background" style="background-color:#bedccb"><!-- wp:image {"align":"center","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"0px"}},"className":"is-style-default"} -->
	<div class="wp-block-image is-style-default" style="border-radius:0px"><figure class="aligncenter size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/food-3.jpg" alt="' . esc_attr__( 'Plant-based', 'bricksy' ) . '" /></figure></div>
	<!-- /wp:image -->
	
	<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"medium"} -->
	<h3 class="has-text-align-center has-medium-font-size" id="cook-book">' . esc_html__( 'About Me', 'bricksy' ) . '</h3>
	<!-- /wp:heading --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:separator {"className":"is-style-dots"} -->
	<hr class="wp-block-separator is-style-dots"/>
	<!-- /wp:separator --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"wide","layout":{"inherit":true}} -->
	<div class="wp-block-group alignwide"><!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
	<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
	<div class="wp-block-query"><!-- wp:post-template -->
	<!-- wp:post-featured-image {"isLink":true,"align":"wide"} /-->
	
	<!-- wp:post-date {"textAlign":"center","format":"F j, Y","style":{"typography":{"textTransform":"uppercase","letterSpacing":"2px","fontStyle":"normal","fontWeight":"400","fontSize":"12px"}}} /-->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"3rem"}}}} -->
	<div class="wp-block-group" style="padding-bottom:3rem">
	<!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"fontSize":"huge"} /-->
	
	<!-- wp:post-excerpt /--></div>
	<!-- /wp:group -->
	<!-- /wp:post-template --></div>
	<!-- /wp:query --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"33.33%"} -->
	<div class="wp-block-column" style="flex-basis:33.33%">
	
	<!-- wp:group {"style":{"color":{"background":"#bedccb"}}} -->
	<div class="wp-block-group has-background" style="background-color:#bedccb"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
	<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/food-about.jpg" alt="' . esc_attr__( 'About Me', 'bricksy' ) . '" /></figure></div>
	<!-- /wp:image -->
	
	<!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"lineHeight":"1"}}} -->
	<h4 class="has-text-align-center" id="about-me" style="line-height:1">' . esc_html__( 'About Me', 'bricksy' ) . '</h4>
	<!-- /wp:heading -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"20px","bottom":"0px","left":"20px"}}}} -->
	<div class="wp-block-group" style="padding-top:0px;padding-right:20px;padding-bottom:0px;padding-left:20px"><!-- wp:paragraph {"align":"center","fontSize":"small"} -->
	<p class="has-text-align-center has-small-font-size">' . esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris purus urna.', 'bricksy' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group -->
	
	<!-- wp:paragraph {"align":"center","className":"handwritten","fontSize":"huge"} -->
	<p class="has-text-align-center handwritten has-huge-font-size">' . esc_html__( 'Lala Smyth', 'bricksy' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"3rem","bottom":"3rem"}}}} -->
	<div class="wp-block-group alignwide" style="padding-top:3rem;padding-bottom:3rem">
	<!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"lineHeight":"0"}}} -->
	<h4 class="has-text-align-center" id="about-me" style="line-height:0">' . esc_html__( 'Follow Me', 'bricksy' ) . '</h4>
	<!-- /wp:heading -->
	
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0rem","right":"0rem","bottom":"0rem","left":"0rem"}}},"className":"is-style-default bricksy-team-additional","layout":{"inherit":false,"contentSize":"1200px"}} -->
	<div class="wp-block-group alignwide is-style-default bricksy-team-additional" style="padding-top:0rem;padding-right:0rem;padding-bottom:0rem;padding-left:0rem"><!-- wp:social-links {"customIconColor":"#ffffff","iconColorValue":"#ffffff","iconBackgroundColor":"main-blue","iconBackgroundColorValue":"#172144","className":"is-style-default","layout":{"type":"flex","justifyContent":"center"}} -->
	<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default"><!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->
	
	<!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->
	
	<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->
	
	<!-- wp:social-link {"url":"https://wordpress.org","service":"wordpress"} /--></ul>
	<!-- /wp:social-links --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"8rem","right":"2rem","bottom":"8rem","left":"2rem"}}},"className":"bricksy-general-color-me-in","layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull bricksy-general-color-me-in" style="padding-top:8rem;padding-right:2rem;padding-bottom:8rem;padding-left:2rem"><!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><strong>' . esc_html__( 'GET IN TOUCH', 'bricksy' ) . '</strong></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:heading {"textAlign":"center","level":4} -->
	<h4 class="has-text-align-center" id="subscribe-to-our">' . esc_html__( 'Subscribe to our', 'bricksy' ) . '</h4>
	<!-- /wp:heading -->
	
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"width":75,"style":{"border":{"radius":"0px"}},"className":"is-style-outline"} -->
	<div class="wp-block-button has-custom-width wp-block-button__width-75 is-style-outline"><a class="wp-block-button__link" style="border-radius:0px">' . esc_html__( 'NEWSLETTER', 'bricksy' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"wide"} -->
	<div class="wp-block-group alignwide"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"3rem","bottom":"3rem"}}}} -->
	<div class="wp-block-group alignwide" style="padding-top:3rem;padding-bottom:3rem"><!-- wp:image {"align":"wide","sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image alignwide size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/food-1.jpg" alt="' . esc_attr__( 'Plant-based', 'bricksy' ) . '" /></figure>
	<!-- /wp:image -->
	
	<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"2"}}} -->
	<p style="line-height:2"><strong>' . esc_html__( 'Location:', 'bricksy' ) . '</strong><br>' . esc_html__( '82 Main St. Brooklyn, NY', 'bricksy' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"2"}}} -->
	<p style="line-height:2"><strong>' . esc_html__( 'Date:', 'bricksy' ) . '</strong><br>' . esc_html__( 'October 24, 2021', 'bricksy' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
	<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link">' . esc_html__( 'Buy Tickets', 'bricksy' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->
	
	<!-- wp:separator {"className":"is-style-default"} -->
	<hr class="wp-block-separator is-style-default"/>
	<!-- /wp:separator -->
	
	<!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"lineHeight":"0"}}} -->
	<h4 class="has-text-align-center" id="latest-posts" style="line-height:0">' . esc_html__( 'Latest Posts', 'bricksy' ) . '</h4>
	<!-- /wp:heading -->
	
	<!-- wp:group -->
	<div class="wp-block-group"><!-- wp:gallery {"linkTo":"none"} -->
	<figure class="wp-block-gallery has-nested-images columns-default is-cropped"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/food-1.jpg" alt="' . esc_attr__( 'Vegan Food', 'bricksy' ) . '" /></figure>
	<!-- /wp:image -->
	
	<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/food-2.jpg" alt="' . esc_attr__( 'Vegan Food', 'bricksy' ) . '" /></figure>
	<!-- /wp:image -->
	
	<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/food-3.jpg" alt="' . esc_attr__( 'Vegan Food', 'bricksy' ) . '" /></figure>
	<!-- /wp:image --></figure>
	<!-- /wp:gallery --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"style":{"color":{"background":"#bedccb"},"spacing":{"padding":{"bottom":"40px","top":"40px"}}}} -->
	<div class="wp-block-group has-background" style="background-color:#bedccb;padding-top:40px;padding-bottom:40px"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
	<div class="wp-block-image is-style-default"><figure class="aligncenter size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/food-3.jpg" alt="' . esc_attr__( 'Vegan Food', 'bricksy' ) . '" /></figure></div>
	<!-- /wp:image -->
	
	<!-- wp:heading {"textAlign":"center","level":4} -->
	<h4 class="has-text-align-center" id="cook-book-1">' . esc_html__( 'Cook Book', 'bricksy' ) . '</h4>
	<!-- /wp:heading -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"20px","bottom":"0px","left":"20px"}}}} -->
	<div class="wp-block-group" style="padding-top:0px;padding-right:20px;padding-bottom:0px;padding-left:20px"><!-- wp:paragraph {"align":"center","fontSize":"small"} -->
	<p class="has-text-align-center has-small-font-size">' . esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris purus urna.', 'bricksy' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"align":"center","className":"is-style-outline","fontSize":"small"} -->
	<div class="wp-block-button aligncenter has-custom-font-size is-style-outline has-small-font-size"><a class="wp-block-button__link">' . esc_html__( 'GET IT NOW', 'bricksy' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->
	
	<!-- wp:gallery {"columns":8,"linkTo":"none","align":"full"} -->
	<figure class="wp-block-gallery alignfull has-nested-images columns-8 is-cropped"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/food-3.jpg" alt="' . esc_attr__( 'Vegan Food', 'bricksy' ) . '" /></figure>
	<!-- /wp:image -->
	
	<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/food-2.jpg" alt="' . esc_attr__( 'Vegan Food', 'bricksy' ) . '" /></figure>
	<!-- /wp:image -->
	
	<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/food-1.jpg" alt="' . esc_attr__( 'Vegan Food', 'bricksy' ) . '" /></figure>
	<!-- /wp:image -->
	
	<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/food-4.jpg" alt="' . esc_attr__( 'Vegan Food', 'bricksy' ) . '" /></figure>
	<!-- /wp:image -->
	
	<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/food-5.jpg" alt="' . esc_attr__( 'Vegan Food', 'bricksy' ) . '" /></figure>
	<!-- /wp:image -->
	
	<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/food-6.jpg" alt="' . esc_attr__( 'Vegan Food', 'bricksy' ) . '" /></figure>
	<!-- /wp:image -->
	
	<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/food-7.jpg" alt="' . esc_attr__( 'Vegan Food', 'bricksy' ) . '" /></figure>
	<!-- /wp:image -->
	
	<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/food-8.jpg" alt="' . esc_attr__( 'Vegan Food', 'bricksy' ) . '" /></figure>
	<!-- /wp:image --></figure>
	<!-- /wp:gallery -->',
);
