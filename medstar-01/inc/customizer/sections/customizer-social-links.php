<?php
/**
 * Logo section
 *
 * @package kristinkirkpatrick
 */


Kirki::add_field( 'medstar01', [
	'type'     => 'link',
	'settings' => 'facebook',
	'label'    => __( 'Facebook Link', 'medstar01' ),
	'section'  => 'section_social_links',
	'default'  => '#',
	'priority' => 10,
] );

Kirki::add_field( 'medstar01', [
	'type'     => 'link',
	'settings' => 'twitter',
	'label'    => __( 'Twitter Link', 'medstar01' ),
	'section'  => 'section_social_links',
	'default'  => '#',
	'priority' => 15,
] );

Kirki::add_field( 'medstar01', [
	'type'     => 'link',
	'settings' => 'instagram',
	'label'    => __( 'Instagram Link', 'medstar01' ),
	'section'  => 'section_social_links',
	'default'  => '#',
	'priority' => 20,
] );

Kirki::add_field( 'medstar01', [
	'type'     => 'link',
	'settings' => 'youtube',
	'label'    => __( 'Youtube Link', 'medstar01' ),
	'section'  => 'section_social_links',
	'default'  => '#',
	'priority' => 20,
] );