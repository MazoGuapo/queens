<?php
// JS
add_action( 'wp_footer', 'scripts_gsap' ); 

function scripts_gsap() { 
    wp_register_script('scripts_theme_gsap', get_template_directory_uri() . '/library/gsap/gsap.js' );  
    wp_enqueue_script('scripts_theme_gsap');
}