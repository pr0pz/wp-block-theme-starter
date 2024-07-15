<?php
// Exit if accessed directly.
\defined( 'ABSPATH' ) || exit;

// All infos for theme support:
// https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/
add_theme_support( 'block-template-parts' );
add_theme_support( 'wp-block-styles' );

// Load style.css on front and backend
function prpz_enqueue_stylesheet()
{
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'prpz_enqueue_stylesheet' );
add_action( 'admin_enqueue_scripts', 'prpz_enqueue_stylesheet' );