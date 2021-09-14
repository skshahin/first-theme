<?php
			if( function_exists('acf_add_local_field_group') ):

                acf_add_local_field_group(array(
                    'key' => 'group_613e0d36bb865',
                    'title' => 'ACF custom field',
                    'fields' => array(
                        array(
                            'key' => 'field_613e0d3a50026',
                            'label' => 'camera',
                            'name' => 'camera-model',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                        ),
                        array(
                            'key' => 'field_613e0d5650027',
                            'label' => 'location',
                            'name' => 'location',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                        ),
                        array(
                            'key' => 'field_613e0d8f50028',
                            'label' => 'Time',
                            'name' => 'time',
                            'type' => 'date_picker',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'display_format' => 'F j, Y',
                            'return_format' => 'F j, Y',
                            'first_day' => 6,
                        ),
                        array(
                            'key' => 'field_613e14b9fa7cf',
                            'label' => 'licensed?',
                            'name' => 'licensed',
                            'type' => 'true_false',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'message' => '',
                            'default_value' => 0,
                            'ui' => 1,
                            'ui_on_text' => '',
                            'ui_off_text' => '',
                        ),
                        array(
                            'key' => 'field_613e0dbf50029',
                            'label' => 'license',
                            'name' => 'license',
                            'type' => 'textarea',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                array(
                                    array(
                                        'field' => 'field_613e14b9fa7cf',
                                        'operator' => '==',
                                        'value' => '1',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '0',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'placeholder' => '',
                            'maxlength' => '',
                            'rows' => '',
                            'new_lines' => '',
                        ),
                        array(
                            'key' => 'field_613ebc4036369',
                            'label' => 'image',
                            'name' => 'image_size',
                            'type' => 'image',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'return_format' => 'id',
                            'preview_size' => 'medium',
                            'library' => 'all',
                            'min_width' => '',
                            'min_height' => '',
                            'min_size' => '',
                            'max_width' => '',
                            'max_height' => '',
                            'max_size' => '',
                            'mime_types' => '',
                        ),
                        array(
                            'key' => 'field_613ed8d11313f',
                            'label' => 'attachment',
                            'name' => 'attachment',
                            'type' => 'file',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'return_format' => 'id',
                            'library' => 'all',
                            'min_size' => '',
                            'max_size' => '',
                            'mime_types' => '',
                        ),
                    ),
                    'location' => array(
                        array(
                            array(
                                'param' => 'post_type',
                                'operator' => '==',
                                'value' => 'post',
                            ),
                            array(
                                'param' => 'post_format',
                                'operator' => '==',
                                'value' => 'image',
                            ),
                        ),
                    ),
                    'menu_order' => 0,
                    'position' => 'normal',
                    'style' => 'default',
                    'label_placement' => 'top',
                    'instruction_placement' => 'label',
                    'hide_on_screen' => '',
                    'active' => true,
                    'description' => '',
                ));
                
                acf_add_local_field_group(array(
                    'key' => 'group_613ed9c0873c8',
                    'title' => 'attachment preview',
                    'fields' => array(
                        array(
                            'key' => 'field_613ed9cd02ddd',
                            'label' => 'thumbnails',
                            'name' => 'thumbnails',
                            'type' => 'image',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'return_format' => 'id',
                            'preview_size' => 'medium',
                            'library' => 'all',
                            'min_width' => '',
                            'min_height' => '',
                            'min_size' => '',
                            'max_width' => '',
                            'max_height' => '',
                            'max_size' => '',
                            'mime_types' => '',
                        ),
                    ),
                    'location' => array(
                        array(
                            array(
                                'param' => 'attachment',
                                'operator' => '==',
                                'value' => 'application/pdf',
                            ),
                        ),
                    ),
                    'menu_order' => 0,
                    'position' => 'normal',
                    'style' => 'default',
                    'label_placement' => 'top',
                    'instruction_placement' => 'label',
                    'hide_on_screen' => '',
                    'active' => true,
                    'description' => '',
                ));
                
                acf_add_local_field_group(array(
                    'key' => 'group_61400647e2269',
                    'title' => 'Related Post',
                    'fields' => array(
                        array(
                            'key' => 'field_6140066548992',
                            'label' => 'Related post',
                            'name' => 'Related_posts',
                            'type' => 'relationship',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'post_type' => '',
                            'taxonomy' => '',
                            'filters' => array(
                                0 => 'search',
                                1 => 'post_type',
                                2 => 'taxonomy',
                            ),
                            'elements' => '',
                            'min' => '',
                            'max' => '',
                            'return_format' => 'id',
                        ),
                    ),
                    'location' => array(
                        array(
                            array(
                                'param' => 'post_type',
                                'operator' => '==',
                                'value' => 'post',
                            ),
                        ),
                    ),
                    'menu_order' => 0,
                    'position' => 'normal',
                    'style' => 'default',
                    'label_placement' => 'top',
                    'instruction_placement' => 'label',
                    'hide_on_screen' => '',
                    'active' => true,
                    'description' => '',
                ));
                
                acf_add_local_field_group(array(
                    'key' => 'group_613f499363972',
                    'title' => 'term preview',
                    'fields' => array(
                        array(
                            'key' => 'field_613f49a5ad2d5',
                            'label' => 'Thumbnails',
                            'name' => 'thumbnails',
                            'type' => 'image',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'return_format' => 'id',
                            'preview_size' => 'medium',
                            'library' => 'all',
                            'min_width' => '',
                            'min_height' => '',
                            'min_size' => '',
                            'max_width' => '',
                            'max_height' => '',
                            'max_size' => '',
                            'mime_types' => '',
                        ),
                    ),
                    'location' => array(
                        array(
                            array(
                                'param' => 'taxonomy',
                                'operator' => '==',
                                'value' => 'category',
                            ),
                        ),
                    ),
                    'menu_order' => 0,
                    'position' => 'normal',
                    'style' => 'default',
                    'label_placement' => 'top',
                    'instruction_placement' => 'label',
                    'hide_on_screen' => '',
                    'active' => true,
                    'description' => '',
                ));
                
                acf_add_local_field_group(array(
                    'key' => 'group_613f54c0d5f33',
                    'title' => 'User social',
                    'fields' => array(
                        array(
                            'key' => 'field_613f54e1e4f55',
                            'label' => 'Facebook',
                            'name' => 'Facebook',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                        ),
                        array(
                            'key' => 'field_613f5516e4f56',
                            'label' => 'Twitter',
                            'name' => 'twitter',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                        ),
                    ),
                    'location' => array(
                        array(
                            array(
                                'param' => 'user_form',
                                'operator' => '==',
                                'value' => 'all',
                            ),
                        ),
                    ),
                    'menu_order' => 0,
                    'position' => 'normal',
                    'style' => 'default',
                    'label_placement' => 'top',
                    'instruction_placement' => 'label',
                    'hide_on_screen' => '',
                    'active' => true,
                    'description' => '',
                ));
                
                endif;		


?>