<?php 

function alpha_testimonial_register($attachments){
$fields = array(
                    array(
                        'name' => 'name',
                        'type' => 'text',
                        'label' => __('name','alpha')
                    ),
                    array(
                        'name' => 'position',
                        'type' => 'text',
                        'label' => __('position','alpha')
                    ),
                    array(
                        'name' => 'company',
                        'type' => 'text',
                        'label' => __('company','alpha')
                    ),
                    array(
                        'name' => 'testimonial',
                        'type' => 'textarea',
                        'label' => __('testimonial','alpha')
                    ),
                );

    $args = array(
        'label' => 'testimonials',
        'post_type' => array('pages'),
        'filetype' => array('image'),
        'note' => 'Add testimonial',
        'button_text' => __('Attach Files','alpha'),
        'fields' =>  $fields
    );
    
    $attachments->register('testimonial',$args);
}
add_action('attachments_register','alpha_testimonial_register');

?>