<?php
/**
 * Logo section
 *
 * @package kristinkirkpatrick
 */


Kirki::add_field( 'vmedspatx', [
	'type'     => 'link',
	'settings' => 'facebook',
	'label'    => __( 'Facebook Link', 'vmedspatx' ),
	'section'  => 'section_social_links',
	'default'  => '#',
	'priority' => 10,
] );

Kirki::add_field( 'vmedspatx', [
	'type'     => 'link',
	'settings' => 'twitter',
	'label'    => __( 'Twitter Link', 'vmedspatx' ),
	'section'  => 'section_social_links',
	'default'  => '#',
	'priority' => 15,
] );

Kirki::add_field( 'vmedspatx', [
	'type'     => 'link',
	'settings' => 'instagram',
	'label'    => __( 'Instagram Link', 'vmedspatx' ),
	'section'  => 'section_social_links',
	'default'  => '#',
	'priority' => 20,
] );

Kirki::add_field( 'vmedspatx', [
	'type'     => 'link',
	'settings' => 'youtube',
	'label'    => __( 'Youtube Link', 'vmedspatx' ),
	'section'  => 'section_social_links',
	'default'  => '#',
	'priority' => 20,
] );