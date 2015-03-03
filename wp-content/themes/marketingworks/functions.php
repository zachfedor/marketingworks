<?php

// Start the engine
require_once( get_template_directory() . '/lib/init.php' );

//error_log(CHILD_DIR);

// Layout
require_once(CHILD_DIR.'/lib/layout.php');

// Template
include_once(CHILD_DIR.'/lib/template.php');

// Admin
//include_once(CHILD_DIR.'/lib/admin.php');

//error log
function elog($x){
    ob_start();
    print_r($x);
    $contents = ob_get_contents();
    ob_end_clean();
    error_log($contents);
}

// Registering Extra Menus
//function register_menu() {
//    register_nav_menu('footer-menu', __('Footer Menu'));
//    register_nav_menu('social-menu', __('Social Menu'));
//}
//add_action('init', 'register_menu');

// Filters the Social Menu Items to have specific classes for styling purposes.
// Found in the header and footer
//add_filter('nav_menu_css_class' , 'gsep_social_nav_class' , 10 , 2);
//function gsep_social_nav_class($classes, $item){
//    $title = strtolower($item->title);
//    switch ($title) {
//        case "facebook" :
//            $classes[] = "social-nav-facebook";
//            break;
//        case "twitter" :
//            $classes[] = "social-nav-twitter";
//            break;
//        case "flickr" :
//            $classes[] = "social-nav-flickr";
//            break;
//        case "youtube" :
//            $classes[] = "social-nav-youtube";
//            break;
//        default:
//            $classes[] = "social-nav-other";
//    }
//    return $classes;
//}
