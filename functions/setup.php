<?php

/*----------------------------------*/
/*--- THEME SUPPORTS AND PRESETS ---*/
/*----------------------------------*/
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

/*----------------------------------*/
/*------------ LIBRARIES -----------*/
/*----------------------------------*/
// require_once('library/google_maps/google_maps.php');

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

/*----------------------------------*/
/*----------- CSS THEME ------------*/
/*----------------------------------*/
add_action( 'wp_enqueue_scripts', 'styles_theme' );

function styles_theme() {
  wp_register_style( 'styles_theme_style', get_template_directory_uri() .'/dist/assets/css/style.min.css');
  wp_enqueue_style( 'styles_theme_style' );
}

/*----------------------------------*/
/*----------- JS THEME -------------*/
/*----------------------------------*/

add_action( 'wp_footer', 'scripts_theme' );

function scripts_theme() {
  wp_register_script('scripts_theme_main', get_template_directory_uri() . '/dist/assets/js/main.bundle.js' );
  wp_enqueue_script('scripts_theme_main');
}

/*----------------------------------*/
/*----------- JS THEME -------------*/
/*----------------------------------*/
function admin_style() {
  wp_enqueue_style('admin-styles', get_stylesheet_directory_uri().'/dist/assets/css/admin.css');
}
add_action('admin_enqueue_scripts', 'admin_style');

/*----------------------------------*/
/*-------- TAMAÑOS IMAGENES --------*/
/*----------------------------------*/
add_image_size( 'theme_full', 2500, 2500 );
add_image_size( 'theme_xlarge', 1920, 1080, true );
add_image_size( 'theme_large', 1440, 810, true );
add_image_size( 'theme_medium', 960, 600, true );
add_image_size( 'theme_small', 760, 450, true );
add_image_size( 'theme_xsmall', 250, 250, true );
add_image_size( 'theme_carousel', 900, 750, true );

/*----------------------------------*/
/*------ THEME SETTINS - AFC -------*/
/*----------------------------------*/
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
      'page_title'  => 'Theme General Settings',
      'menu_title'  => 'Theme Settings',
      'menu_slug'   => 'theme-general-settings',
      'capability'  => 'edit_posts',
      'redirect'    => false,
    ));
  }

/*----------------------------------*/
/*--------- REGISTER MENUS ---------*/
/*----------------------------------*/
register_nav_menus( array(
    'primary' => __( 'Main Menu', 'demo' ),
    'secondary' => __( 'Footer Menu 01', 'demo' ),
    'third' => __( 'Footer Menu 02', 'demo' ),
    'fourth' => __( 'Footer Menu 03', 'demo' ),
));

/*----------------------------------*/
/*---------- SLUG STRING -----------*/
/*----------------------------------*/
function slugify($string) {
  $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string)));
  return $slug;
}