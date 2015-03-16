<?php

//* Template Name: Archive

add_filter('genesis_pre_get_option_site_layout', '__genesis_return_full_width_content');

add_action( 'genesis_before_content', 'mw_page_heading' );
function mw_page_heading() {
    ?>
    <div class="mw-page-header">
        <h1 class="mw-page-heading"><?php echo ( get_the_title() == "Our Work" ? "A Healthy Body... Of Work" : "This Page Is Under Construction" );?></h1>
    </div>
    <?php
}

remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'mw_archive_loop' );
function mw_archive_loop() {
    global $post;

    if ( get_the_title() == "Our Work" ) {
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'post_per_page' => -1,
            'nopaging' => true,
            'category_name' => 'work'
        );
    } else if ( get_the_title() == "The Who" ) {
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'post_per_page' => -1,
            'nopaging' => true,
            'category_name' => 'people'
        );
    }



    // Use $loop, a custom variable we made up, so it doesn't overwrite anything
    $loop = new WP_Query( $args );

//    var_dump($loop);
    // have_posts() is a wrapper function for $wp_query->have_posts(). Since we
    // don't want to use $wp_query, use our custom variable instead.
    if ( $loop->have_posts() ) :
        ?>
        <div class="mw-post-list">
        <?php

        while ( $loop->have_posts() ) : $loop->the_post();
            ?>
            <article class="mw-post-list-item row">
                <a name="<?php echo get_the_title() ?>"></a>
                <div class="col-sm-4">
                    <?php  echo get_the_post_thumbnail(); ?>
                </div>
                <div class="col-sm-8">
                    <h2 class="mw-post-title"><?php echo get_the_title(); ?></h2>
                    <div class="mw-post-excerpt"><?php echo get_the_content(); ?></div>
                </div>
            </article>
            <?php
        endwhile;

        ?>
        </div><!-- .mw-post-list -->
        <?php

        do_action( 'genesis_after_endwhile' );
    endif;

    // We only need to reset the $post variable. If we overwrote $wp_query,
    // we'd need to use wp_reset_query() which does both.
    wp_reset_postdata();
}

genesis();
