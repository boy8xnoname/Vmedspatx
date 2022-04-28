<?php
/**
 * TGMPA Required Plugins.
 *
 * Register the required plugins for this theme.
 *
 * @package unibet
 */

/**
 * Register Plugins list.
 */
function unibet_plugins_list() { // phpcs:ignore Squiz.Scope.MethodScope.Missing

	$plugins = array(	
		array(
			'name'     => 'Kirki Customizer Framework',
			'slug'     => 'kirki',
			'required' => true,
		)
	);

	return $plugins;
}
add_filter( 'tmc_plugins', 'unibet_plugins_list' );

/**
 * Register required plugins
 */
function unibet_register_required_plugins() { // phpcs:ignore Squiz.Scope.MethodScope.Missing

	$plugins = unibet_plugins_list();

	$config = array(
		'id'           => 'unibet',
		// Unique ID for hashing notices for multiple instances of TGMPA.
		'menu'         => 'tgmpa-install-plugins',
		// Menu slug.
		'parent_slug'  =>  'themes.php',
		// Parent menu slug.
		'capability'   => 'manage_options',
		// Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,
		// Show admin notices or not.
		'dismissable'  => false,
		// If false, a user cannot dismiss the nag message.
		'is_automatic' => true,
		// Automatically activate plugins after installation or not.
		'message'      => '',
		// Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'unibet_register_required_plugins' );
