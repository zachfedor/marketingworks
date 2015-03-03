<?php

/************************************************************
 * Enque Custom Scripts
 ************************************************************/
add_action( 'wp_enqueue_scripts', 'gsep_enqueue_scripts', 99);
function gsep_enqueue_scripts(){
//    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
//    wp_enqueue_style('main-css', get_bloginfo('stylesheet_directory') . '/assets/css/theme.min.css');
    wp_enqueue_style( 'parent-style', 'http://192.168.100.60:3000/marketingworks/wp-content/themes/genesis/style.css' );
    wp_enqueue_style('main-css', 'http://192.168.100.60:3000/marketingworks/wp-content/themes/marketingworks/assets/css/theme.min.css');

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script('main-js', get_bloginfo('stylesheet_directory') . '/assets/js/main.js', array('jquery'), '1', true);
}
