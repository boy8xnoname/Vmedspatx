<?php
/**
 * Floating Mobile Phone Button
 *
 * @package kristinkirkpatrick
 */


Kirki::add_field( 'medstar01', [
	'type'     => 'text',
	'settings' => 'floating_phone_number',
	'label'    => __( 'Phone Number', 'medstar01' ),
	'section'  => 'section_floating_phone_button',
	'default'  => '#',
	'priority' => 10,
] );

Kirki::add_field( 'medstar01', [
	'type'     => 'color',
	'settings' => 'floating_phone_bg_color',
	'label'    => __( 'Background Color', 'medstar01' ),
	'section'  => 'section_floating_phone_button',
	'default'  => '#',
	'priority' => 15,
] );

Kirki::add_field( 'medstar01', [
	'type'     => 'color',
	'settings' => 'floating_phone_color',
	'label'    => __( 'Number Color', 'medstar01' ),
	'section'  => 'section_floating_phone_button',
	'default'  => '#',
	'priority' => 20,
] );