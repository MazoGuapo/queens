<?php
// JS
function scripts_google_maps() {
  wp_enqueue_script( 'google-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyB0UHcsuzHv7ugs-6lqHAqAdALfagGDt90', array(), '3', true );
  wp_enqueue_script( 'google-map-init-contacto', get_template_directory_uri() . '/library/google_maps/google.maps.js', array('google-map', 'jquery'), '0.1', true );
}

add_action( 'wp_enqueue_scripts', 'scripts_google_maps' );

function my_acf_init() {
  acf_update_setting('google_api_key', 'AIzaSyB0UHcsuzHv7ugs-6lqHAqAdALfagGDt90');
}

add_action('acf/init', 'my_acf_init');