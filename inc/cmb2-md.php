<?php

add_action( 'cmb2_init', 'cmb2_add_metabox' );
function cmb2_add_metabox() {

	$prefix = '_alpha_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'camera_information',
		'title'        => __( 'Camera information', 'alpha' ),
		'object_types' => array( 'post' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$cmb->add_field( array(
		'name' => __( 'camera', 'alpha' ),
		'id' => $prefix . 'camera',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'location', 'alpha' ),
		'id' => $prefix . 'location',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Time', 'alpha' ),
		'id' => $prefix . 'time',
		'type' => 'text_date',
	) );

	$cmb->add_field( array(
		'name' => __( 'license?', 'alpha' ),
		'id' => $prefix . 'license_',
		'type' => 'checkbox',
	) );

	$cmb->add_field( array(
		'name' => __( 'licensed', 'alpha' ),
		'id' => $prefix . 'licensed',
		'type' => 'textarea',
        'attributes' => array(
			'data-conditional-id' => $prefix . 'license_',
		),
	) );

	$cmb->add_field( array(
		'name' => __( 'image_field', 'alpha' ),
		'id' => $prefix . 'image_field',
		'type' => 'file',
		'options' => array(
			'url' => false
		),
		'text' => array(
			'add_upload_file_text' => __('upload Image')
		),
		
	) );

	$cmb->add_field( array(
		'name' => __( 'upload Resume', 'alpha' ),
		'id' => $prefix . 'resume',
		'type' => 'file',
		'text' => array(
			'add_upload_file_text' => __('upload PDF File')
		),
		'query_args' => array(
			'type' => array('application/pdf')
		),
		'options' => array(
			'url' => false
		)
	) );

}




add_action( 'cmb2_init', 'cmb2_add_pricing_table' );
function cmb2_add_pricing_table() {

	$prefix = '_alpha_pt_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'pricing_table',
		'title'        => __( 'pricing table', 'alpha' ),
		'object_types' => array( 'page' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$group = $cmb->add_field( array(
		'name' => __( 'pricing Table', 'alpha' ),
		'id' => $prefix . 'pricing_table',
		'type' => 'group',
	) );

	$cmb->add_group_field( $group,array(
		'name' => __( 'caption', 'alpha' ),
		'id' => $prefix . 'pricing_caption',
		'type' => 'text',
	) );

	$cmb->add_group_field( $group,array(
		'name' => __( 'pricing option', 'alpha' ),
		'id' => $prefix . 'pricing_option',
		'type' => 'text',
		'repeatable' => true
	) );

	$cmb->add_group_field( $group,array(
		'name' => __( 'price', 'alpha' ),
		'id' => $prefix . 'pricing',
		'type' => 'text',
	) );

}




add_action( 'cmb2_init', 'alpha_add_metabox' );
function alpha_add_metabox() {

	$prefix = '_alpha_ser_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'service',
		'title'        => __( 'service', 'alpha' ),
		'object_types' => array( 'page' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$service = $cmb->add_field( array(
		'name' => __( 'service', 'alpha' ),
		'id' => $prefix . 'service',
		'type' => 'group',
	) );

	$cmb->add_group_field($service,array(
		'name' => __( 'icon', 'alpha' ),
		'id' => $prefix . 'icon',
		'type' => 'text',
	) );

	$cmb->add_group_field( $service,array(
		'name' => __( 'title', 'alpha' ),
		'id' => $prefix . 'title',
		'type' => 'text',
	) );

	$cmb->add_group_field( $service,array(
		'name' => __( 'content', 'alpha' ),
		'id' => $prefix . 'content',
		'type' => 'textarea',
	) );

}