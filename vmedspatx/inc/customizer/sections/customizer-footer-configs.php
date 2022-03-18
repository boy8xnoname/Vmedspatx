<?php
/**
 * Logo section
 *
 * @package vmedspatx
 */

Kirki::add_field(
	'vmedspatx',
	array(
		'type'        => 'image',
		'settings'    => 'footer_logo',
		'label'       => esc_html__( 'Footer Logo', 'vmedspatx' ),
		'description' => esc_html__( 'Select an image file for your footer logo.', 'vmedspatx' ),
		'section'     => 'section_footer_config',
		'priority'    => 1,
		'default'     => '',
	)
);

Kirki::add_field( 
	'vmedspatx',
	[
		'type'        => 'switch',
		'settings'    => 'show_copyright_content',
		'label'       => esc_html__( 'Show/Hide Copyright text in footer', 'kirki' ),
		'section'     => 'section_footer_config',
		'default'     => '1',
		'priority'    => 5,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'kirki' ),
			'off' => esc_html__( 'Disable', 'kirki' ),
		],
	] 
);

Kirki::add_field( 
	'vmedspatx',
	[
		'type'        => 'editor',
		'settings'    => 'copyright_content',
		'label'       => esc_html__( 'Copyright/Terms and Conditions', 'vmedspatx' ),
		'description' => esc_html__( 'Add Copyright text and  Terms and Conditions link.', 'vmedspatx' ),
		'section'     => 'section_footer_config',
		'priority' => 10,
		'default'     => '',
	] 
);

Kirki::add_field( 
	'vmedspatx',
	[
		'type'     => 'text',
		'settings' => 'newsletter_heading',
		'label'    => esc_html__( 'Footer Heading Newsletter', 'vmedspatx' ),
		'section'  => 'section_footer_config',
		'default'  => esc_html__( 'Subscribe', 'vmedspatx' ),
		'priority' => 12
	] 
);

Kirki::add_field( 'vmedspatx', 
	[
		'type'     => 'text',
		'settings' => 'newsletter_shortcode',
		'label'    => esc_html__( 'Newsletter form shortcode', 'vmedspatx' ),
		'section'  => 'section_footer_config',
		'default'  => esc_html__( '[mc4wp_form id="2375"]', 'vmedspatx' ),
		'priority' => 15
	] 
);