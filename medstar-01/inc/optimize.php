<?php

add_filter( 'script_loader_tag', function ( $tag, $handle ) {
	if(is_admin()) return $tag;
	if ( strpos( $tag, 'jquery' ) ) return $tag;
	return str_replace( ' src', ' defer="defer" src', $tag );
}, 10, 2 );

add_action( 'wp_enqueue_scripts', 'mywptheme_child_deregister_styles', 20 );
function mywptheme_child_deregister_styles() {
	wp_dequeue_style( 'classic-theme-styles' );
	wp_dequeue_style( 'gravity_forms_theme_framework' );
}

add_filter( 'gform_disable_form_theme_css', '__return_true' );