<?php 
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5d9f1e891ddc9',
	'title' => 'Slider Grid',
	'fields' => array(
    array(
      'key' => 'field_5da849515de9e',
      'label' => 'Size slider Grid',
      'name' => '',
      'type' => 'message',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array(
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'message' => 'Kindly Upload image size 1680px * 640px',
      'new_lines' => 'wpautop',
      'esc_html' => 0,
    ),
		array(
			'key' => 'field_5d9f1e9636c4b',
			'label' => 'Slider select Post Type',
			'name' => 'slider_select_post_type',
			'type' => 'relationship',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
      'post_type' => array(
        1 => 'project',
      ),
			'taxonomy' => '',
			'filters' => array(
				0 => 'search',
				1 => 'post_type',
				2 => 'taxonomy',
			),
			'elements' => array(
				0 => 'featured_image',
			),
			'min' => '',
			'max' => 5,
			'return_format' => 'object',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/slider-grid',
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