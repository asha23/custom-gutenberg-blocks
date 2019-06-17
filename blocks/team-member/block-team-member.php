<?php 

if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_5d03936960e01',
		'title' => 'Block: Team Member',
		'fields' => array(
			array(
				'key' => 'field_5d03937838c81',
				'label' => 'Name',
				'name' => 'name',
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
				'key' => 'field_5d03937f38c82',
				'label' => 'Title',
				'name' => 'title',
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
				'key' => 'field_5d03938338c83',
				'label' => 'Photo',
				'name' => 'photo',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'array',
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
				'key' => 'field_5d03938d38c84',
				'label' => 'Description',
				'name' => 'description',
				'type' => 'textarea',
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
				'maxlength' => '',
				'rows' => '',
				'new_lines' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/team-member',
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

function be_register_blocks() {
	
	if( ! function_exists( 'acf_register_block_type' ) )
		return;
	acf_register_block_type( array(
		'name'			=> 'team-member',
		'title'			=> __( 'Team Member', 'clientname' ),
		'render_template'	=> 'view-team-member.php',
		'category'		=> 'formatting',
		'icon'			=> 'admin-users',
		'mode'			=> 'auto',
		'keywords'		=> array( 'profile', 'user', 'author' )
	));
}
add_action('acf/init', 'be_register_blocks' );