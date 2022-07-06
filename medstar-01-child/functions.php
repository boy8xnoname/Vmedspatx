<?php

add_action( 'wp_enqueue_scripts', 'medstar_child_enqueue_styles');
function medstar_child_enqueue_styles() {
	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/style.css', '' );
}