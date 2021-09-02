<?php

// CSS
add_action( 'wp_enqueue_scripts', 'styles_locomotive_scroll' );

function styles_locomotive_scroll() {
    wp_register_style( 'styles_theme_locomotive_scroll', get_template_directory_uri() .'/library/locomotive/locomotive-scroll.min.css');
    wp_enqueue_style( 'styles_theme_locomotive_scroll' );
}

// JS
add_action( 'wp_footer', 'scripts_locomotive_scroll' );

function scripts_locomotive_scroll() {
    wp_register_script('scripts_theme_locomotive_scroll', get_template_directory_uri() . '/library/locomotive/locomotive-scroll.min.js' );
    wp_enqueue_script('scripts_theme_locomotive_scroll');
}