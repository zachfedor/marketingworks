<?php

remove_action( 'genesis_header', 'genesis_do_header' );
remove_action( 'genesis_after_header', 'genesis_do_nav' );
add_action( 'genesis_header' , 'genesis_do_nav', 5 );
remove_action( 'genesis_after_header', 'genesis_do_subnav' );
add_action( 'genesis_header' , 'genesis_do_subnav', 5 );

add_action( 'genesis_header', 'mw_do_header' );
function mw_do_header()
{
    do_action( 'genesis_site_title' );
}

//add_action( 'genesis_header', 'mw_do_header' );
function mw_do_hero()
{
    ?>
    <div class="row">
        <div class="col-sm-12">
            <img src="assets/images/hero-image.png" alt="Hero Image"/>
        </div>
    </div>
    <?php
}
