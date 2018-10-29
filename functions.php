<?php 

function enqueue_styles() {
 
    $parent_style = 'tainacan-interface';
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'tainacan-Programadora-Brasil',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );

function carousel_files() {
    wp_enqueue_script('call-carousel', get_theme_file_uri('/assets/js/base.js'), null, microtime(), true);
}
add_action('wp_enqueue_scripts','carousel_files');