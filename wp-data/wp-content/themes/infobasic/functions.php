<?php
/**
 * Infobasic Theme Functions
 */

// Add theme support for WordPress features
function infobasic_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );
}
add_action( 'after_setup_theme', 'infobasic_setup' );

// Enqueue scripts and styles
function infobasic_enqueue_assets() {
    wp_enqueue_style( 'infobasic-style', get_stylesheet_uri() );
    wp_enqueue_script( 'infobasic-script', get_template_directory_uri() . '/js/script.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'infobasic_enqueue_assets' );
