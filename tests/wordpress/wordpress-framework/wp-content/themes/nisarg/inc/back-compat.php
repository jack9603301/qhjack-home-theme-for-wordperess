<?php
/**
* @package Nisarg
*/

/**
 * Prevent switching to Nisarg on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 */
function nisarg_switch_theme() {
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'nisarg_upgrade_notice' );
}
add_action( 'after_switch_theme', 'nisarg_switch_theme' );

/**
 * Add message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Nisarg on WordPress versions prior to 4.9.5.
 *
 *
 */
function nisarg_upgrade_notice() {
	/* translators: %s: WordPress version. */
	$message = sprintf( esc_html__( 'Nisarg requires at least WordPress version 5.0. You are running version %s. Please upgrade and try again.', 'nisarg' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
}

/**
 * Prevent the Customizer from being loaded on WordPress versions prior to 4.7.1.
 *
 */
function nisarg_customize() {
	/* translators: %s: WordPress version. */
	wp_die( sprintf( esc_html__( 'Nisarg requires at least WordPress version 5.0. You are running version %s. Please upgrade and try again.', 'nisarg' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) ); 
}
add_action( 'load-customize.php', 'nisarg_customize' );

/**
 * Prevent the Theme Preview from being loaded on WordPress versions prior to 4.2.
 *
 */
function nisarg_preview() {
	if ( isset( $_GET['preview'] ) ) {
		/* translators: %s: WordPress version. */
		wp_die( sprintf( esc_html__( 'Nisarg requires at least WordPress version 5.0. You are running version %s. Please upgrade and try again.', 'nisarg' ), $GLOBALS['wp_version'] ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
}
add_action( 'template_redirect', 'nisarg_preview' );
