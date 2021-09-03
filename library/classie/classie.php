<?php

// JS
add_action( 'wp_footer', 'scripts_classie' ); 

function scripts_classie() { 
    wp_register_script('scripts_theme_classie', get_template_directory_uri() . '/library/classie/classie.js' ); 
    wp_enqueue_script('scripts_theme_classie');
}