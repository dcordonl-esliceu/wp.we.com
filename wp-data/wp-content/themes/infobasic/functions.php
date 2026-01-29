<?php

require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

function infobasic_config(){
    
    register_nav_menus( 
        array(
        'infobasic_menu-principal' => __( 'infobasic Menu Principal'),
        'infobasic_footer_interno' => __( 'infobasic Menu footer interno'),
        'infobasic_footer_externo' => __( 'infobasic Menu footer externo'),

    ) );
}

add_action('after_setup_theme','infobasic_config', 0);

function infobasic_scripts(){
    wp_enqueue_script('bootstrap_js', get_theme_file_uri('inc/js/bootstrap.bundle.min.js'), array(), '4.5', true);
    wp_enqueue_style('bootstrap_css', get_theme_file_uri('inc/css/bootstrap.min.css'), array(), '4.5', 'all');
    wp_enqueue_style('style_css', get_theme_file_uri('style.css'), array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'infobasic_scripts');
