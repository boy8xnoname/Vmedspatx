<?php
/**
 * Logo section
 *
 * @package medstar01
 */

$section  = 'title_tagline';
$priority = 99;

Kirki::add_field(
	'medstar01',
	array(
		'type'        => 'image',
		'settings'    => 'logo',
		'label'       => esc_html__( 'Logo', 'medstar01' ),
		'description' => esc_html__( 'Select an image file for your logo.', 'medstar01' ),
		'section'     => $section,
		'priority'    => $priority ++,
		'default'     => '',
	)
);
