<?php

function infobasic_config(){

    echo "Ejecutando la configuración";
}

add_action('after_setup_theme','infobasic_config', 0);

function infobasic_scripts(){
    wp_enqueue_script('bootstrap_js', get_theme_file_uri('/assets/js/bootstrap.bundle.min.js'), array(), '4.5', true);
    wp_enqueue_style('bootstrap_css', get_theme_file_uri('/assets/css/bootstrap.min.css'), array(), '4.5', 'all');
}