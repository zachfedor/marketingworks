<?php

add_action('genesis_before_loop', 'gsep_featured_image');
function gsep_featured_image(){
    $attachment_id = get_post_thumbnail_id();
    $attachment_obj = wp_get_attachment_image_src($attachment_id, 'full');
    $attachment_src = $attachment_obj[0];

    if($attachment_src != null) {
        ?>
        <img class="featured-image" src="<?php echo $attachment_src; ?>" alt="Featured Image"/>
        <?php
    }
}

genesis();