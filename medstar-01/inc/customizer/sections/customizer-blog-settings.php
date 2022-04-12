<?php
Kirki::add_field(
    'medstar01',
    array(
        'type'        => 'image',
        'settings'    => 'sidebar_contact_form_logo_image',
        'label'       => esc_html__( 'Single Blog Sidebar Form Image', 'medstar01' ),
        'description' => esc_html__( 'Select an image file for Single Blog Sidebar Form Image.', 'medstar01' ),
        'section'     => 'section_blog_settings',
        'priority'    => 10,
        'default'     => '',
    )
);

Kirki::add_field( 'medstar01', [
	'type'     => 'text',
	'settings' => 'sidebar_contact_us_before_form_title',
	'label'    => __( 'Single Blog Sidebar Form Title', 'medstar01' ),
	'section'  => 'section_blog_settings',
	'default'  => '',
	'priority' => 10,
] );

Kirki::add_field( 'medstar01', [
	'type'     => 'text',
	'settings' => 'sidebar_contact_form_short_code',
	'label'    => __( 'Single Blog Sidebar Form Short code', 'medstar01' ),
	'section'  => 'section_blog_settings',
	'default'  => '',
	'priority' => 10,
] );


Kirki::add_field( 'medstar01', [
	'type'     => 'text',
	'settings' => 'sidebar_contact_form_short_code_bottom',
	'label'    => __( 'Single Blog Sidebar Form Short code show in Bottom', 'medstar01' ),
	'section'  => 'section_blog_settings',
	'default'  => '',
	'priority' => 10,
] );

Kirki::add_field( 
	'medstar01',
	[
		'type'        => 'editor',
		'settings'    => 'sidebar_contact_us_form_description',
		'label'       => esc_html__( 'Single Blog Sidebar Form Disclaimer Text', 'medstar01' ),
		'description' => esc_html__( 'Add Copyright text here.', 'medstar01' ),
		'section'     => 'section_blog_settings',
		'priority' => 10,
		'default'     => '',
	] 
);

