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


Kirki::add_field( 'vmedspatx', array(
	'type'        => 'repeater',
	'label'       => esc_attr__( 'Partner Logo', 'vmedspatx' ),
	'section'     => 'section_footer_config',
	'priority'    => 3,
	'row_label' => array(
		'type' => 'text',
		'value' => esc_attr__('Partner Logo', 'vmedspatx' ),
	),
	'settings'    => 'partner_repeater',
	'choices' => array(
		'limit' => 3
	),
	'active_callback' => array(
		array(
			'setting'  => 'partners',
			'operator' => '==',
			'value'    => true,
		),
	),
	'default'     => array(
		array(
			'partner_link'  => esc_url('#', 'vmedspatx'),
			'partner_img' => esc_url('#', 'vmedspatx'),
		),
		array(
			'partner_link'  => esc_url('#', 'vmedspatx'),
			'partner_img' => esc_url('#', 'vmedspatx'),
		),
	),
	'fields' => array(
		'partner_link' => array(
			'type'        => 'text',
			'label'       => esc_attr__( 'Partner Link', 'vmedspatx' ),
			'description' => esc_attr__( 'Link should be include https://', 'vmedspatx' ),
			'default'     => '',
		),
		'partner_img' => array(
			'type'        => 'image',
			'label'       => esc_attr__( 'Partner logo image', 'vmedspatx' ),
			'description' => esc_attr__( 'Upload Partner logo image', 'vmedspatx' ),
			'default'     => '',
		),
	)
));

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


