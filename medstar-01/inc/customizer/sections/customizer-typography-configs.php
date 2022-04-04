<?php

Kirki::add_field( 
	'vmedspatx',
	[
		'type'        => 'switch',
		'settings'    => 'use_google_font',
		'label'       => esc_html__( 'Use Google Font for website', 'kirki' ),
		'section'     => 'typography',
		'default'     => '0',
		'priority'    => 5,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'kirki' ),
			'off' => esc_html__( 'Disable', 'kirki' ),
		],
	] 
);


$choices = [
    'fonts' => [
        'google'   => [],
        'families' => [
            'custom' => [
                'text'     => 'Label for your custom fonts in the control',
                'children' => [
                    [ 'id' => 'helvetica-neue', 'text' => 'Helvetica Neue' ],
                    [ 'id' => 'linotype-authentic', 'text' => 'Linotype Authentic' ],
                ],
            ],
        ],
        'variants' => [
            'helvetica-neue'     => array( 'regular', '900i' ),
            'linotype-authentic' => array( 'regular', '100', '300' ),
        ],
    ],
];


Kirki::add_field( 'vmedspatx', [
    'type'        => 'typography',
    'settings'    => 'typography_setting',
    'label'       => esc_html__( 'Global font', 'text-domain' ),
    'section'     => 'typography',
    'default'     => [
        'font-family'    => 'Roboto',
    ],
    'choices'   => $choices, //I explain this below
    'priority'    => 10,
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => 'body',
        ],
    ],
    'active_callback'  => [
		[
			'setting'  => 'use_google_font',
			'operator' => '==',
			'value'    => true,
		],
	
	]
] );


Kirki::add_field( 'vmedspatx', [
    'type'        => 'typography',
    'settings'    => 'heading_typography_setting',
    'label'       => esc_html__( 'Heading font', 'text-domain' ),
    'section'     => 'typography',
    'default'     => [
        'font-family'    => 'Roboto',
    ],
    'choices'   => $choices, //I explain this below
    'priority'    => 10,
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => 'h1, h2, h3, h4,.card-content p',
        ],
    ],
    'active_callback'  => [
		[
			'setting'  => 'use_google_font',
			'operator' => '==',
			'value'    => true,
		],
	
	]
] );