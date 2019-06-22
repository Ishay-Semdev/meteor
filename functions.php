<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
/** Functions Template **/

// ASSET PATHS, CONSTANT PATH TO ASSETS FOR THEME DEVELOPMENT
define('THEME_ASSETS', get_stylesheet_directory_uri() . '/assets');
define('THEME_IMAGES', THEME_ASSETS . '/images');
define('THEME_CSS', THEME_ASSETS . '/css');
define('THEME_JS', THEME_ASSETS . '/js');
define('THEME_LIB', THEME_ASSETS . '/lib');
define('THEME_LIB_CSS', THEME_ASSETS . '/lib/css');

// ASSET ENQUEUE, ONLY THEME CSS, THEME JS AND BOOTSTRAP 4 CSS LOADED
add_action('wp_head', 'theme_styles');
function theme_styles(){
    wp_enqueue_style('bootstrap',THEME_LIB_CSS.'/bootstrap.min.css');
    wp_enqueue_style('theme-css', THEME_CSS.'/stylesheet.css',array('bootstrap'));
}
add_action('wp_enqueue_scripts', 'theme_scripts');
function theme_scripts(){
        wp_enqueue_script('theme-js', THEME_JS.'/main.js', array('jquery'),'' ,true);
}
