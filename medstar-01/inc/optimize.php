<?php

/**
 * Move jQuery to the footer.
 */
function wpse_173601_enqueue_scripts() {
	wp_scripts()->add_data( 'jquery', 'group', 1 );
	wp_scripts()->add_data( 'jquery-core', 'group', 1 );
	wp_scripts()->add_data( 'jquery-migrate', 'group', 1 );
}
add_action( 'wp_enqueue_scripts', 'wpse_173601_enqueue_scripts' );

function remove_jquery_migrate( $scripts ) {

	if ( ! is_admin() && isset( $scripts->registered['jquery'] ) ) {

		$script = $scripts->registered['jquery'];

		if ( $script->deps ) {
			$script->deps = array_diff( $script->deps, array( 'jquery-migrate' ) );
		}
	}
}
add_action( 'wp_default_scripts', 'remove_jquery_migrate' );

add_filter( 'script_loader_tag', function ( $tag, $handle ) {
	if(is_admin()) return $tag;

	if ( strpos( $tag, 'jquery' ) || strpos( $tag, 'defer="defer"' ) || strpos( $tag, '/wp-includes/js/dist/' ) ) return $tag;

	return str_replace( ' src', ' defer="defer" src', $tag );
}, 10, 2 );

add_action( 'wp_enqueue_scripts', 'medstar_child_deregister_styles', 999 );
function medstar_child_deregister_styles() {
	wp_dequeue_style( 'classic-theme-styles' );
	wp_dequeue_style( 'gravity_forms_theme_framework' );
	wp_deregister_style( 'gravity_forms_theme_framework' );
	wp_dequeue_style( 'gravity_forms_orbital_theme' );
	wp_deregister_style( 'gravity_forms_orbital_theme' );
}

add_filter( 'gform_disable_form_theme_css', '__return_true' );

/**
 * Disable the emoji's
 */
function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );

	// Remove from TinyMCE
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );

/**
 * Filter out the tinymce emoji plugin.
 */
function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}