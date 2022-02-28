<?php
/**
 * Theme functions and definitions.
 * @author  	 DeoThemes
 * @copyright  (c) Copyright by DeoThemes
 * @link       https://deothemes.com
 * @package 	 Ona
 * @since 		 1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


/*--------------------------------------------------------------
# Get Fonts
--------------------------------------------------------------*/

if ( ! function_exists( 'ona_get_font_face_styles' ) ) :
	/**
	 * Get font face styles.
	 *
	 * @return string
	 */
	function ona_get_font_face_styles() {
		return "
		@font-face{
			font-family: 'Jost';
			font-weight: normal;
			font-style: normal;
			font-stretch: normal;
			src: url('" . get_theme_file_uri( 'assets/fonts/jost/Jost-Regular.woff' ) . "') format('woff');
		}

		@font-face{
			font-family: 'Bestermind';
			font-weight: normal;
			font-style: normal;
			font-stretch: normal;
			src: url('" . get_theme_file_uri( 'assets/fonts/bestermind/BestermindRegular.woff' ) . "') format('woff');
		}

		@font-face{
			font-family: 'Nunito Sans';
			font-weight: normal;
			font-style: normal;
			font-stretch: normal;
			src: url('" . get_parent_theme_file_uri( 'assets/fonts/nunito-sans/NunitoSans-Regular.woff' ) . "') format('woff');
		}

		@font-face{
			font-family: 'Nunito Sans';
			font-weight: normal;
			font-style: italic;
			font-stretch: normal;
			src: url('" . get_parent_theme_file_uri( 'assets/fonts/nunito-sans/NunitoSans-Italic.woff' ) . "') format('woff');
		}

		@font-face{
			font-family: 'Nunito Sans';
			font-weight: 600;
			font-style: normal;
			font-stretch: normal;
			src: url('" . get_parent_theme_file_uri( 'assets/fonts/nunito-sans/NunitoSans-SemiBold.woff' ) . "') format('woff');
		}

		@font-face{
			font-family: 'Nunito Sans';
			font-weight: 700;
			font-style: normal;
			font-stretch: normal;
			src: url('" . get_parent_theme_file_uri( 'assets/fonts/nunito-sans/NunitoSans-Bold.woff' ) . "') format('woff');
		}

		";
	}
endif;
