<?php

// CSS
add_action( 'wp_enqueue_scripts', 'styles_image_compare' );

function styles_image_compare() {
    wp_register_style( 'styles_theme_image_compare', get_template_directory_uri() .'/library/image-compare/image-compare-viewer.min.css' );
    wp_enqueue_style( 'styles_theme_image_compare' );
}

// JS
add_action( 'wp_footer', 'scripts_image_compare' );

function scripts_image_compare() {
    wp_register_script('scripts_theme_imagen_compare', get_template_directory_uri() . '/library/image-compare/image-compare-viewer.min.js' );
     wp_enqueue_script('scripts_theme_imagen_compare');
}