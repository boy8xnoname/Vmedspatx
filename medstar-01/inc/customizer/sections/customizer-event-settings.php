<?php

Kirki::add_field( 'medstar01', [
    'type'        => 'number',
    'settings'    => 'medstar01_delete_old_events_days',
    'label'       => esc_html__( 'Delete the older events after ? day', 'medstar01' ),
    'section'     => 'section_single_events_settings',
    'default'     => 3,
    'placeholder' => esc_html__( 'To reduce the size of database.', 'medstar01' ),
    'priority'    => 15,
    'choices'     => [
        'min'  => 1,
        'max'  => 10,
        'step' => 1,
    ],
] );

Kirki::add_field(
    'medstar01',
    array(
        'type'        => 'image',
        'settings'    => 'medstar01_event_watch_live_banner',
        'label'       => esc_html__( 'Event Watch Live Banner', 'medstar01' ),
        'description' => esc_html__( 'Select an image file for watch live banner.', 'medstar01' ),
        'section'     => 'section_single_events_settings',
        'priority'    => 20,
        'default'     => '',
    )
);

Kirki::add_field(
    'medstar01',
    array(
        'type'        => 'image',
        'settings'    => 'medstar01_event_parallax_banner',
        'label'       => esc_html__( 'Event Parallax Odds Banner', 'medstar01' ),
        'description' => esc_html__( 'Select an image file for event parallax banner.', 'medstar01' ),
        'section'     => 'section_single_events_settings',
        'priority'    => 20,
        'default'     => '',
    )
);