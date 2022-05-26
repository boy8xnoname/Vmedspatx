<?php

Kirki::add_field( 
	'medstar01',
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


Kirki::add_field( 'medstar01', [
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


Kirki::add_field( 'medstar01', [
    'type'        => 'typography',
    'settings'    => 'header_footer_typography_setting',
    'label'       => esc_html__( 'Header/Footer Custom font', 'text-domain' ),
    'section'     => 'typography',
    'default'     => [
        'font-family'    => 'Manjari',
    ],
    'choices'   => $choices, //I explain this below
    'priority'    => 10,
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.site-header h1, .site-header  h2,.site-header  h3, .site-header h4, .site-header  p, .site-header a, .site-footer h1, .site-footer h2,.site-footer  h3, .site-footer h4, .site-footer  p, .site-footer a',
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


Kirki::add_field( 'medstar01', [
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