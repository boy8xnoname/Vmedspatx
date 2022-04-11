<?php
/**
 * Logo section
 *
 * @package medstar01
 */

Kirki::add_field( 'medstar01', [
	'type'        => 'slider',
	'settings'    => 'logo_max_width',
	'label'       => esc_html__( 'Logo Max Width', 'medstar01' ),
	'section'     => 'title_tagline',
	'default'     => 200,
    'priority' => 10,
	'choices'     => [
		'min'  => 0,
		'max'  => 360,
		'step' => 1,
	],
    'output'      => [
		[
			'element' => '.site-branding img',
            'property' => 'width',
		],
	],
] );
