<?php
/**
 * Logo section
 *
 * @package vmedspatx
 */

$section  = 'title_tagline';
$priority = 99;

Kirki::add_field(
	'vmedspatx',
	array(
		'type'        => 'image',
		'settings'    => 'logo',
		'label'       => esc_html__( 'Logo', 'vmedspatx' ),
		'description' => esc_html__( 'Select an image file for your logo.', 'vmedspatx' ),
		'section'     => $section,
		'priority'    => $priority ++,
		'default'     => '',
	)
);
