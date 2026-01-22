<?php
/**
 * Infobasic Theme Functions
 */

// Configuración del tema
function infobasic_config() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
    
    // Registrar menú de navegación
    register_nav_menus( array(
        'primary-menu' => esc_html__( 'Menú Principal', 'infobasic' ),
        'footer-menu'  => esc_html__( 'Menú del Pie', 'infobasic' ),
    ) );
}
add_action( 'after_setup_theme', 'infobasic_config', 0 );

// Enqueue scripts y estilos
function infobasic_scripts() {
    wp_enqueue_script( 'bootstrap_js', get_theme_file_uri( 'inc/js/bootstrap.bundle.min.js' ), array(), '5.3.3', true );
    wp_enqueue_style( 'bootstrap_css', get_theme_file_uri( 'inc/css/bootstrap.min.css' ), array(), '5.3.3', 'all' );
    wp_enqueue_style( 'infobasic-style', get_stylesheet_uri(), array(), '1.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'infobasic_scripts' );