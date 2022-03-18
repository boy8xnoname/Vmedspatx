<?php

$intervals = [
    'every_one_minute' => __('Every 1 minute', 'vmedspatx'),
    'every_five_minute' => __('Every 5 minutes', 'vmedspatx'),
    'hourly' => __('Once Hourly', 'vmedspatx'),
    'twicedaily' => __('Twice Daily', 'vmedspatx'),
    'daily' => __('Once Daily', 'vmedspatx'),
    'weekly' => __('Once Weekly', 'vmedspatx')
];

Kirki::add_field( 'vmedspatx', [
    'type'        => 'select',
    'settings'    => 'vmedspatx_cron_get_events',
    'label'       => esc_html__( 'Cronjob Get The New Events', 'vmedspatx' ),
    'section'     => 'section_cronjob',
    'default'     => '',
    'placeholder' => esc_html__( 'Select interval for getting the new events', 'vmedspatx' ),
    'priority'    => 10,
    'multiple'    => 1,
    'choices'     => $intervals
] );

Kirki::add_field( 'vmedspatx', [
    'type'        => 'number',
    'settings'    => 'vmedspatx_cron_get_events_number',
    'label'       => esc_html__( 'Cronjob Number of Events Per Crawl', 'vmedspatx' ),
    'section'     => 'section_cronjob',
    'default'     => 500,
    'placeholder' => esc_html__( 'Set the number of evernt per cronjob crawling(< 1000 events)', 'vmedspatx' ),
    'priority'    => 15,
    'choices'     => [
        'min'  => 100,
        'max'  => 1000,
        'step' => 100,
    ],
] );

Kirki::add_field( 'vmedspatx', [
    'type'        => 'select',
    'settings'    => 'vmedspatx_cron_update_live_events',
    'label'       => esc_html__( 'Cronjob Get The Live Events', 'vmedspatx' ),
    'section'     => 'section_cronjob',
    'default'     => '',
    'placeholder' => esc_html__( 'Select interval for getting the live events', 'vmedspatx' ),
    'priority'    => 20,
    'multiple'    => 1,
    'choices'     => $intervals
] );