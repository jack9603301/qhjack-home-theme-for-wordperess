<?php
/**
 * Bricksy: Block Patterns
 *
 * @since Bricksy 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since Bricksy 1.0
 */
function bricksy_register_block_patterns() {
	$block_pattern_categories = array(
		'bricksy-general'         => array( 'label' => __( 'Bricksy General', 'bricksy' ) ),
		'bricksy-footers'         => array( 'label' => __( 'Bricksy Footers', 'bricksy' ) ),
		'bricksy-headers'         => array( 'label' => __( 'Bricksy Headers', 'bricksy' ) ),
		'bricksy-query'           => array( 'label' => __( 'Bricksy Posts', 'bricksy' ) ),
		'bricksy-pages'           => array( 'label' => __( 'Bricksy Pages Travel', 'bricksy' ) ),
		'bricksy-pages-wedding'   => array( 'label' => __( 'Bricksy Pages Wedding', 'bricksy' ) ),
		'bricksy-pages-food'      => array( 'label' => __( 'Bricksy Pages Food', 'bricksy' ) ),
		'bricksy-pages-fashion'   => array( 'label' => __( 'Bricksy Pages Fashion', 'bricksy' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since Bricksy 1.0
	 *
	 * @param array[] $block_pattern_categories {
	 *     An associative array of block pattern categories, keyed by category name.
	 *
	 *     @type array[] $properties {
	 *         An array of block category properties.
	 *
	 *         @type string $label A human-readable label for the pattern category.
	 *     }
	 * }
	 */
	$block_pattern_categories = apply_filters( 'bricksy_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}

	$block_patterns = array(
		'header-default',
		'header-stacked',
		'header-centered-navigation-social-background',
		'footer-default',
		'footer-social-copyright',
		'footer-about-title-logo',
		'general-image-with-caption',
		'general-image-with-caption-title-rotated',
		'general-image-with-caption-button',
		'general-handwritten-text',
		'general-handwritten-alternative-text',
		'general-two-column-text',
		'general-three-images-text',
		'general-three-columns-with-images-text',
		'general-three-column-icons-text',
		'general-media-left-text-right',
		'general-media-alternative',
		'general-media-right-text-left',
		'general-pricing-table',
		'general-subscribe',
		'general-three-column-title-images',
		'general-three-column-text',
		'general-four-columns-images-text',
		'general-three-column-cover',
		'general-team',
		'general-team-alternative',
		'general-people',
		'general-intro',
		'general-call-to-action',
		'general-contact',
		'general-social-link',
		'page-front',
		'page-about',
		'page-team',
		'page-wedding-front',
		'page-food-front',
		'page-fashion-front',
		'hidden-404',
	);

	/**
	 * Filters the theme block patterns.
	 *
	 * @since Bricksy 1.0
	 *
	 * @param $block_patterns array List of block patterns by name.
	 */
	$block_patterns = apply_filters( 'bricksy_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		register_block_pattern(
			'bricksy/' . $block_pattern,
			require __DIR__ . '/patterns/' . $block_pattern . '.php'
		);
	}
}
add_action( 'init', 'bricksy_register_block_patterns', 9 );
