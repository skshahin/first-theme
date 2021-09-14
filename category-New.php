<?php
single_cat_title();

$alpha_current_term = get_queried_object();

$alpha_term_thumb_id = get_field('thumbnails',$alpha_current_term);

if($alpha_term_thumb_id){
    $file_thumb_details = wp_get_attachment_image_src($alpha_term_thumb_id,'medium');
    echo "<br><img src='".esc_url($file_thumb_details[0])."'/>";
}
