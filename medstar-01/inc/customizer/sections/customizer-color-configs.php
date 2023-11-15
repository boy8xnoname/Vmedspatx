<?php
Kirki::add_field( 
	'medstar01',
	[
		'type'        => 'switch',
		'settings'    => 'use_custom_color',
		'label'       => esc_html__( 'Use custom color for website', 'kirki' ),
		'section'     => 'medstar01_colors',
		'default'     => '0',
		'priority'    => 5,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'kirki' ),
			'off' => esc_html__( 'Disable', 'kirki' ),
		]
	] 
);

Kirki::add_field( 
    'medstar01',
    [
        'type'        => 'color',
		'settings'    => 'color_setting_hex',
		'label'       => __( 'Global Color Control (hex only)', 'kirki' ),
		'description' => esc_html__( 'Regular color control, no alpha channel.', 'kirki' ),
		'section'     => 'medstar01_colors',
		'default'     => '#0008DC',
        'active_callback'  => [
            [
                'setting'  => 'use_custom_color',
                'operator' => '==',
                'value'    => true,
            ]
        ]
	]
);

Kirki::add_field( 
    'medstar01',
    [
        'type'        => 'color',
		'settings'    => 'second_color_setting_hex',
		'label'       => __( 'Global Color Control (hex only) Hover', 'kirki' ),
		'description' => esc_html__( 'Regular color control, no alpha channel.', 'kirki' ),
		'section'     => 'medstar01_colors',
		'default'     => '#080C77',
        'active_callback'  => [
            [
                'setting'  => 'use_custom_color',
                'operator' => '==',
                'value'    => true,
            ]
        ]
	]
);

Kirki::add_field(
    'medstar01',
    [
        'type'        => 'color',
        'settings'    => 'header_bg_color',
        'label'       => __( 'Header Background Color', 'kirki' ),
        'description' => esc_html__( 'Set the custom background color for header.', 'kirki' ),
        'section'     => 'medstar01_colors',
        'default'     => '',
        'active_callback'  => [
            [
                'setting'  => 'use_custom_color',
                'operator' => '==',
                'value'    => true,
            ]
        ]
    ]
);

Kirki::add_field(
	'medstar01',
	[
		'type'        => 'color',
		'settings'    => 'submenu_mobile_bg_color',
		'label'       => __( 'Submenu Mobile Background Color', 'kirki' ),
		'description' => esc_html__( 'Set the custom background color for submenu item when hover.', 'kirki' ),
		'section'     => 'medstar01_colors',
		'default'     => '#0008DC',
		'active_callback'  => [
			[
				'setting'  => 'use_custom_color',
				'operator' => '==',
				'value'    => true,
			]
		]
	]
);

Kirki::add_field(
    'medstar01',
    [
        'type'        => 'color',
        'settings'    => 'sub_footer_bg_color',
        'label'       => __( 'Sub-footer Background Color', 'kirki' ),
        'description' => esc_html__( 'Set the custom background color for footer.', 'kirki' ),
        'section'     => 'medstar01_colors',
        'default'     => '',
        'active_callback'  => [
            [
                'setting'  => 'use_custom_color',
                'operator' => '==',
                'value'    => true,
            ]
        ]
    ]
);

Kirki::add_field(
    'medstar01',
    [
        'type'        => 'color',
        'settings'    => 'footer_bg_color',
        'label'       => __( 'Footer Background Color', 'kirki' ),
        'description' => esc_html__( 'Set the custom background color for footer.', 'kirki' ),
        'section'     => 'medstar01_colors',
        'default'     => '',
        'active_callback'  => [
            [
                'setting'  => 'use_custom_color',
                'operator' => '==',
                'value'    => true,
            ]
        ]
    ]
);

Kirki::add_field(
    'medstar01',
    [
        'type'        => 'color',
        'settings'    => 'body_link_color',
        'label'       => __( 'Body Links Color', 'kirki' ),
        'description' => esc_html__( 'Set the custom color for body link texts.', 'kirki' ),
        'section'     => 'medstar01_colors',
        'default'     => '',
        'active_callback'  => [
            [
                'setting'  => 'use_custom_color',
                'operator' => '==',
                'value'    => true,
            ]
        ]
    ]
);

Kirki::add_field(
    'medstar01',
    [
        'type'        => 'color',
        'settings'    => 'button_text_color',
        'label'       => __( 'Button Text Color', 'kirki' ),
        'description' => esc_html__( 'Set the custom color for button text.', 'kirki' ),
        'section'     => 'medstar01_colors',
        'default'     => '',
        'active_callback'  => [
            [
                'setting'  => 'use_custom_color',
                'operator' => '==',
                'value'    => true,
            ]
        ]
    ]
);

Kirki::add_field(
    'medstar01',
    [
        'type'        => 'color',
        'settings'    => 'button_text_color_hover',
        'label'       => __( 'Button Text Color Hover', 'kirki' ),
        'description' => esc_html__( 'Set the custom color for hover state of buttons.', 'kirki' ),
        'section'     => 'medstar01_colors',
        'default'     => '',
        'active_callback'  => [
            [
                'setting'  => 'use_custom_color',
                'operator' => '==',
                'value'    => true,
            ]
        ]
    ]
);

Kirki::add_field(
	'medstar01',
	[
		'type'        => 'color',
		'settings'    => 'mobile_nav_button_color',
		'label'       => __( 'Mobile Nav Button Color', 'kirki' ),
		'description' => esc_html__( 'Set the custom color for Mobile Nav button.', 'kirki' ),
		'section'     => 'medstar01_colors',
		'default'     => '',
		'active_callback'  => [
			[
				'setting'  => 'use_custom_color',
				'operator' => '==',
				'value'    => true,
			]
		]
	]
);
