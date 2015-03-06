<?php

/**
 * Template Name: Home Page
 *
 */

// Set the page layout to full-width
add_filter( 'genesis_pre_get_option_site_layout', 'mw_home_layout' );
function mw_home_layout( $opt )
{
    $opt = 'full-width-content'; // You can change this to any Genesis layout
    return $opt;
}

add_action( 'genesis_after_header', 'mw_hero_image' );
function mw_hero_image()
{
    ?>
    <aside class="mw-feature">
<!--        <p class="mw-feature-text">-->
<!--            Creating strategically <strong>disruptive,</strong><br/>-->
<!--            Experientially <strong>remarkable,</strong><br/>-->
<!--            Undeniably <strong>unexpected,</strong><br/>-->
<!--            Ways to <strong>wow, engage,</strong><br/>-->
<!--        </p>-->
<!--        <p class="mw-feature-text">-->
<!--            and inspire - <strong>together-->
<!--        </p>-->
        <img src="<?php echo get_stylesheet_directory_uri() . "/assets/images/hero-image.png"; ?>" alt="Featured Image"/>
    </aside>
    <?php
}

add_action('genesis_after_content', 'mw_homepage_tabs');
function mw_homepage_tabs()
{
    $center_tab_title = get_field( "center_tab_title" );
    $center_tab_heading = get_field( "center_tab_heading" );
    $center_tab_body = get_field( "center_tab_body" );

    $left_tab_title = get_field( "left_tab_title" );
    $left_tab_heading = get_field( "left_tab_heading" );
    $left_tab_body = get_field( "left_tab_body" );

    $right_tab_title = get_field( "right_tab_title" );
    $right_tab_heading = get_field( "right_tab_heading" );
    $right_tab_body = get_field( "right_tab_body" );

    if( $center_tab_title ) {
        echo '<h2 class="mw-tab mw-tab-center mw-tab-current">' . $center_tab_title . '</h2>';
    }
    if( $center_tab_heading ) {
        echo '<h3 class="mw-tab-heading">' . $center_tab_heading . '</h3>';
    }
    if( $center_tab_body ) {
        echo '<div class="mw-tab-body">' . $center_tab_body . '</div>';
    }

    if( $left_tab_title ) {
        echo '<h2 class="mw-tab mw-tab-left">' . $left_tab_title . '</h2>';
    }
    if( $left_tab_heading ) {
        echo '<h3 class="mw-tab-heading">' . $left_tab_heading . '</h3>';
    }
    if( $left_tab_body ) {
        echo '<div class="mw-tab-body">' . $left_tab_body . '</div>';
    }

    if( $right_tab_title ) {
        echo '<h2 class="mw-tab mw-tab-right">' . $right_tab_title . '</h2>';
    }
    if( $right_tab_heading ) {
        echo '<h3 class="mw-tab-heading">' . $right_tab_heading . '</h3>';
    }
    if( $right_tab_body ) {
        echo '<div class="mw-tab-body">' . $right_tab_body . '</div>';
    }
}

genesis();