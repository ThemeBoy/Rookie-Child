<?php
/**
 * Rookie Child functions and definitions
 *
 * @package Rookie_Child
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 620; /* pixels */
}
if ( ! isset( $full_content_width ) ) {
	$full_content_width = 960; /* pixels */
}

function rookie_child_scripts() {
	wp_enqueue_style( 'rookie-parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'rookie_child_scripts', 11 );
