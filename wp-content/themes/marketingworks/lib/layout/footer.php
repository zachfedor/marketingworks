<?php

// Footer
//remove_action( 'genesis_after_footer', 'genesis_do_subnav' );
remove_action( 'genesis_footer', 'genesis_do_footer' );

add_action( 'genesis_footer', 'gsep_do_footer' );
function gsep_do_footer() {
    ?>
    <div class="row">
        <div class="col-xs-6">
            <?php
                if ( has_nav_menu( 'footer-menu' ) ) { /* if menu location 'footer-menu' exists then use custom menu */
                    wp_nav_menu( array( 'theme_location' => 'footer-menu',
                                        'container' => 'nav' ) );
                }
            ?>
        </div>
        <div class="col-xs-6">
            <?php include 'social-nav.php'; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <p class="copyright">The GIRL SCOUTS name, mark, and all associated trademarks and logotypes, including the Trefoil Design, are owned by GSUSA.<br>
            &copy; <?php echo date("Y"); ?> Girl Scouts Council of Eastern Pennsylvania. All rights Reserved.</p>
        </div>
    </div>
    <?php
}