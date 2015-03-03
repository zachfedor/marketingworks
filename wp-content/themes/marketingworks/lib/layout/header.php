<?php

remove_action( 'genesis_after_header', 'genesis_do_subnav' );
remove_action( 'genesis_header', 'genesis_do_header' );

add_action( 'genesis_header', 'gsep_do_header' );
function gsep_do_header()
{
    ?>
    <div class="row">
        <div class="col-sm-2">
            <?php
            do_action( 'genesis_site_title' );
            ?>
        </div>
        <div class="col-sm-10 hd-right-widget">
            <div class="hd-top-row row">
                <div class="col-sm-12">
                    <div class="hd-top-navigation">
                        <?php
                        if ( genesis_nav_menu_supported( 'secondary' ) ) {
                            genesis_nav_menu( array( 'theme_location' => 'secondary' ) );
                        }
                        ?>
                    </div>
                    <div class="hd-social-navigation">
                        <?php include 'social-nav.php'; ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 hd-quick-find">
                    quick
                </div>
                <div class="col-sm-6 hd-search">
                    search box
                </div>
            </div>
        </div>
    </div>
    <?php
}
