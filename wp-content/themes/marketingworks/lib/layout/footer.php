<?php

// Footer
//remove_action( 'genesis_after_footer', 'genesis_do_subnav' );
remove_action( 'genesis_footer', 'genesis_do_footer' );

add_action( 'genesis_footer', 'gsep_do_footer' );
function gsep_do_footer() {
    ?>
    <div class="row">
        <div class="col-md-3 mw-contact-info">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo-whiteout.png" alt=""/>
            <p>Marketing Works<br>3315 Concord Road<br>York, Pennsylvania 17402<br>717-852-7171</p>
            <p><a href="#">Terms</a> - <a href="#">Privacy Policy</a></p>
            <p>&copy; Copyright <?php echo date("Y"); ?> Marketing Works. All rights reserved.</p>
        </div>
        <div class="col-md-9 mw-contact-form">
            <h2 class="mw-section-heading">Ready To Unlock Your Boldness?</h2>
            <div class="mw-section-body row">
<!--                --><?php //gravity_form( '1', $display_title = false, $display_description = false ); ?>
                <form action="#">
                    <div class="col-sm-5">
                        <input name="mw-name" id="mw-name" type="text" placeholder="Name" />
                        <input name="mw-phone" id="mw-phone" type="text" placeholder="Phone" />
                        <select name="mw-info" id="mw-info">
                            <option value="">Information You're Looking For</option>
                            <option value="marketing">Marketing</option>
                            <option value="contact">Contact</option>
                            <option value="careers">Careers</option>
                        </select>
                    </div>
                    <div class="col-sm-5">
                        <input name="mw-org" id="mw-org" type="text" placeholder="Business / Company Name" />
                        <input name="mw-email" id="mw-email" type="email" placeholder="Email" />
                        <input name="mw-submit" id="mw-submit" type="submit" value="Send Message" />
                    </div>
                </form>
            </div>
        </div>
    </div><!-- .row -->
    <?php
}