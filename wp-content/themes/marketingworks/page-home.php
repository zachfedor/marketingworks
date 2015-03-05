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

genesis();