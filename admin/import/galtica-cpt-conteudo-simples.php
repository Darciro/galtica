<?php
class Galdar_CPT_Conteudo_Simples {

	public function __construct() {

		$this->register_galtica_cpt();

	}

	public function register_galtica_cpt() {

		if ( function_exists( 'register_field_group' ) ):

			register_field_group( array(
				'key'                   => 'group_54e73d9f0ea3c',
				'title'                 => 'Conteúdo',
				'fields'                => array(
					array(
						'key'               => 'field_54e73daf6d895',
						'label'             => 'Conteúdo Simples',
						'name'              => 'galtica_conteudo_simples',
						'prefix'            => '',
						'type'              => 'flexible_content',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'button_label'      => 'Adicionar Tipo de Conteúdo',
						'min'               => '',
						'max'               => '',
						'layouts'           => array(
							array(
								'key'        => '54e73db60acf6',
								'name'       => 'conteudo_simples',
								'label'      => 'Conteúdo Simples',
								'display'    => 'row',
								'sub_fields' => array(
									array(
										'key'               => 'field_54e73e126d896',
										'label'             => 'Título',
										'name'              => 'titulo',
										'prefix'            => '',
										'type'              => 'text',
										'instructions'      => '',
										'required'          => 0,
										'conditional_logic' => 0,
										'wrapper'           => array(
											'width' => '',
											'class' => '',
											'id'    => '',
										),
										'default_value'     => '',
										'placeholder'       => '',
										'prepend'           => '',
										'append'            => '',
										'maxlength'         => '',
										'readonly'          => 0,
										'disabled'          => 0,
									),
									array(
										'key'               => 'field_54e73e1f6d897',
										'label'             => 'Subtítulo',
										'name'              => 'subtitulo',
										'prefix'            => '',
										'type'              => 'text',
										'instructions'      => '',
										'required'          => 0,
										'conditional_logic' => 0,
										'wrapper'           => array(
											'width' => '',
											'class' => '',
											'id'    => '',
										),
										'default_value'     => '',
										'placeholder'       => '',
										'prepend'           => '',
										'append'            => '',
										'maxlength'         => '',
										'readonly'          => 0,
										'disabled'          => 0,
									),
									array(
										'key'               => 'field_54e73f0dae583',
										'label'             => 'Tipo de Mídia',
										'name'              => 'tipo_de_midia',
										'prefix'            => '',
										'type'              => 'radio',
										'instructions'      => '',
										'required'          => 0,
										'conditional_logic' => 0,
										'wrapper'           => array(
											'width' => '',
											'class' => '',
											'id'    => '',
										),
										'choices'           => array(
											'Imagem' => 'Imagem',
											'Vídeo'  => 'Vídeo',
										),
										'other_choice'      => 0,
										'save_other_choice' => 0,
										'default_value'     => '',
										'layout'            => 'vertical',
									),
									array(
										'key'               => 'field_54e73e2e6d898',
										'label'             => 'Imagem',
										'name'              => 'imagem',
										'prefix'            => '',
										'type'              => 'image',
										'instructions'      => '',
										'required'          => 0,
										'conditional_logic' => array(
											array(
												array(
													'field'    => 'field_54e73f0dae583',
													'operator' => '==',
													'value'    => 'Imagem',
												),
											),
										),
										'wrapper'           => array(
											'width' => '',
											'class' => '',
											'id'    => '',
										),
										'return_format'     => 'array',
										'preview_size'      => 'thumbnail',
										'library'           => 'all',
									),
									array(
										'key'               => 'field_54e73f5fae584',
										'label'             => 'Vídeo',
										'name'              => 'video',
										'prefix'            => '',
										'type'              => 'oembed',
										'instructions'      => '',
										'required'          => 0,
										'conditional_logic' => array(
											array(
												array(
													'field'    => 'field_54e73f0dae583',
													'operator' => '==',
													'value'    => 'Vídeo',
												),
											),
										),
										'wrapper'           => array(
											'width' => '',
											'class' => '',
											'id'    => '',
										),
										'width'             => '',
										'height'            => '',
									),
								),
								'min'        => '',
								'max'        => '',
							),
						),
					),
				),
				'location'              => array(
					array(
						array(
							'param'    => 'post_type',
							'operator' => '==',
							'value'    => 'page',
						),
					),
				),
				'menu_order'            => 0,
				'position'              => 'normal',
				'style'                 => 'default',
				'label_placement'       => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen'        => array(
					0  => 'permalink',
					1  => 'the_content',
					2  => 'excerpt',
					3  => 'custom_fields',
					4  => 'discussion',
					5  => 'comments',
					6  => 'revisions',
					7  => 'slug',
					8  => 'author',
					9  => 'format',
					10 => 'page_attributes',
					11 => 'featured_image',
					12 => 'categories',
					13 => 'tags',
					14 => 'send-trackbacks',
				),
			) );

		endif;
	}

}