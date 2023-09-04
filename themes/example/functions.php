<?php

function example_theme_scripts() {
	wp_enqueue_style( 'styles', get_template_directory_uri() . '/dist/styles.css', false, '0.0.0', 'all' );
}

add_action( 'wp_enqueue_scripts', 'example_theme_scripts' );
