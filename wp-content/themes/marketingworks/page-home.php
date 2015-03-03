<?php

/**
 * Template Name: Home Page
 *
 */



// Set the page layout to full-width
//add_filter( 'genesis_pre_get_option_site_layout', 'mw_home_layout' );
function mw_home_layout( $opt ) {
    $opt = 'full-width-content'; // You can change this to any Genesis layout
    return $opt;
}

genesis();