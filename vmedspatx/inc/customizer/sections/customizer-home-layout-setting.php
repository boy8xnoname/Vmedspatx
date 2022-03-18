<?php

Kirki::add_field( 'vmedspatx', [
	'type'        => 'select',
	'settings'    => 'home_banner_version',
	'label'       => esc_html__( 'Home Banner Version', 'vmedspatx' ),
	'section'     => 'section_home_layout_settings',
	'default'     => 'banner_parallax',
	'placeholder' => esc_html__( 'Select an version of Home Banner', 'vmedspatx' ),
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => [
		'banner_parallax' => esc_html__( 'Banner Parallax Version', 'vmedspatx' ),
		'banner_slider' => esc_html__( 'Banner Slider Version', 'vmedspatx' ),
		
	],
] );

add_action( 'init', function() {
    Kirki::add_field('vmedspatx', [
        'type' => 'select',
        'settings' => 'home_category',
        'label' => esc_html__('Home Sport Categories', 'vmedspatx'),
        'section' => 'section_home_layout_settings',
        'default' => '',
        'placeholder' => esc_html__('Select sport categories will display on home', 'vmedspatx'),
        'priority' => 15,
        'multiple' => 10,
        'choices' => Kirki_Helper::get_terms(array('taxonomy' => 'sports', 'parent' => 0, 'hide_empty' => 0))
    ]);
});