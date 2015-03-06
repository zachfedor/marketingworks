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

add_action( 'genesis_before_content', 'mw_hero_image' );
function mw_hero_image()
{
    ?>
    <aside class="mw-feature">
        <div class="wrap">
            <p class="mw-feature-text">
                Creating strategically <strong>disruptive,</strong><br/>
                Experientially <strong>remarkable,</strong><br/>
                Undeniably <strong>unexpected,</strong><br/>
                Ways to <strong>wow,</strong> engage,<br/>
            </p>
            <p class="mw-feature-text">
                and inspire - <strong>together</strong>
            </p>
        </div><!-- .wrap -->
    </aside><!-- .mw-feature -->
    <?php
}

add_action('genesis_after_content', 'mw_homepage_tabs');
function mw_homepage_tabs()
{
    $center_tab_title = get_field("center_tab_title");
    $center_tab_heading = get_field("center_tab_heading");
    $center_tab_body = get_field("center_tab_body");

    $left_tab_title = get_field("left_tab_title");
    $left_tab_heading = get_field("left_tab_heading");
    $left_tab_body = get_field("left_tab_body");

    $right_tab_title = get_field("right_tab_title");
    $right_tab_heading = get_field("right_tab_heading");
    $right_tab_body = get_field("right_tab_body");

    ?>
    <div class="mw-tabs wrap">
        <div class="row mw-tabs-head">
            <h2 id="mw-tab-left" class="mw-tab col-sm-4"><?php echo $left_tab_title; ?></h2>
            <h2 id="mw-tab-center" class="mw-tab mw-tab-current col-sm-4"><?php echo $center_tab_title ?></h2>
            <h2 id="mw-tab-right" class="mw-tab col-sm-4"><?php echo $right_tab_title; ?></h2>
        </div>
    </div>

    <article id="mw-section-left" class="mw-tab-section">
        <div class="wrap">
            <h3 class="mw-tab-heading"><?php echo $left_tab_heading; ?></h3>
            <div class="mw-tab-body"><?php echo $left_tab_body; ?></div>
        </div>
    </article>
    <article id="mw-section-center" class="mw-tab-section mw-tab-section-current">
        <div class="wrap">
            <h3 class="mw-tab-heading"><?php echo $center_tab_heading ?></h3>
            <div class="mw-tab-body"><?php echo $center_tab_body ?></div>
        </div>
    </article>
    <article id="mw-section-right" class="mw-tab-section">
        <div class="wrap">
            <h3 class="mw-tab-heading"><?php echo $right_tab_heading; ?></h3>
            <div class="mw-tab-body"><?php echo $right_tab_body; ?></div>
        </div>
    </article>
    <?php
}

add_action('genesis_after_content', 'mw_homepage_sections');
function mw_homepage_sections()
{
    $green_heading = get_field( "green_heading" );
    $green_body = get_field( "green_body" );

    $blue_heading = get_field( "blue_heading" );
    $blue_body = get_field( "blue_body" );

    $white_heading = get_field( "white_heading" );
    $white_body = get_field( "white_body" );

    ?>
    <article class="mw-section-green">
        <div class="wrap">
            <div class="row">
                <div class="col-sm-6">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/portfolio-hero-image.png" alt="Portfolio"/>
                </div>
                <div class="col-sm-6">
                    <h2 class="mw-section-heading"><?php echo $green_heading; ?></h2>
                    <div class="mw-section-body"><?php echo $green_body; ?></div>
                </div>
            </div>
        </div>
    </article>

    <article class="mw-section-blue">
        <div class="wrap">
            <h2 class="mw-section-heading"><?php echo $blue_heading; ?></h2>
            <div class="mw-section-body"><?php echo $blue_body; ?></div>
            <div class="mw-history-logos">
                <span class="mw-history-logo mw-history-logo-1"></span>
                <span class="mw-history-logo mw-history-logo-2"></span>
                <span class="mw-history-logo mw-history-logo-3"></span>
                <span class="mw-history-logo mw-history-logo-4"></span>
                <span class="mw-history-logo mw-history-logo-5"></span>
                <span class="mw-history-logo mw-history-logo-6"></span>
                <span class="mw-history-logo mw-history-logo-7"></span>
                <span class="mw-history-logo mw-history-logo-8"></span>
            </div>
        </div>
    </article>

    <article class="mw-section-white wrap">
        <div class="wrap">
            <h2 class="mw-section-heading"><?php echo $white_heading; ?></h2>
            <div class="mw-section-body"><?php echo $white_body; ?></div>
        </div>
    </article>
    <?php
}

genesis();