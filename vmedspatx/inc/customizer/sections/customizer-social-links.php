<?php
/**
 * Logo section
 *
 * @package vmedspatx
 */


Kirki::add_field( 'vmedspatx', [
	'type'     => 'link',
	'settings' => 'facebook',
	'label'    => __( 'Facebook Link', 'vmedspatx' ),
	'section'  => 'section_social_links',
	'default'  => 'https://www.facebook.com/vmedspatxscanada/',
	'priority' => 10,
] );

Kirki::add_field( 'vmedspatx', [
	'type'     => 'link',
	'settings' => 'twitter',
	'label'    => __( 'Twitter Link', 'vmedspatx' ),
	'section'  => 'section_social_links',
	'default'  => 'https://twitter.com/EP_Financial',
	'priority' => 15,
] );

Kirki::add_field( 'vmedspatx', [
	'type'     => 'link',
	'settings' => 'instagram',
	'label'    => __( 'Instagram Link', 'vmedspatx' ),
	'section'  => 'section_social_links',
	'default'  => 'https://www.instagram.com/vmedspatxscanada/',
	'priority' => 20,
] );

Kirki::add_field( 'vmedspatx', [
	'type'     => 'link',
	'settings' => 'youtube',
	'label'    => __( 'Youtube Link', 'vmedspatx' ),
	'section'  => 'section_social_links',
	'default'  => 'https://www.youtube.com/channel/UCUEeXDP0xkdRP-OEya975XA',
	'priority' => 20,
] );

Kirki::add_field( 'vmedspatx', [
	'type'     => 'link',
	'settings' => 'pinterest',
	'label'    => __( 'Pinterest Link', 'vmedspatx' ),
	'section'  => 'section_social_links',
	'default'  => 'https://www.pinterest.ca/EPFinancial/',
	'priority' => 20,
] );

Kirki::add_field( 'vmedspatx', [
	'type'     => 'text',
	'settings' => 'envelope',
	'label'    => __( 'Email ID', 'vmedspatx' ),
	'section'  => 'section_social_links',
	'default'  => 'hello@vmedspatxs.ca',
	'priority' => 20,
] );