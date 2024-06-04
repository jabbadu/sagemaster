<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_6639f65685e0b',
	'title' => 'Seitenelemente',
	'fields' => array(
		array(
			'key' => 'field_6639f656a9fd5',
			'label' => 'Seitenelemente',
			'name' => 'pageelements',
			'aria-label' => '',
			'type' => 'flexible_content',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_flexible_advanced' => 1,
			'acfe_flexible_stylised_button' => 1,
			'acfe_flexible_layouts_templates' => 1,
			'acfe_flexible_layouts_previews' => 1,
			'acfe_flexible_layouts_thumbnails' => 0,
			'acfe_flexible_layouts_settings' => 0,
			'acfe_flexible_layouts_locations' => 0,
			'acfe_flexible_async' => array(
			),
			'acfe_flexible_add_actions' => array(
			),
			'acfe_flexible_remove_button' => array(
			),
			'acfe_flexible_layouts_state' => 'user',
			'acfe_flexible_modal_edit' => array(
				'acfe_flexible_modal_edit_enabled' => '0',
				'acfe_flexible_modal_edit_size' => 'large',
			),
			'acfe_flexible_modal' => array(
				'acfe_flexible_modal_enabled' => '0',
				'acfe_flexible_modal_title' => false,
				'acfe_flexible_modal_size' => 'full',
				'acfe_flexible_modal_col' => '4',
				'acfe_flexible_modal_categories' => false,
			),
			'acfe_flexible_grid' => array(
				'acfe_flexible_grid_enabled' => '0',
				'acfe_flexible_grid_align' => 'center',
				'acfe_flexible_grid_valign' => 'stretch',
				'acfe_flexible_grid_wrap' => false,
			),
			'layouts' => array(
				'layout_6639f69661f80' => array(
					'key' => 'layout_6639f69661f80',
					'name' => 'text',
					'label' => 'Text',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_6639f6aea9fd6',
							'label' => 'Seiteninhalt',
							'name' => 'element',
							'aria-label' => '',
							'type' => 'clone',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'clone' => array(
								0 => 'group_6639f7f6e00c7',
							),
							'display' => 'seamless',
							'layout' => 'block',
							'prefix_label' => 0,
							'prefix_name' => 0,
							'acfe_seamless_style' => 0,
							'acfe_clone_modal' => 0,
							'acfe_clone_modal_close' => 0,
							'acfe_clone_modal_button' => '',
							'acfe_clone_modal_size' => 'large',
						),
					),
					'min' => '',
					'max' => '',
					'acfe_flexible_render_template' => false,
					'acfe_flexible_render_style' => false,
					'acfe_flexible_render_script' => false,
					'acfe_flexible_thumbnail' => false,
					'acfe_flexible_settings' => false,
					'acfe_flexible_settings_size' => 'medium',
					'acfe_layout_locations' => array(
					),
					'acfe_flexible_modal_edit_size' => false,
					'acfe_flexible_category' => false,
					'acfe_layout_col' => 'auto',
					'acfe_layout_allowed_col' => false,
				),
			),
			'min' => '',
			'max' => '',
			'button_label' => 'Eintrag hinzufügen',
			'acfe_flexible_hide_empty_message' => false,
			'acfe_flexible_empty_message' => '',
			'acfe_flexible_layouts_placeholder' => false,
			'acfe_flexible_grid_container' => false,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'templates/pagebuilder.blade.php',
			),
		),
	),
	'menu_order' => 30,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'left',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'author',
		1 => 'featured_image',
		2 => 'block_editor',
		3 => 'discussion',
		4 => 'format',
		5 => 'the_content',
		6 => 'categories',
		7 => 'comments',
		8 => 'major_publish',
		9 => 'minor_publish',
		10 => 'misc_publish',
		11 => 'trash',
		12 => 'permalink',
		13 => 'post_status',
		14 => 'visibility',
		15 => 'preview',
		16 => 'publish_date',
		17 => 'publish_metabox',
		18 => 'publish',
		19 => 'revisions',
		20 => 'save_draft',
		21 => 'tags',
		22 => 'page_attributes',
		23 => 'excerpt',
		24 => 'slug',
		25 => 'title',
		26 => 'send-trackbacks',
	),
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
	'acfe_autosync' => array(
		0 => 'php',
	),
	'acfe_form' => 0,
	'acfe_display_title' => '',
	'acfe_meta' => '',
	'acfe_note' => '',
	'modified' => 1717527602,
));

endif;