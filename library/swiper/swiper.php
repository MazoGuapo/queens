<?php

// CSS
add_action( 'wp_enqueue_scripts', 'styles_swiper' );

function styles_swiper() {
    wp_register_style( 'styles_theme_swiper', get_template_directory_uri() .'/library/swiper/swiper-bundle.min.css' );
    wp_enqueue_style( 'styles_theme_swiper' );
}

// JS
add_action( 'wp_footer', 'scripts_swiper' );

function scripts_swiper() {
    wp_register_script('scripts_theme_swiper', get_template_directory_uri() . '/library/swiper/swiper-bundle.min.js' );
     wp_enqueue_script('scripts_theme_swiper');
}