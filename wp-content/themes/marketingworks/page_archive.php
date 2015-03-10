<?php

//* Template Name: Archive

add_filter('genesis_pre_get_option_site_layout', '__genesis_return_full_width_content');

error_log("no genesis");
function gsep_archive_loop() {
    global $post;

    // arguments, adjust as needed
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        'post_status' => 'publish',
        'paged' => get_query_var( 'paged' )
    );

    // Use $loop, a custom variable we made up, so it doesn't overwrite anything
    $loop = new WP_Query( $args );

    // have_posts() is a wrapper function for $wp_query->have_posts(). Since we
    // don't want to use $wp_query, use our custom variable instead.
    if ( $loop->have_posts() ) :
        echo '<ul class="dick">';
        while ( $loop->have_posts() ) : $loop->the_post();
            echo '<li>' . get_the_title() . '</li>';
        endwhile;
        echo '</ul>';
        do_action( 'genesis_after_endwhile' );
    endif;

    // We only need to reset the $post variable. If we overwrote $wp_query,
    // we'd need to use wp_reset_query() which does both.
    wp_reset_postdata();
}
add_action( 'genesis_loop', 'gsep_archive_loop' );
remove_action( 'genesis_loop', 'genesis_do_loop' );

genesis();
