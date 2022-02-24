<?php
/**
 *
 * @package Nisarg
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses nisarg_header_style()
 * @uses nisarg_admin_header_style()
 * @uses nisarg_admin_header_image()
 */
function nisarg_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'nisarg_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => 'fff',
		'width'                  => 1600,
		'height'                 => 400,
		'flex-height'            => true,
		'wp-head-callback'       => 'nisarg_header_style',
		'admin-head-callback'    => 'nisarg_admin_header_style',
		'admin-preview-callback' => 'nisarg_admin_header_image',
	) ) );

	/*
	 * Default custom headers packaged with the theme.
	 * %s is a placeholder for the theme template directory URI.
	 */
	register_default_headers( array(
		'mountains' => array(
			'url'           => '%s/images/headers/mountains.png',
			'thumbnail_url' => '%s/images/headers/mountains_thumbnail.png',
			'description'   => _x( 'food', 'header image description', 'nisarg' ),
		),
		'skyline' => array(
			'url'           => '%s/images/headers/skyline.png',
			'thumbnail_url' => '%s/images/headers/skyline_thumbnail.png',
			'description'   => _x( 'buildings', 'header image description', 'nisarg' ),
		),
		'sea' => array(
			'url'           => '%s/images/headers/sea.png',
			'thumbnail_url' => '%s/images/headers/sea_thumbnail.png',
			'description'   => _x( 'Wood', 'header image description', 'nisarg' ),
		),
		'food' => array(
			'url'           => '%s/images/headers/food.png',
			'thumbnail_url' => '%s/images/headers/food_thumbnail.png',
			'description'   => _x( 'food', 'header image description', 'nisarg' ),
		),
	) );
}
add_action( 'after_setup_theme', 'nisarg_custom_header_setup' );

if ( ! function_exists( 'nisarg_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog
	 *
	 * @see nisarg_custom_header_setup().
	 */
	function nisarg_header_style() {
		$header_image = get_header_image();
		$header_text_color   = get_header_textcolor();
		?>
		<style type="text/css" id="nisarg-header-css">
		<?php
		if ( ! empty( $header_image ) ) :
			$header_width = get_custom_header()->width;
			$header_height = get_custom_header()->height;
			$header_height320 = ( $header_height / $header_width * 320 );
			$header_height360 = ( $header_height / $header_width * 360 );
			$header_height768 = ( $header_height / $header_width * 768 );
			$header_height980 = ( $header_height / $header_width * 980 );
			$header_height1280 = ( $header_height / $header_width * 1280 );
			$header_height1366 = ( $header_height / $header_width * 1366 );
			$header_height1440 = ( $header_height / $header_width * 1440 );
			$header_height1600 = ( $header_height / $header_width * 1600 );
			$header_height1920 = ( $header_height / $header_width * 1920 );
			$header_height2560 = ( $header_height / $header_width * 2560 );
			$header_height2880 = ( $header_height / $header_width * 2880 );
			?>
			.site-header {
				background: url(<?php header_image(); ?>) no-repeat scroll top;
				background-size: cover;
			}
			@media (min-width: 320px) and (max-width: 359px ) {
				.site-header {
					height: <?php echo absint( $header_height320 );?>px;
				}
			}
			@media (min-width: 360px) and (max-width: 767px ) {
				.site-header {
					height: <?php echo absint( $header_height360 );?>px;
				}
			}
			@media (min-width: 768px) and (max-width: 979px ) {
				.site-header {
					height: <?php echo absint( $header_height768 );?>px;
				}
			}
			@media (min-width: 980px) and (max-width: 1279px ){
				.site-header {
					height: <?php echo absint( $header_height980 );?>px;
				}
			}
			@media (min-width: 1280px) and (max-width: 1365px ){
				.site-header {
					height: <?php echo absint( $header_height1280 );?>px;
				}
			}
			@media (min-width: 1366px) and (max-width: 1439px ){
				.site-header {
					height: <?php echo absint( $header_height1366 );?>px;
				}
			}
			@media (min-width: 1440px) and (max-width: 1599px ) {
				.site-header {
					height: <?php echo absint( $header_height1440 );?>px;
				}
			}
			@media (min-width: 1600px) and (max-width: 1919px ) {
				.site-header {
					height: <?php echo absint( $header_height1600 );?>px;
				}
			}
			@media (min-width: 1920px) and (max-width: 2559px ) {
				.site-header {
					height: <?php echo absint( $header_height1920 );?>px;
				}
			}
			@media (min-width: 2560px)  and (max-width: 2879px ) {
				.site-header {
					height: <?php echo absint( $header_height2560 );?>px;
				}
			}
			@media (min-width: 2880px) {
				.site-header {
					height: <?php echo absint( $header_height2880 );?>px;
				}
			}
			.site-header{
				-webkit-box-shadow: 0px 0px 2px 1px rgba(182,182,182,0.3);
		    	-moz-box-shadow: 0px 0px 2px 1px rgba(182,182,182,0.3);
		    	-o-box-shadow: 0px 0px 2px 1px rgba(182,182,182,0.3);
		    	box-shadow: 0px 0px 2px 1px rgba(182,182,182,0.3);
			}
		<?php else : ?>
			.site-header{
				-webkit-box-shadow: 0px 0px 1px 1px rgba(182,182,182,0.3);
		    	-moz-box-shadow: 0px 0px 1px 1px rgba(182,182,182,0.3);
		    	-o-box-shadow: 0px 0px 1px 1px rgba(182,182,182,0.3);
		    	box-shadow: 0px 0px 1px 1px rgba(182,182,182,0.3);
			}
			.site-header {
					height: 300px;
				}
				@media (max-width: 767px) {
					.site-header {
						height: 200px;
					}
				}
				@media (max-width: 359px) {
					.site-header {
						height: 150px;
					}
				}
		<?php endif;
		// Has the text been hidden?
		if ( ! display_header_text() ) :
		?>
			.site-title,
			.site-description {
				position: absolute;
				clip: rect(1px 1px 1px 1px); /* IE7 */
				clip: rect(1px, 1px, 1px, 1px);
			}
		<?php
		endif;
		if ( empty( $header_image ) ) :
			?>
			.site-header .home-link {
				min-height: 0;
			}
		<?php endif;  ?>
			.site-title,
			.site-description {
				color: #<?php echo esc_attr( $header_text_color ); ?>;
			}
			.site-title::after{
				background: #<?php echo esc_attr( $header_text_color ); ?>;
				content:"";
			}
		</style>
		<?php
	}
endif; // nisarg_header_style


if ( ! function_exists( 'nisarg_admin_header_style' ) ) :
	/**
	 * Styles the header image displayed on the Appearance > Header admin panel.
	 *
	 * @see nisarg_custom_header_setup().
	 */
	function nisarg_admin_header_style() {
	?>
		<?php
		if ( 'blank' == get_header_textcolor() || '' == get_header_textcolor() ) {
		    $style = ' style="display:none;"';
		} else {
		    $style = ' style="color:#' . get_header_textcolor() . ';"';
		}
	    ?>
		<style type="text/css">
			.appearance_page_custom-header #headimg{
				background: #fff;
	        	border: none;
			}

			#headimg .site-branding {
				margin:0;
			    position: absolute;
			    top: 50%;
			    left: 50%;
			    margin-right: -50%;
			    -webkit-transform: translate(-50%,-50%);
			    -ms-transform: translate(-50%,-50%);
			    -o-transform: translate(-50%,-50%);
			    transform: translate(-50%,-50%);
			    text-align: center;
			}
			#headimg h1 { /* This is the site title displayed in the preview */
				<?php echo esc_attr( $style ); ?>
			    text-transform: uppercase;
	    		letter-spacing: 10px;
	    	}

	    	#headimg a{
	    		text-decoration: none;
	    	}
			#headimg #desc{
	        	<?php echo esc_attr( $style ); ?>
	        	text-decoration: none;
			    padding: 0.2em 0em;
			    letter-spacing: 5px;
			    text-transform: capitalize;
	    	}
	    	#headimg .home-link .displaying-header-text::after{
	    		background: #<?php get_header_textcolor() ?>;
	    		content:"";
			    height: 2px;
			    display: block;
			    width: 20%;
			    margin: 5px auto;
	    	}
		</style>
	<?php
	}
endif; // nisarg_admin_header_style

if ( ! function_exists( 'nisarg_admin_header_image' ) ) :
	/**
	 * Custom header image markup displayed on the Appearance > Header admin panel.
	 *
	 * @see nisarg_custom_header_setup().
	 */
	function nisarg_admin_header_image() {
		if ( 'blank' == get_header_textcolor() || '' == get_header_textcolor() ) {
			$style = ' style="color: #fff;"';
		} else {
			$style = ' style="color:#' . get_header_textcolor() . ';"';
		} ?>
	<div id="headimg">
		<div class="site-branding">
			<div class="home-link">
				<h1 class="displaying-header-text"><a id="name" style="<?php echo esc_attr( $style ); ?>" onclick="return false;" href="<?php esc_url('#'); ?>" tabindex="-1"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 id="desc" class="displaying-header-text" style="<?php echo esc_attr( $style ); ?>"><?php bloginfo( 'description' ); ?></h2>
			</div>
		</div>
		<?php $header_image = get_header_image();
		if ( ! empty( $header_image ) ) : ?>
			<style type="text/css">
	            .site-header {
					background: url(<?php header_image(); ?>) no-repeat scroll top;
				}
			</style>
		<?php endif; ?>
		<?php if ( '' != get_header_textcolor() || 'blank' != get_header_textcolor() ) { ?>
			<style type="text/css">
				#headimg h1::after{
		    		background: #<?php get_header_textcolor() ?>;
		    		content:"";
				    height: 2px;
				    display: block;
				    width: 20%;
				    margin: 5px auto;
				}
			</style>
		<?php } ?>
	</div>
	<?php
	}
endif; // nisarg_admin_header_image
