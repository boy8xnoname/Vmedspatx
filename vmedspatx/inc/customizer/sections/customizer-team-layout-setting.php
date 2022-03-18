<?php 

Kirki::add_field( 'vmedspatx', [
	'type'        => 'select',
	'settings'    => 'single_team_version',
	'label'       => esc_html__( 'Select Team Layout Version', 'vmedspatx' ),
	'section'     => 'section_single_team_layout_settings',
	'default'     => 'team_logo',
	'placeholder' => esc_html__( 'Select an option...', 'vmedspatx' ),
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => [
		'team_logo' => esc_html__( 'Team Logo', 'vmedspatx' ),
		'team_colours' => esc_html__( 'Team Colours', 'vmedspatx' )
	],
] );