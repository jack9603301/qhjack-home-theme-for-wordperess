<?php
/**
 * Front page block pattern
 */
return array(
	'title'	  => __( 'Front Page', 'bricksy' ),
	'categories' => array( 'bricksy-pages-fashion' ),
	'content'	=> '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"2rem","top":"2rem"}}}} -->
	<div class="wp-block-group alignwide" style="padding-top:2rem;padding-bottom:2rem"><!-- wp:site-logo {"width":128,"align":"center"} /-->
	
	<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"center"},"fontFamily":"inconsolata"} /--></div>
	<!-- /wp:group -->
		
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"40px"}}},"layout":{"inherit":true}} -->
	<div class="wp-block-group alignwide" style="padding-bottom:40px"><!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( '/assets/images/wedding-hero.jpg' ) ) . '","dimRatio":50,"minHeight":600,"align":"wide","className":"bricksy-fashion cover","style":{"color":{"duotone":["#000000","#ffffff"]},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
	<div class="wp-block-cover alignwide bricksy-fashion cover" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:600px"><span aria-hidden="true" class="wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background" alt="' . esc_attr__( 'Fashion', 'bricksy' ) . '" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/wedding-hero.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"textTransform":"uppercase"}}} -->
	<h1 class="has-text-align-center" id="fashion-style" style="text-transform:uppercase">' . esc_html__( 'Fashion &amp; Style', 'bricksy' ) . '</h1>
	<!-- /wp:heading -->
		
	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.425rem"}},"className":"has-inconsolata-font-family"} -->
	<p class="has-text-align-center has-inconsolata-font-family" style="font-size:1.425rem">' . esc_html__( 'Fashion Blog - Lifestyle and Fashion Stories', 'bricksy' ) . '</p>
	<!-- /wp:paragraph -->
		
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"textColor":"foreground","style":{"color":{"background":"#fee85d"}},"fontFamily":"inconsolata"} -->
	<div class="wp-block-button has-inconsolata-font-family"><a class="wp-block-button__link has-foreground-color has-text-color has-background" style="background-color:#fee85d">' . esc_html__( 'EXPLORE MORE', 'bricksy' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div></div>
	<!-- /wp:cover --></div>
	<!-- /wp:group -->
		
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0%","right":"0rem","bottom":"0%","left":"0rem"}}},"className":"bricksy-general-three-column-image bricksy-fashion bricksy-grid","layout":{"inherit":true}} -->
	<div class="wp-block-group alignwide bricksy-general-three-column-image bricksy-fashion bricksy-grid" style="padding-top:0%;padding-right:0rem;padding-bottom:0%;padding-left:0rem"><!-- wp:columns {"align":"full","style":{"spacing":{"padding":{"right":"0rem","left":"0rem"}}}} -->
	<div class="wp-block-columns alignfull" style="padding-right:0rem;padding-left:0rem"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:spacer -->
	<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
		
	<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#000000","#ffffff"]}}} -->
	<figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/people-2.jpg" alt="' . esc_attr__( 'Man Fashion', 'bricksy' ) . '" /></figure>
	<!-- /wp:image -->
		
	<!-- wp:group {"style":{"border":{"width":"2px","style":"solid"},"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}}} -->
	<div class="wp-block-group" style="border-style:solid;border-width:2px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
	<h2 class="has-medium-font-size" id="winter-look" style="text-transform:uppercase">' . esc_html__( 'Winter Look', 'bricksy' ) . '</h2>
	<!-- /wp:heading -->
		
	<!-- wp:separator {"className":"is-style-wide"} -->
	<hr class="wp-block-separator is-style-wide"/>
	<!-- /wp:separator -->
		
	<!-- wp:paragraph {"className":"has-inconsolata-font-family"} -->
	<p class="has-inconsolata-font-family">' . esc_html__( 'Malesuada nibh montes fusce cum eleifend fringilla commodo mattis tempor platea montes. Commodo metus adipiscing odio.', 'bricksy' ) . '</p>
		<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
		
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#000000","#ffffff"]}}} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/wedding-3.jpg" alt="' . esc_attr__( 'Wedding Fashion', 'bricksy' ) . '" /></figure>
	<!-- /wp:image -->
		
	<!-- wp:group {"style":{"border":{"width":"2px","style":"solid"},"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}}} -->
	<div class="wp-block-group" style="border-style:solid;border-width:2px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
	<h2 class="has-medium-font-size" id="wedding-day" style="text-transform:uppercase">' . esc_html__( 'Wedding Day', 'bricksy' ) . '</h2>
	<!-- /wp:heading -->
		
	<!-- wp:separator {"className":"is-style-wide"} -->
	<hr class="wp-block-separator is-style-wide"/>
	<!-- /wp:separator -->
		
	<!-- wp:paragraph {"className":"has-inconsolata-font-family"} -->
	<p class="has-inconsolata-font-family">' . esc_html__( 'Malesuada nibh montes fusce cum eleifend fringilla commodo mattis tempor platea montes. Commodo metus adipiscing odio.', 'bricksy' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
		
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:spacer -->
	<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
		
	<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#000000","#ffffff"]}}} -->
	<figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/people-3.jpg" alt="' . esc_attr__( 'Man Fashion', 'bricksy' ) . '" /></figure>
	<!-- /wp:image -->
		
	<!-- wp:group {"style":{"border":{"width":"2px","style":"solid"},"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}}} -->
	<div class="wp-block-group" style="border-style:solid;border-width:2px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
	<h2 class="has-medium-font-size" id="wedding-day" style="text-transform:uppercase">' . esc_html__( 'Nature Fashion', 'bricksy' ) . '</h2>
	<!-- /wp:heading -->
		
	<!-- wp:separator {"className":"is-style-wide"} -->
	<hr class="wp-block-separator is-style-wide"/>
	<!-- /wp:separator -->
		
	<!-- wp:paragraph {"className":"has-inconsolata-font-family"} -->
	<p class="has-inconsolata-font-family">' . esc_html__( 'Malesuada nibh montes fusce cum eleifend fringilla commodo mattis tempor platea montes. Commodo metus adipiscing odio.', 'bricksy' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group -->
		
	<!-- wp:spacer -->
	<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->
		
	<!-- wp:group {"align":"wide","style":{"color":{"background":"#fee85d"},"spacing":{"padding":{"bottom":"0rem"}}},"className":"bricksy-fashion","layout":{"inherit":true}} -->
	<div class="wp-block-group alignwide bricksy-fashion has-background" style="background-color:#fee85d;padding-bottom:0rem"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"8rem","right":"2rem","bottom":"8rem","left":"2rem"}}},"backgroundColor":"beidge","className":"bricksy-general","layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull bricksy-general has-beidge-background-color has-background" style="padding-top:8rem;padding-right:2rem;padding-bottom:8rem;padding-left:2rem"><!-- wp:heading {"textAlign":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"huge"} -->
	<h2 class="has-text-align-center has-huge-font-size" id="schedule-a-visit" style="text-transform:uppercase">' . esc_html__( 'Fashion Book', 'bricksy' ) . '</h2>
	<!-- /wp:heading -->
		
	<!-- wp:paragraph {"align":"center","className":"has-inconsolata-font-family"} -->
	<p class="has-text-align-center has-inconsolata-font-family">' . esc_html__( 'Malesuada nibh montes fusce cum eleifend fringilla commodo mattis tempor platea montes. Commodo metus adipiscing odio.', 'bricksy' ) . '</p>
	<!-- /wp:paragraph -->
		
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"width":50,"style":{"border":{"radius":"0px"},"typography":{"fontSize":"1.325rem"}},"className":"is-style-outline","fontFamily":"inconsolata"} -->
	<div class="wp-block-button has-custom-width wp-block-button__width-50 has-custom-font-size is-style-outline has-inconsolata-font-family" style="font-size:1.325rem"><a class="wp-block-button__link" style="border-radius:0px">' . esc_html__( 'ORDER NOW', 'bricksy' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->
		
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"3rem"}}},"className":"bricksy-fashion bricksy-grid","layout":{"inherit":true}} -->
	<div class="wp-block-group alignwide bricksy-fashion bricksy-grid" style="padding-top:3rem"><!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
	<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0%","right":"0rem","bottom":"0%","left":"0rem"}}},"className":"bricksy-general-three-column-image bricksy-fashion","layout":{"inherit":true}} -->
	<div class="wp-block-group alignwide bricksy-general-three-column-image bricksy-fashion" style="padding-top:0%;padding-right:0rem;padding-bottom:0%;padding-left:0rem"><!-- wp:columns {"align":"full"} -->
	<div class="wp-block-columns alignfull"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"3rem"}}}} -->
	<div class="wp-block-group" style="padding-bottom:3rem"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#000000","#ffffff"]}}} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/wedding-2.jpg" alt="' . esc_attr__( 'Flowers', 'bricksy' ) . '" /></figure>
	<!-- /wp:image -->
		
	<!-- wp:group {"style":{"border":{"width":"2px","style":"solid"},"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}}} -->
	<div class="wp-block-group" style="border-style:solid;border-width:2px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
	<h2 class="has-medium-font-size" id="winter-look" style="text-transform:uppercase">' . esc_html__( 'Winter Look', 'bricksy' ) . '</h2>
	<!-- /wp:heading -->
		
	<!-- wp:separator {"className":"is-style-wide"} -->
	<hr class="wp-block-separator is-style-wide"/>
	<!-- /wp:separator -->
		
	<!-- wp:paragraph {"className":"has-inconsolata-font-family"} -->
	<p class="has-inconsolata-font-family">' . esc_html__( 'Malesuada nibh montes fusce cum eleifend fringilla commodo mattis tempor platea montes. Commodo metus adipiscing odio.', 'bricksy' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->
		
	<!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#000000","#ffffff"]}}} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/wedding-4.jpg" alt="' . esc_attr__( 'Man Fashion', 'bricksy' ) . '" /></figure>
	<!-- /wp:image -->
		
	<!-- wp:group {"style":{"border":{"width":"2px","style":"solid"},"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}}} -->
	<div class="wp-block-group" style="border-style:solid;border-width:2px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
	<h2 class="has-medium-font-size" id="winter-look" style="text-transform:uppercase">' . esc_html__( 'Bride Fashion', 'bricksy' ) . '</h2>
	<!-- /wp:heading -->
		
	<!-- wp:separator {"className":"is-style-wide"} -->
	<hr class="wp-block-separator is-style-wide"/>
	<!-- /wp:separator -->
		
	<!-- wp:paragraph {"className":"has-inconsolata-font-family"} -->
	<p class="has-inconsolata-font-family">' . esc_html__( 'Malesuada nibh montes fusce cum eleifend fringilla commodo mattis tempor platea montes. Commodo metus adipiscing odio.', 'bricksy' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
		
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"3rem"}}}} -->
	<div class="wp-block-group" style="padding-bottom:3rem"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#000000","#ffffff"]}}} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/wedding-hero.jpg" alt="' . esc_attr__( 'Man Fashion', 'bricksy' ) . '" /></figure>
	<!-- /wp:image -->
		
	<!-- wp:group {"style":{"border":{"width":"2px","style":"solid"},"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}}} -->
	<div class="wp-block-group" style="border-style:solid;border-width:2px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
	<h2 class="has-medium-font-size" id="wedding-day" style="text-transform:uppercase">' . esc_html__( 'Wedding Day', 'bricksy' ) . '</h2>
	<!-- /wp:heading -->
		
	<!-- wp:separator {"className":"is-style-wide"} -->
	<hr class="wp-block-separator is-style-wide"/>
	<!-- /wp:separator -->
		
	<!-- wp:paragraph {"className":"has-inconsolata-font-family"} -->
	<p class="has-inconsolata-font-family">' . esc_html__( 'Malesuada nibh montes fusce cum eleifend fringilla commodo mattis tempor platea montes. Commodo metus adipiscing odio.', 'bricksy' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->
		
	<!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#000000","#ffffff"]}}} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/wedding-3.jpg" alt="' . esc_attr__( 'Man Fashion', 'bricksy' ) . '" /></figure>
	<!-- /wp:image -->
		
	<!-- wp:group {"style":{"border":{"width":"2px","style":"solid"},"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}}} -->
	<div class="wp-block-group" style="border-style:solid;border-width:2px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
	<h2 class="has-medium-font-size" id="winter-look" style="text-transform:uppercase">' . esc_html__( 'Wedding Fashion', 'bricksy' ) . '</h2>
	<!-- /wp:heading -->
		
	<!-- wp:separator {"className":"is-style-wide"} -->
	<hr class="wp-block-separator is-style-wide"/>
	<!-- /wp:separator -->
		
	<!-- wp:paragraph {"className":"has-inconsolata-font-family"} -->
	<p class="has-inconsolata-font-family">' . esc_html__( 'Malesuada nibh montes fusce cum eleifend fringilla commodo mattis tempor platea montes. Commodo metus adipiscing odio.', 'bricksy' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->
		
	<!-- wp:group {"style":{"color":{"background":"#fee85d"}}} -->
	<div class="wp-block-group has-background" style="background-color:#fee85d"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"8rem","right":"2rem","bottom":"8rem","left":"2rem"}}},"backgroundColor":"beidge","className":"bricksy-general","layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull bricksy-general has-beidge-background-color has-background" style="padding-top:8rem;padding-right:2rem;padding-bottom:8rem;padding-left:2rem"><!-- wp:heading {"textAlign":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"huge"} -->
	<h2 class="has-text-align-center has-huge-font-size" id="schedule-a-visit" style="text-transform:uppercase">' . esc_html__( 'Schedule a Visit', 'bricksy' ) . '</h2>
	<!-- /wp:heading -->
		
	<!-- wp:paragraph {"align":"center","className":"has-inconsolata-font-family"} -->
	<p class="has-inconsolata-font-family">' . esc_html__( 'Malesuada nibh montes fusce cum eleifend fringilla commodo mattis tempor platea montes. Commodo metus adipiscing odio.', 'bricksy' ) . '</p>
	<!-- /wp:paragraph -->
		
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"width":50,"style":{"border":{"radius":"0px"},"typography":{"fontSize":"1.325rem"}},"className":"is-style-outline","fontFamily":"inconsolata"} -->
	<div class="wp-block-button has-custom-width wp-block-button__width-50 has-custom-font-size is-style-outline has-inconsolata-font-family" style="font-size:1.325rem"><a class="wp-block-button__link" style="border-radius:0px">' . esc_html__( 'CONTACT US', 'bricksy' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
		
	<!-- wp:column {"width":"33.33%"} -->
	<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"style":{"border":{"width":"2px"},"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}}} -->
	<div class="wp-block-group" style="border-width:2px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#000000","#ffffff"]}},"className":"is-style-rounded"} -->
	<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/food-about.jpg" alt="' . esc_attr__( 'About Me', 'bricksy' ) . '" /></figure></div>
	<!-- /wp:image -->
		
	<!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"lineHeight":"1","textTransform":"uppercase"}},"fontSize":"medium"} -->
	<h4 class="has-text-align-center has-medium-font-size" id="about-me" style="line-height:1;text-transform:uppercase">' . esc_html__( 'About Me', 'bricksy' ) . '</h4>
	<!-- /wp:heading -->
		
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"20px","bottom":"0px","left":"20px"}}}} -->
	<div class="wp-block-group" style="padding-top:0px;padding-right:20px;padding-bottom:0px;padding-left:20px"><!-- wp:paragraph {"align":"center","className":"has-inconsolata-font-family","fontSize":"small"} -->
		<p class="has-text-align-center has-inconsolata-font-family has-small-font-size">' . esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris purus urna.', 'bricksy' ) . '</p>
		<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->
		
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"3rem","top":"3rem"}}}} -->
	<div class="wp-block-group alignwide" style="padding-top:3rem;padding-bottom:3rem"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"lineHeight":"0","textTransform":"uppercase"}},"fontSize":"medium"} -->
	<h4 class="has-text-align-center has-medium-font-size" id="about-me" style="line-height:0;text-transform:uppercase">' . esc_html__( 'Follow Me', 'bricksy' ) . '</h4>
	<!-- /wp:heading -->
		
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0rem","right":"0rem","bottom":"0rem","left":"0rem"}},"typography":{"textTransform":"uppercase"}},"className":"is-style-default bricksy-team-additional has-medium-font-size","layout":{"inherit":false,"contentSize":"1200px"}} -->
	<div class="wp-block-group alignwide is-style-default bricksy-team-additional has-medium-font-size" style="padding-top:0rem;padding-right:0rem;padding-bottom:0rem;padding-left:0rem;text-transform:uppercase"><!-- wp:social-links {"customIconColor":"#ffffff","iconColorValue":"#ffffff","iconBackgroundColor":"foreground","iconBackgroundColorValue":"#000000","className":"is-style-default","layout":{"type":"flex","justifyContent":"center"}} -->
	<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default"><!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->
		
	<!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->
		
	<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->
		
	<!-- wp:social-link {"url":"https://wordpress.org","service":"wordpress"} /--></ul>
	<!-- /wp:social-links --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->
		
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"8rem","right":"2rem","bottom":"8rem","left":"2rem"}},"border":{"width":"2px","style":"solid"}},"className":"bricksy-general","layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull bricksy-general" style="border-style:solid;border-width:2px;padding-top:8rem;padding-right:2rem;padding-bottom:8rem;padding-left:2rem"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
	<h3 class="has-text-align-center has-medium-font-size" id="subscribe-to-our" style="text-transform:uppercase">' . esc_html__( 'Subscribe to our', 'bricksy' ) . '</h3>
	<!-- /wp:heading -->
		
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"textColor":"foreground","width":75,"style":{"border":{"radius":"0px"},"color":{"background":"#fee85d"}},"className":"is-style-fill","fontFamily":"inconsolata"} -->
	<div class="wp-block-button has-custom-width wp-block-button__width-75 is-style-fill has-inconsolata-font-family"><a class="wp-block-button__link has-foreground-color has-text-color has-background" style="border-radius:0px;background-color:#fee85d">' . esc_html__( 'NEWSLETTER', 'bricksy' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group -->
		
	<!-- wp:group {"align":"wide"} -->
	<div class="wp-block-group alignwide"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"3rem"}}}} -->
	<div class="wp-block-group alignwide" style="padding-top:3rem"><!-- wp:image {"align":"wide","sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#000000","#ffffff"]}}} -->
	<figure class="wp-block-image alignwide size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/wedding-3.jpg" alt="' . esc_attr__( 'Fashion and Style', 'bricksy' ) . '" /></figure>
	<!-- /wp:image -->
		
	<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"2"}},"className":"has-inconsolata-font-family"} -->
	<p class="has-inconsolata-font-family" style="line-height:2"><strong>' . esc_html__( 'Location:', 'bricksy' ) . '</strong><br>' . esc_html__( '82 Main St. Brooklyn, NY', 'bricksy' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
		
	<!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"2"}},"className":"has-inconsolata-font-family"} -->
		<p class="has-inconsolata-font-family" style="line-height:2"><strong>' . esc_html__( 'Date:', 'bricksy' ) . '</strong><br>' . esc_html__( 'October 24, 2021', 'bricksy' ) . '</p>
		<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
		
	<!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"textColor":"foreground","width":100,"style":{"color":{"background":"#fee85d"}},"className":"is-style-fill","fontSize":"small","fontFamily":"inconsolata"} -->
	<div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size is-style-fill has-inconsolata-font-family has-small-font-size"><a class="wp-block-button__link has-foreground-color has-text-color has-background" style="background-color:#fee85d">' . esc_html__( 'Buy Tickets', 'bricksy' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->
		
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"3rem","bottom":"8rem","right":"3rem","left":"3rem"}}},"className":"bricksy-fashion","layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull bricksy-fashion" style="padding-top:3rem;padding-right:3rem;padding-bottom:8rem;padding-left:3rem"><!-- wp:separator {"align":"wide","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignwide is-style-wide"/>
	<!-- /wp:separator -->
		
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:heading {"level":4,"style":{"typography":{"textTransform":"uppercase","fontSize":"1.45rem"}}} -->
	<h4 id="about-us" style="font-size:1.45rem;text-transform:uppercase">' . esc_html__( 'About Us', 'bricksy' ) . '</h4>
	<!-- /wp:heading -->
		
	<!-- wp:paragraph {"className":"has-inconsolata-font-family"} -->
	<p class="has-inconsolata-font-family">' . wp_kses_post( __( 'Etiam consequat sem ullamcorper, euismod metus sit amet, tristi justo. Vestibulum mattis, nisi ut.', 'bricksy' ) ) . '</p>
	<!-- /wp:paragraph -->
		
	<!-- wp:paragraph {"fontFamily":"inconsolata"} -->
	<p class="has-inconsolata-font-family"><strong>' . esc_html__( 'email:&nbsp;', 'bricksy' ) . '</strong><a href="#">' . esc_html__( 'bricksy@example.com', 'bricksy' ) . '</a></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"fontFamily":"inconsolata"} -->
	<p class="has-inconsolata-font-family"><strong>' . esc_html__( 'phone:&nbsp;', 'bricksy' ) . '&nbsp;</strong><a href="#">' . esc_html__( '+1 265 013 7253', 'bricksy' ) . '</a></p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
		
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:heading {"level":4,"style":{"typography":{"textTransform":"uppercase","fontSize":"1.45rem"}}} -->
	<h4 id="our-adventures" style="font-size:1.45rem;text-transform:uppercase">' . esc_html__( 'Our Adventures', 'bricksy' ) . '</h4>
	<!-- /wp:heading -->
		
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"padding":{"top":"0rem","right":"0rem","bottom":"0rem","left":"0rem"}}}} -->
	<div class="wp-block-column" style="padding-top:0rem;padding-right:0rem;padding-bottom:0rem;padding-left:0rem"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#000000","#ffffff"]}}} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/wedding-3.jpg" alt="' . esc_attr__( 'Wedding Fashion', 'bricksy' ) . '" /></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->
		
	<!-- wp:column {"style":{"spacing":{"padding":{"top":"0rem","right":"0rem","bottom":"0rem","left":"0rem"}}}} -->
	<div class="wp-block-column" style="padding-top:0rem;padding-right:0rem;padding-bottom:0rem;padding-left:0rem"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#000000","#ffffff"]}}} -->
	<figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/people-2.jpg" alt="' . esc_attr__( 'Winter Fashion', 'bricksy' ) . '" /></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->
		
	<!-- wp:column {"style":{"spacing":{"padding":{"top":"0rem","right":"0rem","bottom":"0rem","left":"0rem"}}}} -->
	<div class="wp-block-column" style="padding-top:0rem;padding-right:0rem;padding-bottom:0rem;padding-left:0rem"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#000000","#ffffff"]}}} -->
	<figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/people-3.jpg" alt="' . esc_attr__( 'Nature Fashion', 'bricksy' ) . '" /></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:column -->
		
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:heading {"level":4} -->
		<h4 id="categories">' . esc_html__( 'Categories', 'bricksy' ) . '</h4>
		<!-- /wp:heading -->
			
		<!-- wp:list -->
		<ul><li><a href="#">' . esc_html__( 'Experience Thailand', 'bricksy' ) . ' </a></li><li><a href="#">' . esc_html__( 'Best Adventures', 'bricksy' ) . '</a></li><li><a href="#"></a><a href="#">' . esc_html__( 'Sea & Beach', 'bricksy' ) . ' </a></li><li><a href="#">' . esc_html__( 'Hiking Tours', 'bricksy' ) . '</a><a href="#"> </a></li><li><a href="#">' . esc_html__( 'Kayaking Tours', 'bricksy' ) . '</a><a href="#"> </a></li><li><a href="#">' . esc_html__( 'Winter Destinations', 'bricksy' ) . '</a></li></ul>
		<!-- /wp:list --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns -->
			
		<!-- wp:separator {"align":"wide","className":"is-style-wide"} -->
		<hr class="wp-block-separator alignwide is-style-wide"/>
		<!-- /wp:separator -->
			
		<!-- wp:spacer {"height":50} -->
		<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
			
		<!-- wp:site-logo {"align":"center","width":232.591549295775} /-->
			
		<!-- wp:social-links {"iconColor":"foreground","iconColorValue":"#000000","align":"center","className":"has-icon-color is-style-logos-only"} -->
		<ul class="wp-block-social-links aligncenter has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"https://wordpress.org","service":"wordpress"} /-->
			
		<!-- wp:social-link {"url":"twitter.com","service":"twitter"} /-->
			
		<!-- wp:social-link {"url":"instagram.com","service":"instagram"} /--></ul>
		<!-- /wp:social-links -->
			
		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
		<div class="wp-block-group alignwide" style="padding-top:4rem;padding-bottom:4rem"><!-- wp:site-title /-->
			
		<!-- wp:paragraph {"align":"right"} -->
		<p class="has-text-align-right">' .
			sprintf(
				/* Translators: WordPress link. */
				esc_html__( 'Proudly powered by %s', 'bricksy' ),
				'<a href="' . esc_url( __( 'https://wordpress.org', 'bricksy' ) ) . '" rel="nofollow">WordPress</a>'
			) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group --></div>
	<!-- /wp:group -->',
);
