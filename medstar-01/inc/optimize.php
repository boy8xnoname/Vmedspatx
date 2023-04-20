<?php

add_filter( 'script_loader_tag', function ( $tag, $handle ) {
	if(is_admin()) return $tag;
	if ( strpos( $tag, 'jquery' ) ) return $tag;
	return str_replace( ' src', ' defer="defer" src', $tag );
}, 10, 2 );