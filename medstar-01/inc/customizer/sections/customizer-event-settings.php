<?php

Kirki::add_field( 'vmedspatx', [
    'type'        => 'number',
    'settings'    => 'vmedspatx_delete_old_events_days',
    'label'       => esc_html__( 'Delete the older events after ? day', 'vmedspatx' ),
    'section'     => 'section_single_events_settings',
    'default'     => 3,
    'placeholder' => esc_html__( 'To reduce the size of database.', 'vmedspatx' ),
    'priority'    => 15,
    'choices'     => [
        'min'  => 1,
        'max'  => 10,
        'step' => 1,
    ],
] );

Kirki::add_field(
    'vmedspatx',
    array(
        'type'        => 'image',
        'settings'    => 'vmedspatx_event_watch_live_banner',
        'label'       => esc_html__( 'Event Watch Live Banner', 'vmedspatx' ),
        'description' => esc_html__( 'Select an image file for watch live banner.', 'vmedspatx' ),
        'section'     => 'section_single_events_settings',
        'priority'    => 20,
        'default'     => '',
    )
);

Kirki::add_field(
    'vmedspatx',
    array(
        'type'        => 'image',
        'settings'    => 'vmedspatx_event_parallax_banner',
        'label'       => esc_html__( 'Event Parallax Odds Banner', 'vmedspatx' ),
        'description' => esc_html__( 'Select an image file for event parallax banner.', 'vmedspatx' ),
        'section'     => 'section_single_events_settings',
        'priority'    => 20,
        'default'     => '',
    )
);