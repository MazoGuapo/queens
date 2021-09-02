<?php

// JS
add_action( 'wp_footer', 'scripts_pace' ); 

function scripts_pace() { 
	wp_enqueue_script( 'scripts_theme_pace', get_template_directory_uri() . '/library/pace/pace.min.js', array('jquery'), '1.0', true );
}