<?php

remove_action( 'genesis_after_header', 'genesis_do_subnav' );
remove_action( 'genesis_header', 'genesis_do_header' );

add_action( 'genesis_header', 'gsep_do_header' );
function gsep_do_header()
{
    ?>
    <div class="row">
        <div class="col-sm-12">
            <?php
            do_action( 'genesis_site_title' );
            ?>
        </div>
    </div>
    <?php
}
