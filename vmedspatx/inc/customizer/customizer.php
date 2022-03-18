<?php
/**
 * vmedspatxrmineTheme Customizer
 *
 * @package vmedspatx
 */

/**
 * Remove unused native sections and controls
 *
 * @param object $wp_customize WPCustomizer instance.
 */
function vmedspatx_customizer_sections( $wp_customize ) {
	// $wp_customize->remove_control( 'custom_logo' );
	// $wp_customize->remove_section( 'background_image' );
	// $wp_customize->remove_section( 'colors' );
	// $wp_customize->remove_section( 'header_image' );
	// $wp_customize->remove_section( 'nav' );
}
add_action( 'customize_register', 'vmedspatx_customizer_sections' );


/**
 * Add sections
 */
if ( is_plugin_active( 'kirki/kirki.php' ) ) {	// Setup configuration.
	Kirki::add_config(
		'vmedspatx',
		array(
			'option_type' => 'theme_mod',
			'capability'  => 'edit_theme_options',
		)
	);

	Kirki::add_panel( 'vmedspatx_theme_options', array(
		'priority'    => 40,
		'title'       => esc_html__( 'Vmedspatx Theme Options', 'vmedspatx' ),
		'description' => esc_html__( 'This is theme option for website vmedspatx', 'vmedspatx' ),
		'icon' => 'dashicons-admin-generic',
	) );

	// vmedspatx Header Setting	
	Kirki::add_section( 
		'title_tagline', 
		array(
            'priority'       => 5,
            'title'          => __( 'Vmedspatx Site Identity (Logo, Favicon, Tags...)' ),
            'icon'           => 'dashicons-media-code',
            'description'    => '',
            'panel'          => 'vmedspatx_theme_options',
		) 
	);

	// vmedspatx Header Setting
	Kirki::add_section(
		'section_header_configs',
		array(
			'priority'       => 10,
			'capability'     => 'edit_theme_options',
			'theme_supports' => '',
			'title'          => esc_html__( 'vmedspatx Header Setting', 'vmedspatx' ),
			'icon' => 'dashicons-schedule',
			'description'    => '',
			'panel'          => 'vmedspatx_theme_options',
		)
	);

	// vmedspatx Footer Setting
	Kirki::add_section(
		'section_footer_config',
		array(
			'priority'       => 15,
			'capability'     => 'edit_theme_options',
			'theme_supports' => '',
			'title'          => esc_html__( 'vmedspatx Footer Setting', 'vmedspatx' ),
			'description'    => '',
			'icon' => 'dashicons-schedule',
			'panel'          => 'vmedspatx_theme_options',
		)
	);

	// vmedspatx Home Layout  Setting
	Kirki::add_section(
		'section_home_layout_settings',
		array(
			'priority'       => 15,
			'capability'     => 'edit_theme_options',
			'theme_supports' => '',
			'title'          => esc_html__( 'Home Layout Setting', 'vmedspatx' ),
			'description'    => '',
			'icon' => 'dashicons-admin-home',
			'panel'          => 'vmedspatx_theme_options',
		)
	);

	// vmedspatx Teams Setting
	Kirki::add_section(
		'section_single_team_layout_settings',
		array(
			'priority'       => 15,
			'capability'     => 'edit_theme_options',
			'theme_supports' => '',
			'title'          => esc_html__( 'Team Settings', 'vmedspatx' ),
			'description'    => '',
            'icon'           => 'dashicons-admin-users',
			'panel'          => 'vmedspatx_theme_options',
		)
	);

    // vmedspatx Events Setting
    Kirki::add_section(
        'section_single_events_settings',
        array(
            'priority'       => 16,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => esc_html__( 'Event Settings', 'vmedspatx' ),
            'description'    => '',
            'icon'           => 'dashicons-rest-api',
            'panel'          => 'vmedspatx_theme_options',
        )
    );

	// vmedspatx Social Link Setting
	Kirki::add_section(
		'section_social_links',
		array(
			'priority'       => 20,
			'capability'     => 'edit_theme_options',
			'theme_supports' => '',
			'title'          => esc_html__( 'vmedspatx Social Links Configs', 'vmedspatx' ),
			'description'    => '',
			'icon'           => 'dashicons-twitter',
			'panel'          => 'vmedspatx_theme_options',
			
		)
	);

    // vmedspatx API Setting
    Kirki::add_section(
        'section_api',
        array(
            'priority'       => 25,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => esc_html__( 'vmedspatx API Configs', 'vmedspatx' ),
            'description'    => '',
            'icon'           => 'dashicons-database-import',
            'panel'          => 'vmedspatx_theme_options',

        )
    );

    // vmedspatx Cron-job Settings
    Kirki::add_section(
        'section_cronjob',
        array(
            'priority'       => 30,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => esc_html__( 'vmedspatx Cron-job Configs', 'vmedspatx' ),
            'description'    => '',
            'icon'           => 'dashicons-backup',
            'panel'          => 'vmedspatx_theme_options',

        )
    );

	require_once get_theme_file_path( '/inc/customizer/sections/customizer-identity-configs.php' );
	require_once get_theme_file_path( '/inc/customizer/sections/customizer-header-configs.php' );
	require_once get_theme_file_path( '/inc/customizer/sections/customizer-footer-configs.php' );
	require_once get_theme_file_path( '/inc/customizer/sections/customizer-home-layout-setting.php' );
	require_once get_theme_file_path( '/inc/customizer/sections/customizer-team-layout-setting.php' );
    require_once get_theme_file_path( '/inc/customizer/sections/customizer-event-settings.php' );
	require_once get_theme_file_path( '/inc/customizer/sections/customizer-social-links.php' );
    require_once get_theme_file_path( '/inc/customizer/sections/customizer-api.php' );
    require_once get_theme_file_path( '/inc/customizer/sections/customizer-cronjob.php' );
}