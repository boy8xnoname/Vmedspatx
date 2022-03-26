<?php
Kirki::add_field( 
	'vmedspatx',
	[
		'type'        => 'switch',
		'settings'    => 'use_custom_color',
		'label'       => esc_html__( 'Use custom color for website', 'kirki' ),
		'section'     => 'vmedspatx_colors',
		'default'     => '0',
		'priority'    => 5,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'kirki' ),
			'off' => esc_html__( 'Disable', 'kirki' ),
		],
	] 
);

Kirki::add_field( 
    'vmedspatx',
    [
        'type'        => 'color',
		'settings'    => 'color_setting_hex',
		'label'       => __( 'Color Control (hex only)', 'kirki' ),
		'description' => esc_html__( 'Regular color control, no alpha channel.', 'kirki' ),
		'section'     => 'vmedspatx_colors',
		'default'     => '#0008DC',
        'active_callback'  => [
            [
                'setting'  => 'use_custom_color',
                'operator' => '==',
                'value'    => true,
            ],
        
        ]
	]
);

?>