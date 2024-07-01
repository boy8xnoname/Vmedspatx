<?php

$strings = [3, 'adsc', 'iisds', 'dadn'];
function getWho($s) {
	// Write your code here
	$n = reset($s);
	array_shift($s);
	for($i = 0; $i <= count($s); $i++){
		if($i % 2 == 0){
			echo 'Alex' . PHP_EOL;
		} else {
			echo 'Chris' . PHP_EOL;
		}
	}
}
getWho($strings);

add_action( 'wp_enqueue_scripts', 'medstar_child_enqueue_styles');
function medstar_child_enqueue_styles() {
	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/style.css', '' );
}