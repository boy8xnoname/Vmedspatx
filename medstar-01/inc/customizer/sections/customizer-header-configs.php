<?php
/**
 * Logo section
 *
 * @package medstar01
 */


Kirki::add_field( 
	'medstar01',
	[
		'type'        => 'switch',
		'settings'    => 'is_header_sticky',
		'label'       => esc_html__( 'On/Off header sticky', 'medstar01' ),
		'section'     => 'title_tagline',
		'default'     => 'off',
		'priority'    => 5,
		'choices'     => [
			'on'  => esc_html__( 'On', 'medstar01' ),
			'off' => esc_html__( 'Off', 'medstar01' ),
		],
	] 
);

Kirki::add_field( 
	'medstar01',
	[
		'type'        => 'switch',
		'settings'    => 'is_header_fully_visible',
		'label'       => esc_html__( 'On/Off header fully visible', 'medstar01' ),
		'section'     => 'title_tagline',
		'default'     => 'off',
		'priority'    => 5,
		'choices'     => [
			'on'  => esc_html__( 'On', 'medstar01' ),
			'off' => esc_html__( 'Off', 'medstar01' ),
		],
	] 
);
