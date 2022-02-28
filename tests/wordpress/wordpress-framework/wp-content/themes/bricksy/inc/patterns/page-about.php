<?php
/**
 * About page block pattern
 */
return array(
	'title'	  => __( 'About Page', 'bricksy' ),
	'categories' => array( 'bricksy-pages' ),
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
	<!-- /wp:group -->
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"3rem","bottom":"3rem","right":"3rem","left":"3rem"}}},"layout":{"inherit":true}} -->
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
	<p class="handwritten-alternative has-gigantic-font-size">' . esc_html__( 'adventurous', 'bricksy' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"4rem","right":"2rem","bottom":"4rem","left":"2rem"}}},"backgroundColor":"beidge","className":"bricksy-general-color-me-in","layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull bricksy-general-color-me-in has-beidge-background-color has-background" style="padding-top:4rem;padding-right:2rem;padding-bottom:4rem;padding-left:2rem"><!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"padding":{"top":"4rem","right":"2rem","bottom":"4rem","left":"2rem"}}}} -->
	<div class="wp-block-column" style="padding-top:4rem;padding-right:2rem;padding-bottom:4rem;padding-left:2rem"><!-- wp:image {"align":"center","width":150,"height":150,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
	<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-full is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/team-1.jpg" alt="' . esc_attr__( 'Team One', 'bricksy' ) . '" width="150" height="150"/></figure></div>
	<!-- /wp:image -->
	
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><strong>' . esc_html__( 'Marie Martín', 'bricksy' ) . '<br></strong>' . esc_html__( 'Editor-in-chief', 'bricksy' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:separator {"align":"full","className":"is-style-default"} -->
	<hr class="wp-block-separator alignfull is-style-default"/>
	<!-- /wp:separator -->
	
	<!-- wp:social-links {"customIconColor":"#ffffff","iconColorValue":"#ffffff","customIconBackgroundColor":"#000000","iconBackgroundColorValue":"#000000","className":"is-style-default","layout":{"type":"flex","justifyContent":"center"}} -->
	<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default"><!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->
	
	<!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->
	
	<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->
	
	<!-- wp:social-link {"url":"https://wordpress.org","service":"wordpress"} /--></ul>
	<!-- /wp:social-links --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"style":{"spacing":{"padding":{"top":"4rem","right":"2rem","bottom":"4rem","left":"2rem"}}}} -->
	<div class="wp-block-column" style="padding-top:4rem;padding-right:2rem;padding-bottom:4rem;padding-left:2rem"><!-- wp:image {"align":"center","width":150,"height":150,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
	<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-full is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/team-2.jpg" alt="' . esc_attr__( 'Team Two', 'bricksy' ) . '" width="150" height="150"/></figure></div>
	<!-- /wp:image -->
	
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><strong>' . esc_html__( 'Elizabeth Linden', 'bricksy' ) . '<br></strong>' . esc_html__( 'Travel Editor', 'bricksy' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:separator {"align":"full","className":"is-style-default"} -->
	<hr class="wp-block-separator alignfull is-style-default"/>
	<!-- /wp:separator -->
	
	<!-- wp:social-links {"customIconColor":"#ffffff","iconColorValue":"#ffffff","customIconBackgroundColor":"#000000","iconBackgroundColorValue":"#000000","className":"","layout":{"type":"flex","justifyContent":"center"}} -->
	<ul class="wp-block-social-links has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->
	
	<!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->
	
	<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->
	
	<!-- wp:social-link {"url":"https://wordpress.org","service":"wordpress"} /--></ul>
	<!-- /wp:social-links --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"style":{"spacing":{"padding":{"top":"4rem","right":"2rem","bottom":"2rem","left":"2rem"}}}} -->
	<div class="wp-block-column" style="padding-top:4rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem"><!-- wp:image {"align":"center","width":150,"height":150,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
	<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-full is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/team-3.jpg" alt="' . esc_attr__( 'Team Three', 'bricksy' ) . '" width="150" height="150"/></figure></div>
	<!-- /wp:image -->
	
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><strong>' . esc_html__( 'Janet Smith', 'bricksy' ) . '<br></strong>' . esc_html__( 'Tour Guide', 'bricksy' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:separator {"align":"full","className":"is-style-default"} -->
	<hr class="wp-block-separator alignfull is-style-default"/>
	<!-- /wp:separator -->
	
	<!-- wp:social-links {"customIconColor":"#ffffff","iconColorValue":"#ffffff","customIconBackgroundColor":"#000000","iconBackgroundColorValue":"#000000","className":"","layout":{"type":"flex","justifyContent":"center"}} -->
	<ul class="wp-block-social-links has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->
	
	<!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->
	
	<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->
	
	<!-- wp:social-link {"url":"https://wordpress.org","service":"wordpress"} /--></ul>
	<!-- /wp:social-links --></div>
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
	<!-- /wp:group -->
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"8rem","right":"2rem","bottom":"8rem","left":"2rem"}}},"backgroundColor":"beidge","className":"bricksy-general-color-me-in","layout":{"inherit":true}} -->
	<div class="wp-block-group alignfull bricksy-general-color-me-in has-beidge-background-color has-background" style="padding-top:8rem;padding-right:2rem;padding-bottom:8rem;padding-left:2rem"><!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><strong>' . esc_html__( 'GET IN TOUCH', 'bricksy' ) . '</strong></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":59}}} -->
	<h2 class="has-text-align-center" id="schedule-a-visit" style="font-size:59px">' . esc_html__( 'Schedule a visit', 'bricksy' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"width":50,"style":{"border":{"radius":"0px"}},"className":"is-style-outline"} -->
	<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link" style="border-radius:0px">' . esc_html__( 'CONTACT US', 'bricksy' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group -->',
);
