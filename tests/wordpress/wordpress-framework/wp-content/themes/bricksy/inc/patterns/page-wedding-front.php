<?php
/**
 * Front page block pattern
 */
return array(
	'title'	  => __( 'Front Page', 'bricksy' ),
	'categories' => array( 'bricksy-pages-wedding' ),
	'content'	=> '<!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( '/assets/images/wedding-hero.jpg' ) ) . '","hasParallax":true,"dimRatio":60,"overlayColor":"foreground","minHeight":800,"align":"full","className":"bricksy-general-hero"} -->
	<div class="wp-block-cover alignfull has-parallax bricksy-general-hero" style="background-image:url(' . esc_url( get_theme_file_uri( '/assets/images/wedding-hero.jpg' ) ) . ');min-height:800px"><span aria-hidden="true" class="has-foreground-background-color has-background-dim-60 wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"textColor":"background","layout":{"inherit":false}} -->
	<div class="wp-block-group has-background-color has-text-color"></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"layout":{"inherit":true}} -->
	<div class="wp-block-group"><!-- wp:group {"align":"wide","textColor":"background","layout":{"inherit":false}} -->
	<div class="wp-block-group alignwide has-background-color has-text-color"><!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":"1.15","textTransform":"uppercase"}},"fontSize":"gigantic"} -->
	<h2 class="has-text-align-center has-gigantic-font-size" id="schedule-a-visit-1" style="line-height:1.15;text-transform:uppercase">' . esc_html__( 'Wedding Dresses', 'bricksy' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:group {"layout":{"inherit":true}} -->
	<div class="wp-block-group"><!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">' . esc_html__( 'Sed gravida ornare vestibulum turpis quam urna aliquam in feugiat lorem dolor pulvinar a, scelerisque amet ultrices consectetur magna sit.', 'bricksy' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group -->
	
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"textColor":"foreground","width":25,"style":{"border":{"radius":"0px"},"color":{"background":"#fca1a1"}},"className":"is-style-fill"} -->
	<div class="wp-block-button has-custom-width wp-block-button__width-25 is-style-fill"><a class="wp-block-button__link has-foreground-color has-text-color has-background" style="border-radius:0px;background-color:#fca1a1">' . esc_html__( 'CONTACT US', 'bricksy' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:cover -->
	
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"6rem","right":"3rem","bottom":"6rem","left":"3rem"}}},"className":"bricksy-general-two-column-text","layout":{"inherit":false,"contentSize":"1200px"}} -->
	<div class="wp-block-group alignwide bricksy-general-two-column-text" style="padding-top:6rem;padding-right:3rem;padding-bottom:6rem;padding-left:3rem"><!-- wp:columns {"style":{"spacing":{"blockGap":"%"}}} -->
	<div class="wp-block-columns"><!-- wp:column {"width":"100%"} -->
	<div class="wp-block-column" style="flex-basis:100%"><!-- wp:columns {"align":"full","style":{"spacing":{"blockGap":"20px"}}} -->
	<div class="wp-block-columns alignfull"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none"} -->
	<div class="wp-block-image"><figure class="aligncenter size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/wedding-icon-1.jpg" alt="' . esc_attr__( 'Icon One', 'bricksy' ) . '" /></figure></div>
	<!-- /wp:image -->
	
	<!-- wp:heading {"textAlign":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
	<h2 class="has-text-align-center has-medium-font-size" id="a-top-service" style="text-transform:uppercase">' . esc_html__( 'Free Shiping', 'bricksy' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">' . esc_html__( 'Once receiving your order, we will arrange a call with you to arrange the best for you.', 'bricksy' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none"} -->
	<div class="wp-block-image"><figure class="aligncenter size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/wedding-icon-2.jpg" alt="' . esc_attr__( 'Icon Two', 'bricksy' ) . '" /></figure></div>
	<!-- /wp:image -->
	
	<!-- wp:heading {"textAlign":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
	<h2 class="has-text-align-center has-medium-font-size" id="a-top-service" style="text-transform:uppercase">' . esc_html__( 'Free Returns', 'bricksy' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">' . esc_html__( 'We accept returns for freshly purchased products within 7 days of the payment.', 'bricksy' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none"} -->
	<div class="wp-block-image"><figure class="aligncenter size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/wedding-icon-3.jpg" alt="' . esc_attr__( 'Icon Three', 'bricksy' ) . '" /></figure></div>
	<!-- /wp:image -->
	
	<!-- wp:heading {"textAlign":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
	<h2 class="has-text-align-center has-medium-font-size" id="a-top-service" style="text-transform:uppercase">' . esc_html__( 'Best Quality', 'bricksy' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">' . esc_html__( 'We make commitments that the quality of our products will and always will be superb.', 'bricksy' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none"} -->
	<div class="wp-block-image"><figure class="aligncenter size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/wedding-icon-4.jpg" alt="' . esc_attr__( 'Icon Three', 'bricksy' ) . '" /></figure></div>
	<!-- /wp:image -->
	
	<!-- wp:heading {"textAlign":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
	<h2 class="has-text-align-center has-medium-font-size" id="a-top-service" style="text-transform:uppercase">' . esc_html__( 'Custom Size', 'bricksy' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">' . esc_html__( 'Order your dress with free custom sizing. Ready&nbsp;in 3- 5 business days.', 'bricksy' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
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
<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/wedding-1.jpg" alt="' . esc_attr__( 'Wedding Dress', 'bricksy' ) . '" /></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/wedding-2.jpg" alt="' . esc_attr__( 'Wedding Flowers', 'bricksy' ) . '" /></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/wedding-3.jpg" alt="' . esc_attr__( 'Wedding Dress', 'bricksy' ) . '" /></figure>
<!-- /wp:image -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"3rem","left":"3rem","top":"3rem","bottom":"6rem"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group alignwide" style="padding-top:3rem;padding-right:3rem;padding-bottom:6rem;padding-left:3rem"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1","textTransform":"uppercase","fontSize":"18px"}}} -->
<p class="has-text-align-center" style="font-size:18px;line-height:1;text-transform:uppercase">' . esc_html__( 'Introducing', 'bricksy' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"huge"} -->
<h2 class="has-text-align-center has-huge-font-size" id="bricksy-new-tours" style="text-transform:uppercase">' . esc_html__( 'Our New Collection', 'bricksy' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"22px"}}} -->
<p class="has-text-align-center" style="font-size:22px">' . esc_html__( 'Sed gravida ornare vestibulum turpis quam urna aliquam.', 'bricksy' ) . '<br>' . esc_html__( 'Available for a limited time.', 'bricksy' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"foreground","style":{"color":{"background":"#fca1a1"}},"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-foreground-color has-text-color has-background" style="background-color:#fca1a1">' . esc_html__( 'SHOP NOW', 'bricksy' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"padding":{"top":"4rem"}}}} -->
<div class="wp-block-column" style="padding-top:4rem"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"is-style-olorien-round-edges"} -->
<figure class="wp-block-image size-large is-style-olorien-round-edges"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/wedding-3.jpg" alt="' . esc_attr__( 'Wedding Dress', 'bricksy' ) . '" /></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"8rem"}}}} -->
<div class="wp-block-column" style="padding-top:8rem"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"is-style-olorien-round-edges"} -->
<figure class="wp-block-image size-large is-style-olorien-round-edges"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/wedding-2.jpg" alt="' . esc_attr__( 'Wedding Dress', 'bricksy' ) . '" /></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"6rem","bottom":"8rem","left":"0px","right":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"color":{"gradient":"linear-gradient(241deg,rgb(252,161,161) 0%,rgb(255,255,255) 98%)"}},"textColor":"foreground","className":"bricksy-general-color-me-in"} -->
<div class="wp-block-group alignfull bricksy-general-color-me-in has-foreground-color has-text-color has-background has-link-color" style="background:linear-gradient(241deg,rgb(252,161,161) 0%,rgb(255,255,255) 98%);padding-top:6rem;padding-right:0px;padding-bottom:8rem;padding-left:0px"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"left":"max(1.25rem, 5vw)","right":"max(1.25rem, 5vw)"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group alignfull" style="padding-right:max(1.25rem, 5vw);padding-left:max(1.25rem, 5vw)">

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"huge"} -->
<h2 class="has-huge-font-size" id="get-news-trends" style="text-transform:uppercase">' . esc_html__( 'Get news &amp; trends', 'bricksy' ) . ' <br>' . esc_html__( 'from your inbox.', 'bricksy' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"foreground","style":{"color":{"background":"#fca1a1"}},"className":"is-style-fill","fontSize":"normal"} -->
<div class="wp-block-button has-custom-font-size is-style-fill has-normal-font-size"><a class="wp-block-button__link has-foreground-color has-text-color has-background" style="background-color:#fca1a1">' . esc_html__( 'JOIN OUR MAILING LIST', 'bricksy' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:2rem;padding-bottom:2rem"><!-- wp:image {"align":"center","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"0px"}},"className":"is-style-rounded"} -->
<div class="wp-block-image is-style-rounded" style="border-radius:0px"><figure class="aligncenter size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/wedding-4.jpg" alt="' . esc_attr__( 'Wedding Dress', 'bricksy' ) . '" /></figure></div>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide"></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
);
