<?php
function sasu_portfolio_metabox( $meta_boxes ) {

	$sasu_prefix = '_sasu_';
	$meta_boxes[] = array(
		'id'        => 'portfolio_single_metaboxs',
		'title'     => esc_html__( 'Portfolio Single Metabox', 'sasu' ),
		'post_types'=> array( 'portfolio' ),
		'context'   => 'side',
		'priority'  => 'high',
		'autosave'  => 'false',
		'fields'    => array(
			array(
				'id'         => $sasu_prefix . 'project_start_time',
				'name'       => esc_html__( 'Project Start Time', 'sasu' ),
				'type'       => 'time',
				'js_options' => array(
					'stepMinute'      => 10,
					'controlType'     => 'select'
				),
			),
			array(
				'id'    => $sasu_prefix . 'project_start_date',
				'type'  => 'date',
				'name'  => esc_html__( 'Project Start Date', 'sasu' ),
				'js_options' => array(
					'dateFormat'      => 'DD, M dd, yy   ',
					'showButtonPanel' => false,
				),
			),
			array(
				'id'         => $sasu_prefix . 'project_end_time',
				'name'       => esc_html__( 'Project End Time', 'sasu' ),
				'type'       => 'time',
				'js_options' => array(
					'stepMinute'      => 10,
					'controlType'     => 'select'
				),
			),
			array(
				'id'    => $sasu_prefix . 'project_end_date',
				'type'  => 'date',
				'name'  => esc_html__( 'Project End Date', 'sasu' ),
				'js_options' => array(
					'dateFormat'      => 'DD, M dd, yy   ',
					'showButtonPanel' => false,
				),
			),
			array(
				'id'    => $sasu_prefix . 'project_location',
				'type'  => 'text',
				'name'  => esc_html__( 'Project Location', 'sasu' ),
				'placeholder' => esc_html__( 'Project Location', 'sasu' ),
			),
		),
	);


	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'sasu_portfolio_metabox' );