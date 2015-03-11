<?php

/**
 * Template Name: Home Page
 *
 */

// Set the page layout to full-width
add_filter( 'genesis_pre_get_option_home_layout', 'mw_home_layout' );
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

remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );
remove_action( 'genesis_entry_content', 'genesis_do_post_content' );

add_action( 'genesis_entry_content', 'mw_entry_content' );
function mw_entry_content() {
    ?>
    <div class="wrap">
        <div class="row">
            <div class="col-sm-5">
                <?php the_post_thumbnail(); ?>
            </div>
            <div class="col-sm-7">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
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
    <div class="mw-tabs" id="mw-tabs">
        <div class="wrap">
            <ul class="row mw-tabs-head" id="mw-tabs-head">
                <li class="mw-tab col-sm-4"><a href="#mw-section-left" ><?php echo $left_tab_title; ?></a></li>
                <li class="mw-tab col-sm-4" id="mw-tab-default"><a href="#mw-section-center" ><?php echo $center_tab_title ?></a></li>
                <li class="mw-tab col-sm-4"><a href="#mw-section-right" ><?php echo $right_tab_title; ?></a></li>
            </ul>
        </div>

        <div id="mw-section-left" class="mw-tab-section">
            <div class="wrap">
                <h3 class="mw-tab-heading"><?php echo $left_tab_heading; ?></h3>
                <div class="mw-tab-body"><?php echo $left_tab_body; ?></div>
            </div>
        </div>
        <div id="mw-section-center" class="mw-tab-section mw-tab-section-current">
            <div class="wrap">
                <h3 class="mw-tab-heading"><?php echo $center_tab_heading ?></h3>
                <div class="mw-tab-body"><?php echo $center_tab_body ?></div>
            </div>
        </div>
        <div id="mw-section-right" class="mw-tab-section">
            <div class="wrap">
                <h3 class="mw-tab-heading"><?php echo $right_tab_heading; ?></h3>
                <div class="mw-tab-body"><?php echo $right_tab_body; ?></div>
            </div>
        </div>
    </div>
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
    <article class="mw-section mw-section-green">
        <img class="mw-section-hero" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/portfolio-hero-image.png" alt="Portfolio"/>
        <div class="wrap">
            <div class="row">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <h2 class="mw-section-heading"><?php echo $green_heading; ?></h2>
                    <div class="mw-section-body"><?php echo $green_body; ?></div>
                </div>
            </div>
        </div>
    </article>

    <article class="mw-section mw-section-blue">
        <div class="wrap">
            <h2 class="mw-section-heading"><?php echo $blue_heading; ?></h2>
            <div class="mw-section-body"><?php echo $blue_body; ?></div>
            <div class="mw-section-logos">
                <span><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2015/03/history-logo-one.png" alt="history-logo-one" width="216" height="21" /></span>
                <span><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2015/03/history-logo-two.png" alt="history-logo-two" width="116" height="65" /></span>
                <span><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2015/03/history-logo-three.png" alt="history-logo-three" width="109" height="66" /></span>
                <span><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2015/03/history-logo-four.png" alt="history-logo-four" width="86" height="65" /></span>
                <span><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2015/03/history-logo-five.png" alt="history-logo-five" width="161" height="63" /></span>
                <span><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2015/03/history-logo-six.png" alt="history-logo-six" width="149" height="68" /></span>
                <span><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2015/03/history-logo-seven.png" alt="history-logo-seven" width="218" height="44" /></span>
                <span><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2015/03/history-logo-eight.png" alt="history-logo-eight" width="110" height="59" /></span>
            </div>
        </div>
    </article>

    <article class="mw-section mw-section-white">
        <div class="wrap">
            <h2 class="mw-section-heading"><?php echo $white_heading; ?></h2>
            <div class="mw-section-body"><?php echo $white_body; ?></div>
        </div>
    </article>
    <?php
}

genesis();