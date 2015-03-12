<?php

// Set the page layout to full-width
add_filter( 'genesis_pre_get_option_site_layout', 'mw_archive_layout' );
function mw_archive_layout( $opt ) {
    $opt = 'full-width-content'; // You can change this to any Genesis layout
    return $opt;
}

add_filter( 'body_class', 'mw_search_body_class' );
function mw_search_body_class( $classes ) {
    // add 'class-name' to the $classes array
    $classes[] = 'archive-list';
    // return the $classes array
    return $classes;
}

genesis();
