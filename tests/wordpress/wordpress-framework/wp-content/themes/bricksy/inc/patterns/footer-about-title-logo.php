<?php
/**
 * Footer with text, title, and logo
 */
return array(
	'title'	  => __( 'Footer with text, title, and logo', 'bricksy' ),
	'categories' => array( 'bricksy-footers' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'	=> '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"8rem","bottom":"6rem"}}},"backgroundColor":"secondary","layout":{"inherit":true}} -->
					<div class="wp-block-group alignfull has-secondary-background-color has-background" style="padding-top:8rem;padding-bottom:6rem"><!-- wp:columns {"align":"wide"} -->
					<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33%"} -->
					<div class="wp-block-column" style="flex-basis:33%"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}}} -->
					<p style="text-transform:uppercase">' . esc_html__( 'About us', 'bricksy' ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"style":{"fontSize":"small"} -->
					<p class="has-small-font-size">' . esc_html__( 'Etiam consequat sem ullamcorper, euismod metus sit amet, tristi justo. Vestibulum mattis, nisi ut. Etiam consequat sem ullamcorper.', 'bricksy' ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:spacer {"height":180} -->
					<div style="height:180px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:site-title /--></div>
					<!-- /wp:column -->

					<!-- wp:column {"verticalAlignment":"bottom"} -->
					<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:site-logo {"align":"right","width":60} /--></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns --></div>
					<!-- /wp:group -->',
);
