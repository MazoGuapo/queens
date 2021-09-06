<?php

// Main JS
add_action( 'wp_footer', 'scripts_scrollMagic_main' );

function scripts_scrollMagic_main() {
    wp_register_script('scripts_theme_scrollmagic-main', get_template_directory_uri() . '/library/scrollmagic/scrollMagic.js' );
    wp_enqueue_script('scripts_theme_scrollmagic-main');
}
// Indicators JS
add_action( 'wp_footer', 'scripts_scrollMagic_animation' );
function scripts_scrollMagic_animation() {
    wp_register_script('scripts_theme_scrollmagic-animation', get_template_directory_uri() . '/library/scrollmagic/animation.gsap.js' );
    wp_enqueue_script('scripts_theme_scrollmagic-animation');
}

// Indicators JS
add_action( 'wp_footer', 'scripts_scrollMagic_indicator' );

function scripts_scrollMagic_indicator() {
    wp_register_script('scripts_theme_scrollmagic-indicators', get_template_directory_uri() . '/library/scrollmagic/debug.addIndicators.js' );
    wp_enqueue_script('scripts_theme_scrollmagic-indicators');
}
add_action( 'wp_footer', 'scripts_scrollMagic_tween' );

function scripts_scrollMagic_tween() {
    wp_register_script('scripts_theme_scrollmagic-tween', get_template_directory_uri() . '/library/scrollmagic/TweenMax.min.js' );
    wp_enqueue_script('scripts_theme_scrollmagic-tween');
}




