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
            <p class="mw-feature-text">Creating strategically <strong>disruptive,</strong> experientially <strong>remarkable,</strong> undeniably <strong>unexpected</strong> ways to <strong>wow,</strong> engage, and inspire - <strong>together</strong></p>
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
    <a name="about-us"></a>
    <div class="wrap">
        <div class="row">
            <div class="col-sm-4">
                <?php the_post_thumbnail(); ?>
            </div>
            <div class="col-sm-8">
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
        <a name="our-services"></a>
        <div class="wrap">
            <ul class="row mw-tabs-head" id="mw-tabs-head">
                <li class="mw-tab mw-tab-left col-sm-4"><a href="#mw-section-left" ><?php echo $left_tab_title; ?></a></li>
                <li class="mw-tab mw-tab-center col-sm-4" id="mw-tab-default"><a href="#mw-section-center" ><?php echo $center_tab_title ?></a></li>
                <li class="mw-tab mw-tab-right col-sm-4"><a href="#mw-section-right" ><?php echo $right_tab_title; ?></a></li>
            </ul>
        </div>

        <div id="mw-section-left" class="mw-tab-section">
            <div class="wrap">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="mw-tab-heading"><?php echo $left_tab_heading; ?></h3>
                        <div class="mw-tab-body"><?php echo $left_tab_body; ?></div>
                    </div>

                    <div class="mw-tab-form col-md-6">
                        <div class="mw-form-wrap">
                            <div class="mw-tab-form-header">
                                <h3>So What Do You Want To Be, Disruptive, Remarkable and/or Unexpected?</h3>
                                <p>Fill out the form below and we will be in touch</p>
                            </div>
                            <div class="mw-tab-form-section">
                            <?php echo do_shortcode( '[contact-form-7 id="211" title="Homepage Contact Form"]' ); ?>
                            </div>
                        </div>
                    </div>
                </div><!-- .row -->
            </div><!-- .wrap -->
        </div>
        <div id="mw-section-center" class="mw-tab-section mw-tab-section-current">
            <div class="wrap">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="mw-tab-heading"><?php echo $center_tab_heading ?></h3>
                        <div class="mw-tab-body"><?php echo $center_tab_body ?></div>
                    </div>

                    <div class="mw-tab-form col-md-6">
                        <div class="mw-form-wrap">
                            <div class="mw-tab-form-header">
                                <h3>So What Do You Want To Be, Disruptive, Remarkable and/or Unexpected?</h3>
                                <p>Fill out the form below and we will be in touch</p>
                            </div>
                            <div class="mw-tab-form-section">
                                <?php echo do_shortcode( '[contact-form-7 id="211" title="Homepage Contact Form"]' ); ?>
                            </div>
                        </div>
                    </div>
                </div><!-- .row -->
            </div><!-- .wrap -->
        </div>
        <div id="mw-section-right" class="mw-tab-section">
            <div class="wrap">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="mw-tab-heading"><?php echo $right_tab_heading; ?></h3>
                        <div class="mw-tab-body"><?php echo $right_tab_body; ?></div>
                    </div>

                    <div class="mw-tab-form col-md-6">
                        <div class="mw-form-wrap">
                            <div class="mw-tab-form-header">
                                <h3>So What Do You Want To Be, Disruptive, Remarkable and/or Unexpected?</h3>
                                <p>Fill out the form below and we will be in touch</p>
                            </div>
                            <div class="mw-tab-form-section">
                                <?php echo do_shortcode( '[contact-form-7 id="211" title="Homepage Contact Form"]' ); ?>
                            </div>
                        </div>
                    </div>
                </div><!-- .row -->
            </div><!-- .wrap -->
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
        <a name="our-work"></a>
        <div class="wrap">
            <div class="row">
                <div class="col-sm-5 mw-work-samples">
                    <div class="mw-work-sample">
                        <?php $ID = 134; //turkey hill safari ?>
                        <a class="mw-work-sample-link"
                           href="our-work/#<?php echo get_the_title( $ID ) ?>"
                           style="background: url('<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $ID ), 'post-thumbnail' );
                           echo $thumb['0']; ?>') no-repeat center center transparent;"></a>
                    </div>
                    <div class="mw-work-sample">
                        <?php $ID = 138; //oasis imaging ?>
                        <a class="mw-work-sample-link"
                           href="our-work/#<?php echo get_the_title( $ID ) ?>"
                           style="background: url('<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $ID ), 'post-thumbnail' );
                           echo $thumb['0']; ?>') no-repeat center center transparent;"></a>
                    </div>
                    <div class="mw-work-sample">
                        <?php $ID = 139; //orthopedic urgent care ?>
                        <a class="mw-work-sample-link"
                           href="our-work/#<?php echo get_the_title( $ID ) ?>"
                           style="background: url('<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $ID ), 'post-thumbnail' );
                           echo $thumb['0']; ?>') no-repeat center center transparent;"></a>
                    </div>
                    <div class="mw-work-sample">
                        <?php $ID = 140; //here we grow ?>
                        <a class="mw-work-sample-link"
                           href="our-work/#<?php echo get_the_title( $ID ) ?>"
                           style="background: url('<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $ID ), 'post-thumbnail' );
                           echo $thumb['0']; ?>') no-repeat center center transparent;"></a>
                    </div>
                    <div class="mw-work-sample">
                        <?php $ID = 141; //princeton caring for kids ?>
                        <a class="mw-work-sample-link"
                           href="our-work/#<?php echo get_the_title( $ID ) ?>"
                           style="background: url('<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $ID ), 'post-thumbnail' );
                           echo $thumb['0']; ?>') no-repeat center center transparent;"></a>
                    </div>
                    <div class="mw-work-sample">
                        <?php $ID = 142; //princeton oncology ?>
                        <a class="mw-work-sample-link"
                           href="our-work/#<?php echo get_the_title( $ID ) ?>"
                           style="background: url('<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $ID ), 'post-thumbnail' );
                           echo $thumb['0']; ?>') no-repeat center center transparent;"></a>
                    </div>
                    <div class="mw-work-sample">
                        <?php $ID = 146; //princeton topless?>
                        <a class="mw-work-sample-link"
                           href="our-work/#<?php echo get_the_title( $ID ) ?>"
                           style="background: url('<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $ID ), 'post-thumbnail' );
                           echo $thumb['0']; ?>') no-repeat center center transparent;"></a>
                    </div>
                    <div class="mw-work-sample">
                        <?php $ID = 147; //fairfax vein center ?>
                        <a class="mw-work-sample-link"
                           href="our-work/#<?php echo get_the_title( $ID ) ?>"
                           style="background: url('<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $ID ), 'post-thumbnail' );
                           echo $thumb['0']; ?>') no-repeat center center transparent;"></a>
                    </div>
                    <div class="mw-work-sample">
                        <?php $ID = 205; //marketing works ?>
                        <a class="mw-work-sample-link"
                           href="our-work/#<?php echo get_the_title( $ID ) ?>"
                           style="background: url('<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $ID ), 'post-thumbnail' );
                           echo $thumb['0']; ?>') no-repeat center center transparent;"></a>
                    </div>
                </div>
                <div class="col-sm-7">
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
            <div class="mw-section-logos row">
                <span><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2015/03/history-logo-one.png" alt="history-logo-one" /></span>
                <span><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2015/03/history-logo-two.png" alt="history-logo-two" /></span>
                <span><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2015/03/history-logo-three.png" alt="history-logo-three" /></span>
                <span><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2015/03/history-logo-four.png" alt="history-logo-four" /></span>
                <span><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2015/03/history-logo-five.png" alt="history-logo-five" /></span>
                <span><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2015/03/history-logo-six.png" alt="history-logo-six" /></span>
                <span><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2015/03/history-logo-seven.png" alt="history-logo-seven" /></span>
                <span><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2015/03/history-logo-eight.png" alt="history-logo-eight" /></span>
            </div>
            <div class="mw-section-logos row">
                <span><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2015/03/history-logo-nine.png" alt="history-logo-nine" /></span>
                <span><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2015/03/history-logo-ten.png" alt="history-logo-ten" /></span>
                <span><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2015/03/history-logo-eleven.png" alt="history-logo-eleven" /></span>
            </div>
        </div>
    </article>

    <article class="mw-section mw-section-white">
        <a name="news"></a>
        <div class="wrap">
            <h2 class="mw-section-heading"><?php echo $white_heading; ?></h2>
            <div class="mw-section-body"><?php echo $white_body; ?></div>
        </div>
    </article>
    <?php
}

add_action( 'genesis_before_footer', 'mw_prefooter' );
function mw_prefooter() {
    ?>
    <aside class="mw-prefooter row">
        <div class="col-xs-6 col-lg-3 mw-prefooter-block mw-prefooter-one">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/awards-block-01.png" alt="widget 1"/>
        </div>
        <div class="col-xs-6 col-lg-3 mw-prefooter-block mw-prefooter-news">
            <h3 class="mw-section-title">Marketing Budgets Demystified</h3>
            <p class="mw-section-meta">March 15, 2015</p>
            <p class="mw-section-body">What’s the best approach to determining a marketing budget for a healthcare provider? Get an expert, insider’s perspective from Tina Rudisill, President of Marketing Works, in her new article (the first of a four-part series), coming soon in AXIS Imaging News</p>
            <a class="mw-button mw-button-continue" href="http://www.axisimagingnews.com/">Continue Reading</a>
        </div>
        <div class="col-xs-6 col-lg-3 mw-prefooter-block mw-prefooter-three">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cogs.jpg" alt="widget 3"/>
        </div>
        <div class="col-xs-6 col-lg-3 mw-prefooter-block mw-prefooter-social">
            <h3 class="mw-section-title">Facebook</h3>
            <p class="mw-section-meta">March 18, 2015</p>
            <p class="mw-section-body">We are so excited to announce that the vein campaign for Fairfax Radiological Consultants, PC won a People's Choice award at the annual RBMA Building Better Marketing Programs Quest Awards.</p>
            <a class="mw-button mw-button-continue" href="https://www.facebook.com/trgMarketingWorks">Continue Reading</a>
        </div>
    </aside>
    <a name="contact-us"></a>

    <?php
}

genesis();