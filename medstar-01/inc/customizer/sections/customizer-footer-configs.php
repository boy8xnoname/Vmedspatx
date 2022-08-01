<?php
/**
 * Logo section
 *
 * @package medstar01
 */

Kirki::add_field(
	'medstar01',
	array(
		'type'        => 'image',
		'settings'    => 'footer_logo',
		'label'       => esc_html__( 'Footer Logo', 'medstar01' ),
		'description' => esc_html__( 'Select an image file for your footer logo.', 'medstar01' ),
		'section'     => 'section_footer_config',
		'priority'    => 1,
		'default'     => '',
	)
);

Kirki::add_field( 'medstar01', array(
	'type'        => 'repeater',
	'label'       => esc_attr__( 'Locations setup', 'medstar01' ),
	'section'     => 'section_footer_config',
	'priority'    => 3,
	'row_label' => array(
		'type' => 'text',
		'value' => esc_attr__('Our Location', 'medstar01' ),
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
			'location_title'  => esc_attr('', 'medstar01'),
			'location_phone_number'  => esc_attr('', 'medstar01'),
			'location_address'  => esc_attr('', 'medstar01'),
			'location_google_map_url'  => esc_url('', 'medstar01'),
		),
	
	),
	'fields' => array(
		'location_title' => array(
			'type'        => 'text',
			'label'       => esc_attr__( 'Location Title', 'medstar01' ),
			'description' => esc_attr__( 'Example: Dallas', 'medstar01' ),
			'default'     => '',
		),
		'location_phone_number' => array(
			'type'        => 'text',
			'label'       => esc_attr__( 'Location Phone Number', 'medstar01' ),
			'description' => esc_attr__( 'Example: xxx-xxx-xxxx', 'medstar01' ),
			'default'     => '',
		),
		'location_address' => array(
			'type'        => 'textarea',
			'label'       => esc_attr__( 'Location Address', 'medstar01' ),
			'description' => esc_attr__( 'Lorem Ipsum has been the industry', 'medstar01' ),
			'default'     => '',
		),
		'location_google_map_url' => array(
			'type'        => 'text',
			'label'       => esc_attr__( 'Location Address URL', 'medstar01' ),
			'description' => esc_attr__( 'Link should be include https://', 'medstar01' ),
			'default'     => '',
		),
	
	)
));

Kirki::add_field( 'medstar01', array(
	'type'        => 'repeater',
	'label'       => esc_attr__( 'Partner Logo', 'medstar01' ),
	'section'     => 'section_footer_config',
	'priority'    => 3,
	'row_label' => array(
		'type' => 'text',
		'value' => esc_attr__('Partner Logo', 'medstar01' ),
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
			'partner_link'  => esc_url('#', 'medstar01'),
			'partner_img' => esc_url('#', 'medstar01'),
		),
		array(
			'partner_link'  => esc_url('#', 'medstar01'),
			'partner_img' => esc_url('#', 'medstar01'),
		),
	),
	'fields' => array(
		'partner_link' => array(
			'type'        => 'text',
			'label'       => esc_attr__( 'Partner Link', 'medstar01' ),
			'description' => esc_attr__( 'Link should be include https://', 'medstar01' ),
			'default'     => '',
		),
		'partner_img' => array(
			'type'        => 'image',
			'label'       => esc_attr__( 'Partner logo image', 'medstar01' ),
			'description' => esc_attr__( 'Upload Partner logo image', 'medstar01' ),
			'default'     => '',
		),
	)
));


Kirki::add_field( 
	'medstar01',
	[
		'type'        => 'editor',
		'settings'    => 'time_working',
		'label'       => esc_html__( 'Footer Time Working', 'medstar01' ),
		'description' => esc_html__( 'Time working show in footer.', 'medstar01' ),
		'section'     => 'section_footer_config',
		'priority' => 10,
		'default'     => '',
	] 
);

Kirki::add_field( 
	'medstar01',
	[
		'type'        => 'editor',
		'settings'    => 'footer_description_text',
		'label'       => esc_html__( 'Footer disclaimer text', 'medstar01' ),
		'description' => esc_html__( 'Add footer disclaimer text here.', 'medstar01' ),
		'section'     => 'section_footer_config',
		'priority' => 10,
		'default'     => '',
	] 
);

Kirki::add_field( 
	'medstar01',
	[
		'type'        => 'switch',
		'settings'    => 'show_copyright_content',
		'label'       => esc_html__( 'Show/Hide Copyright text in footer', 'medstar01' ),
		'section'     => 'section_footer_config',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'medstar01' ),
			'off' => esc_html__( 'Disable', 'medstar01' ),
		],
	] 
);

Kirki::add_field( 
	'medstar01',
	[
		'type'        => 'editor',
		'settings'    => 'copyright_content',
		'label'       => esc_html__( 'Copyright/Terms and Conditions', 'medstar01' ),
		'description' => esc_html__( 'Add Copyright text here.', 'medstar01' ),
		'section'     => 'section_footer_config',
		'priority' => 10,
		'default'     => '',
	] 
);

Kirki::add_field( 'medstar01', [
	'type'        => 'dropdown-pages',
	// 'type'        => 'editor',
	'settings'    => 'select_privacy_policy',
	'label'       => esc_html__( 'Privacy Policy Pages', 'medstar01' ),
	'section'     => 'section_footer_config',
	'default'     => '',
	'priority'    => 10,
] );


Kirki::add_field( 'medstar01', [
	'type'        => 'dropdown-pages',
	// 'type'        => 'editor',
	'settings'    => 'select_terms_of_use',
	'label'       => esc_html__( 'Terms of Use Pages', 'medstar01' ),
	'section'     => 'section_footer_config',
	'default'     => '',
	'priority'    => 10,
] );