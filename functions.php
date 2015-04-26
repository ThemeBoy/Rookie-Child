<?php
/**
 * Add or remove actions here to control the output of scripts and stylesheets.
 */
function rookie_child_scripts() {
	remove_action( 'wp_print_scripts', 'rookie_custom_colors', 30 );
}
add_action( 'wp_enqueue_scripts', 'rookie_child_scripts', 11 );
