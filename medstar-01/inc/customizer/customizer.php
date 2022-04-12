<?php
/**
 * medstar01rmineTheme Customizer
 *
 * @package medstar01
 */

/**
 * Remove unused native sections and controls
 *
 * @param object $wp_customize WPCustomizer instance.
 */
function medstar01_customizer_sections( $wp_customize ) {
	// $wp_customize->remove_control( 'custom_logo' );
	// $wp_customize->remove_section( 'background_image' );
	$wp_customize->remove_section( 'colors' );
	// $wp_customize->remove_section( 'header_image' );
	// $wp_customize->remove_section( 'nav' );
}
add_action( 'customize_register', 'medstar01_customizer_sections' );

/**
 * Add sections
 */
Kirki::add_config(
	'medstar01',
	array(
		'option_type' => 'theme_mod',
		'capability'  => 'edit_theme_options',
	)
);

Kirki::add_panel( 'medstar01_theme_options', array(
	'priority'    => 40,
	'title'       => esc_html__( 'Medstar01 Theme Options', 'medstar01' ),
	'description' => esc_html__( 'This is theme option for website medstar01', 'medstar01' ),
	'icon' => 'dashicons-admin-generic',
) );

// medstar01 Header Setting	
Kirki::add_section( 
	'title_tagline', 
	array(
		'priority'       => 5,
		'title'          => __( 'Medstar01 Site Identity (Logo, Favicon, Tags...)' ),
		'icon'           => 'dashicons-media-code',
		'description'    => '',
		'panel'          => 'medstar01_theme_options',
	) 
);

Kirki::add_section( 
	'medstar01_colors', 
	array(
		'priority'       => 5,
		'title'          => __( 'Setup site Color' ),
		'icon'           => 'dashicons-color-picker',
		'description'    => '',
		'panel'          => 'medstar01_theme_options',
	) 
);

Kirki::add_section( 
	'typography', 
	array(
		'priority'       => 5,
		'title'          => __( 'Setup site Typography' ),
		'icon'           => 'dashicons-editor-textcolor',
		'description'    => '',
		'panel'          => 'medstar01_theme_options',
	) 
);


// medstar01 Header Setting
Kirki::add_section(
	'section_header_configs',
	array(
		'priority'       => 10,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => esc_html__( 'Medstar01 Header Setting', 'medstar01' ),
		'icon' => 'dashicons-schedule',
		'description'    => '',
		'panel'          => 'medstar01_theme_options',
	)
);

// medstar01 Footer Setting
Kirki::add_section(
	'section_footer_config',
	array(
		'priority'       => 15,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => esc_html__( 'Medstar01 Footer Setting', 'medstar01' ),
		'description'    => '',
		'icon' => 'dashicons-schedule',
		'panel'          => 'medstar01_theme_options',
	)
);


// medstar01 Events Setting
Kirki::add_section(
	'section_blog_settings',
	array(
		'priority'       => 16,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => esc_html__( 'Medstar01 Blog Settings', 'medstar01' ),
		'description'    => '',
		'icon'           => 'dashicons-rest-api',
		'panel'          => 'medstar01_theme_options',
	)
);

// medstar01 Social Link Setting
Kirki::add_section(
	'section_social_links',
	array(
		'priority'       => 20,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => esc_html__( 'Medstar01 Social Links Configs', 'medstar01' ),
		'description'    => '',
		'icon'           => 'dashicons-twitter',
		'panel'          => 'medstar01_theme_options',
		
	)
);


require_once get_theme_file_path( '/inc/customizer/sections/customizer-identity-configs.php' );
require_once get_theme_file_path( '/inc/customizer/sections/customizer-header-configs.php' );
require_once get_theme_file_path( '/inc/customizer/sections/customizer-footer-configs.php' );
require_once get_theme_file_path( '/inc/customizer/sections/customizer-social-links.php' );
require_once get_theme_file_path( '/inc/customizer/sections/customizer-color-configs.php' );
require_once get_theme_file_path( '/inc/customizer/sections/customizer-typography-configs.php' );
require_once get_theme_file_path( '/inc/customizer/sections/customizer-blog-settings.php' );
