<?php

// Footer
//remove_action( 'genesis_after_footer', 'genesis_do_subnav' );
remove_action( 'genesis_footer', 'genesis_do_footer' );

add_action( 'genesis_footer', 'gsep_do_footer' );
function gsep_do_footer() {
    ?>
    <div class="row">
        <div class="col-sm-3 mw-contact-info">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo-whiteout.png" alt=""/>
            <p>Marketing Works<br>
                3315 Concord Road<br>
                York, Pennsylvania 17402<br>
                717-852-7171</p>
            <p><a href="#">Terms</a> - <a href="#">Privacy Policy</a></p>
            <p>&copy; Copyright <?php echo date("Y"); ?> Marketing Works. All rights reserved.</p>
        </div>
        <div class="col-sm-9 mw-contact-form">

        </div>
    </div>
    <?php
}