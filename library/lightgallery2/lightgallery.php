<?php

// CSS
add_action( 'wp_enqueue_scripts', 'styles_lightgallery' );

function styles_lightgallery() {
    wp_register_style( 'styles_lightgallery_1', get_template_directory_uri() .'/library/lightgallery2/css/lightgallery.css');
	wp_register_style( 'styles_lightgallery_2', get_template_directory_uri() .'/library/lightgallery2/css/lg-video.css');
	// wp_register_style( 'styles_lightgallery_3', get_template_directory_uri() .'/library/lightgallery2/css/lg-zoom.css');

    wp_enqueue_style( 'styles_lightgallery_1' );
    wp_enqueue_style( 'styles_lightgallery_2' );
    // wp_enqueue_style( 'styles_lightgallery_3' );
}

// JS
add_action( 'wp_footer', 'scripts_lightgallery' );

function scripts_lightgallery() {

    wp_register_script('scripts_theme_lightgallery_1', get_template_directory_uri() . '/library/lightgallery2/lightgallery.min.js' );
	wp_register_script('scripts_theme_lightgallery_2', get_template_directory_uri() . '/library/lightgallery2/player.js'  );
	wp_register_script('scripts_theme_lightgallery_3', get_template_directory_uri() . '/library/lightgallery2/plugins/video/lg-video.min.js' );
	wp_register_script('scripts_theme_lightgallery_4', get_template_directory_uri() . '/library/lightgallery2/plugins/autoplay/lg-autoplay.min.js' );
	// wp_register_script('scripts_theme_lightgallery_5', get_template_directory_uri() . '/library/lightgallery2/plugins/zoom/lg-zoom.min.js' );

    wp_enqueue_script('scripts_theme_lightgallery_1');
    wp_enqueue_script('scripts_theme_lightgallery_2');
    wp_enqueue_script('scripts_theme_lightgallery_3');
    wp_enqueue_script('scripts_theme_lightgallery_4');
    // wp_enqueue_script('scripts_theme_lightgallery_5');
}