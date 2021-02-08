<?php
/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @link https://github.com/justintadlock/trt-customizer-pro/tree/master/example-1
 * @since  1.0.0
 * @access public
 */
final class Nisarg_Customize_Upsell {
	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {
		static $instance = null;
		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}
		return $instance;
	}
	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}
	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {
		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );
		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}
	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {
		// Load custom sections.
		get_template_part( '/inc/upsell/section','pro' );
		// Register custom section types.
		$manager->register_section_type( 'Nisarg_Customize_Section_Pro' );
		// Register sections.
		$manager->add_section(
			new Nisarg_Customize_Section_Pro(
				$manager,
				'nisarg_section_pro',
				array(
					'title'    => '',
					'description'=>__( 'Looking for more features?', 'nisarg' ),
					'pro_text' => esc_html__( 'Upgrade to Nisarg PRO',         'nisarg' ),
					'pro_url'  => 'https://www.falgunithemes.com/downloads/nisargpro/',
					'priority' => 19,
				)
			)
		);
	}
	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {
		wp_enqueue_script( 'nisarg-customize-controls', trailingslashit( get_template_directory_uri() ) . '/inc/upsell/customize-controls.js', array( 'customize-controls' ) );
		wp_enqueue_style( 'nisarg-customize-controls', trailingslashit( get_template_directory_uri() ) . '/inc/upsell/customize-controls.css' );
	}
}
// Doing this customizer thang!
Nisarg_Customize_Upsell::get_instance();