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
	'label'       => esc_attr__( 'Locations setup', 'vmedspatx' ),
	'section'     => 'section_footer_config',
	'priority'    => 3,
	'row_label' => array(
		'type' => 'text',
		'value' => esc_attr__('Our Location', 'vmedspatx' ),
	),
	'settings'    => 'location_repeater',
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
			'location_title'  => esc_attr('', 'vmedspatx'),
			'location_phone_number'  => esc_attr('', 'vmedspatx'),
			'location_address'  => esc_attr('', 'vmedspatx'),
			'location_google_map_url'  => esc_url('', 'vmedspatx'),
		),
	
	),
	'fields' => array(
		'location_title' => array(
			'type'        => 'text',
			'label'       => esc_attr__( 'Location Title', 'vmedspatx' ),
			'description' => esc_attr__( 'Example: Dallas', 'vmedspatx' ),
			'default'     => '',
		),
		'location_phone_number' => array(
			'type'        => 'text',
			'label'       => esc_attr__( 'Location Phone Number', 'vmedspatx' ),
			'description' => esc_attr__( 'Example: xxx-xxx-xxxx', 'vmedspatx' ),
			'default'     => '',
		),
		'location_address' => array(
			'type'        => 'text',
			'label'       => esc_attr__( 'Location Address', 'vmedspatx' ),
			'description' => esc_attr__( 'Lorem Ipsum has been the industry', 'vmedspatx' ),
			'default'     => '',
		),
		'location_google_map_url' => array(
			'type'        => 'text',
			'label'       => esc_attr__( 'Location Address URL', 'vmedspatx' ),
			'description' => esc_attr__( 'Link should be include https://', 'vmedspatx' ),
			'default'     => '',
		),
	
	)
));

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
		'type'        => 'editor',
		'settings'    => 'time_working',
		'label'       => esc_html__( 'Footer Time Working', 'vmedspatx' ),
		'description' => esc_html__( 'Time working show in footer.', 'vmedspatx' ),
		'section'     => 'section_footer_config',
		'priority' => 10,
		'default'     => '',
	] 
);

Kirki::add_field( 
	'vmedspatx',
	[
		'type'        => 'switch',
		'settings'    => 'show_copyright_content',
		'label'       => esc_html__( 'Show/Hide Copyright text in footer', 'vmedspatx' ),
		'section'     => 'section_footer_config',
		'default'     => '1',
		'priority'    => 5,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'vmedspatx' ),
			'off' => esc_html__( 'Disable', 'vmedspatx' ),
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

Kirki::add_field( 'vmedspatx', [
	'type'        => 'dropdown-pages',
	'settings'    => 'select_privacy_policy',
	'label'       => esc_html__( 'Privacy Policy Pages', 'vmedspatx' ),
	'section'     => 'section_footer_config',
	'default'     => '',
	'priority'    => 10,
] );