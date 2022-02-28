<?php
/**
 * Bricksy functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @subpackage Bricksy
 * @since Bricksy 1.0
 */


if ( ! function_exists( 'bricksy_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Bricksy 1.0
	 *
	 * @return void
	 */
	function bricksy_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'bricksy_support' );

if ( ! function_exists( 'bricksy_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Bricksy 1.0
	 *
	 * @return void
	 */
	function bricksy_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'bricksy-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);
		
		// Add styles inline.
		wp_add_inline_style( 'bricksy-style', bricksy_get_font_face_styles() );

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'bricksy-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'bricksy_styles' );

if ( ! function_exists( 'bricksy_editor_styles' ) ) :

	/**
	 * Enqueue editor styles.
	 *
	 * @since Bricksy 1.0
	 *
	 * @return void
	 */
	function bricksy_editor_styles() {

		// Add styles inline.
		wp_add_inline_style( 'wp-block-library', bricksy_get_font_face_styles() );

	}

endif;

add_action( 'admin_init', 'bricksy_editor_styles' );


if ( ! function_exists( 'bricksy_get_font_face_styles' ) ) :

	/**
	 * Get font face styles.
	 * Called by functions bricksy_styles() and bricksy_editor_styles() above.
	 *
	 * @since Bricksy 1.0
	 *
	 * @return string
	 */
	function bricksy_get_font_face_styles() {

		return "
		@font-face{
			font-family: 'Source Serif Pro';
			font-weight: 200 900;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/source-serif/SourceSerif4Variable-Roman.ttf.woff2' ) . "') format('woff2');
		}

		@font-face{
			font-family: 'Source Serif Pro';
			font-weight: 200 900;
			font-style: italic;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/source-serif/SourceSerif4Variable-Italic.ttf.woff2' ) . "') format('woff2');
		}

		@font-face{
			font-family: 'Gilda Display';
			font-weight: regular;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/gilda-display/GildaDisplay-Regular.woff' ) . "') format('woff');
		}

		@font-face{
			font-family: 'Nunito Sans';
			font-weight: 200 900;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/nunito-sans/NunitoSans-Regular.woff' ) . "') format('woff');
		}

		@font-face{
			font-family: 'Nunito Sans';
			font-weight: 200 900;
			font-style: italic;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/nunito-sans/NunitoSans-Italic.woff' ) . "') format('woff');
		}

		@font-face{
			font-family: 'Kristi';
			font-weight: regular;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/kristi/kristi-regular.woff' ) . "') format('woff');
		}

		@font-face{
			font-family: 'Inconsolata';
			font-weight: regular;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/inconsolata/Inconsolata-Regular.woff' ) . "') format('woff');
		}

		@font-face{
			font-family: 'Inconsolata';
			font-weight: bold;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/inconsolata/Inconsolata-Bold.woff' ) . "') format('woff');
		}

		@font-face{
			font-family: 'Bestermind';
			font-weight: normal;
			font-style: normal;
			font-stretch: normal;
			src: url('" . get_theme_file_uri( 'assets/fonts/bestermind/BestermindRegular.woff' ) . "') format('woff');
		}
		";

	}

endif;

if ( ! function_exists( 'bricksy_preload_webfonts' ) ) :

	/**
	 * Preloads the main web font to improve performance.
	 *
	 * Only the main web font (font-style: normal) is preloaded here since that font is always relevant (it is used
	 * on every heading, for example). The other font is only needed if there is any applicable content in italic style,
	 * and therefore preloading it would in most cases regress performance when that font would otherwise not be loaded
	 * at all.
	 *
	 * @since Bricksy 1.0
	 *
	 * @return void
	 */
	function bricksy_preload_webfonts() {
		?>
		<link rel="preload" href="<?php echo esc_url( get_theme_file_uri( 'assets/fonts/NunitoSans-Regular.woff' ) ); ?>" as="font" type="font/woff" crossorigin>
		<?php
	}

endif;

add_action( 'wp_head', 'bricksy_preload_webfonts' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';