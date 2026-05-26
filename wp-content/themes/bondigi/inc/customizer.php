<?php
/**
 * Customizer
 * 
 * @package WordPress
 * @subpackage bondigi
 * @since bondigi 1.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function bondigi_customize_register( $wp_customize ) {
	$wp_customize->add_section( new Bondigi_Upsell_Section($wp_customize,'upsell_section',array(
		'title'            => __( 'Bondigi Pro', 'bondigi' ),
		'button_text'      => __( 'Upgrade Pro', 'bondigi' ),
		'url'              => esc_url( MINTRARO_BUY_NOW ),
		'priority'         => 0,
	)));
}
add_action( 'customize_register', 'bondigi_customize_register' );

/**
 * Enqueue script for custom customize control.
 */
function bondigi_custom_control_scripts() {
	wp_enqueue_script( 'bondigi-custom-controls-js', get_template_directory_uri() . '/assets/js/custom-controls.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-sortable' ), '1.0', true );
}
add_action( 'customize_controls_enqueue_scripts', 'bondigi_custom_control_scripts' );