<?php
class Galdar_CPT_Conteudo_Simples {

	public function __construct() {

		$this->register_galtica_cpt();

	}

	public function register_galtica_cpt() {

		if( function_exists('register_field_group') ):

			register_field_group(array (
				'key' => 'group_54e73d9f0ea3c',
				'title' => 'Galtica',
				'fields' => array (
					array (
						'key' => 'field_54e73daf6d895',
						'label' => 'Tipos de Conteúdo',
						'name' => 'galtica_cpt_content',
						'prefix' => '',
						'type' => 'flexible_content',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'button_label' => 'Adicionar Tipo de Conteúdo',
						'min' => '',
						'max' => '',
						'layouts' => array (
							array (
								'key' => '54e73db60acf6',
								'name' => 'conteudo_simples',
								'label' => 'Conteúdo Simples',
								'display' => 'row',
								'sub_fields' => array (
									array (
										'key' => 'field_54e73e126d896',
										'label' => 'Título',
										'name' => 'titulo',
										'prefix' => '',
										'type' => 'text',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array (
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'default_value' => '',
										'placeholder' => '',
										'prepend' => '',
										'append' => '',
										'maxlength' => '',
										'readonly' => 0,
										'disabled' => 0,
									),
									array (
										'key' => 'field_54e73e1f6d897',
										'label' => 'Subtítulo',
										'name' => 'subtitulo',
										'prefix' => '',
										'type' => 'text',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array (
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'default_value' => '',
										'placeholder' => '',
										'prepend' => '',
										'append' => '',
										'maxlength' => '',
										'readonly' => 0,
										'disabled' => 0,
									),
									array (
										'key' => 'field_54e73f0dae583',
										'label' => 'Tipo de Mídia',
										'name' => 'tipo_de_midia',
										'prefix' => '',
										'type' => 'radio',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array (
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'choices' => array (
											'Imagem' => 'Imagem',
											'Vídeo' => 'Vídeo',
										),
										'other_choice' => 0,
										'save_other_choice' => 0,
										'default_value' => '',
										'layout' => 'vertical',
									),
									array (
										'key' => 'field_54e73e2e6d898',
										'label' => 'Imagem',
										'name' => 'imagem',
										'prefix' => '',
										'type' => 'image',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => array (
											array (
												array (
													'field' => 'field_54e73f0dae583',
													'operator' => '==',
													'value' => 'Imagem',
												),
											),
										),
										'wrapper' => array (
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'return_format' => 'array',
										'preview_size' => 'thumbnail',
										'library' => 'all',
									),
									array (
										'key' => 'field_54e73f5fae584',
										'label' => 'Vídeo',
										'name' => 'video',
										'prefix' => '',
										'type' => 'file',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => array (
											array (
												array (
													'field' => 'field_54e73f0dae583',
													'operator' => '==',
													'value' => 'Vídeo',
												),
											),
										),
										'wrapper' => array (
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'return_format' => 'array',
										'library' => 'all',
									),
									array (
										'key' => 'field_54ea34e544aea',
										'label' => 'Exibição',
										'name' => 'exibicao',
										'prefix' => '',
										'type' => 'select',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array (
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'choices' => array (
											'Título e subtítulo à esquerda e mídia à direita' => 'Título e subtítulo à esquerda e mídia à direita',
											'Mídia à esquerda e titulo e subtítulo à direita' => 'Mídia à esquerda e titulo e subtítulo à direita',
											'Título e subtítulo centralizados e mídia como background' => 'Título e subtítulo centralizados e mídia como background',
										),
										'default_value' => array (
											'' => '',
										),
										'allow_null' => 0,
										'multiple' => 0,
										'ui' => 0,
										'ajax' => 0,
										'placeholder' => '',
										'disabled' => 0,
										'readonly' => 0,
									),
								),
								'min' => '',
								'max' => '',
							),
							array (
								'key' => '54ea3905367bf',
								'name' => 'conteudo_colunas',
								'label' => 'Conteúdo em Colunas',
								'display' => 'row',
								'sub_fields' => array (
									array (
										'key' => 'field_54ea3905367c0',
										'label' => 'Título',
										'name' => 'titulo',
										'prefix' => '',
										'type' => 'text',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array (
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'default_value' => '',
										'placeholder' => '',
										'prepend' => '',
										'append' => '',
										'maxlength' => '',
										'readonly' => 0,
										'disabled' => 0,
									),
									array (
										'key' => 'field_54ea3905367c1',
										'label' => 'Subtítulo',
										'name' => 'subtitulo',
										'prefix' => '',
										'type' => 'text',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array (
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'default_value' => '',
										'placeholder' => '',
										'prepend' => '',
										'append' => '',
										'maxlength' => '',
										'readonly' => 0,
										'disabled' => 0,
									),
									array (
										'key' => 'field_54ea39773ffc4',
										'label' => 'Texto',
										'name' => 'texto',
										'prefix' => '',
										'type' => 'wysiwyg',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array (
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'default_value' => '',
										'tabs' => 'all',
										'toolbar' => 'full',
										'media_upload' => 1,
									),
									array (
										'key' => 'field_54ea3905367c2',
										'label' => 'Tipo de Mídia',
										'name' => 'tipo_de_midia',
										'prefix' => '',
										'type' => 'radio',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array (
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'choices' => array (
											'Imagem' => 'Imagem',
											'Vídeo' => 'Vídeo',
										),
										'other_choice' => 0,
										'save_other_choice' => 0,
										'default_value' => '',
										'layout' => 'vertical',
									),
									array (
										'key' => 'field_54ea3905367c3',
										'label' => 'Imagem',
										'name' => 'imagem',
										'prefix' => '',
										'type' => 'image',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => array (
											array (
												array (
													'field' => 'field_54ea3905367c2',
													'operator' => '==',
													'value' => 'Imagem',
												),
											),
										),
										'wrapper' => array (
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'return_format' => 'array',
										'preview_size' => 'thumbnail',
										'library' => 'all',
									),
									array (
										'key' => 'field_54ea3905367c4',
										'label' => 'Vídeo',
										'name' => 'video',
										'prefix' => '',
										'type' => 'file',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => array (
											array (
												array (
													'field' => 'field_54ea3905367c2',
													'operator' => '==',
													'value' => 'Vídeo',
												),
											),
										),
										'wrapper' => array (
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'return_format' => 'array',
										'library' => 'all',
									),
									array (
										'key' => 'field_54ec7c58b634e',
										'label' => 'Quantidade de Colunas',
										'name' => 'quantidade_de_colunas',
										'prefix' => '',
										'type' => 'radio',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array (
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'choices' => array (
											1 => 1,
											2 => 2,
											3 => 3,
										),
										'other_choice' => 0,
										'save_other_choice' => 0,
										'default_value' => 1,
										'layout' => 'horizontal',
									),
									array (
										'key' => 'field_54ea3905367c5',
										'label' => 'Exibição',
										'name' => 'exibicao',
										'prefix' => '',
										'type' => 'select',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array (
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'choices' => array (
											'Título, subtítulo, texto sem mídia' => 'Título, subtítulo, texto sem mídia',
											'Mídia à esquerda e Titulo, subtítulo e texto à esquerda' => 'Mídia à esquerda e Titulo, subtítulo e texto à esquerda',
											'Titulo, subtítulo e texto à direita e Mídia à esquerda' => 'Titulo, subtítulo e texto à direita e Mídia à esquerda',
										),
										'default_value' => array (
											'' => '',
										),
										'allow_null' => 0,
										'multiple' => 0,
										'ui' => 0,
										'ajax' => 0,
										'placeholder' => '',
										'disabled' => 0,
										'readonly' => 0,
									),
								),
								'min' => '',
								'max' => '',
							),
							array (
								'key' => '54ea3a13cb683',
								'name' => 'galeria_de_midia',
								'label' => 'Galeria de mídia',
								'display' => 'row',
								'sub_fields' => array (
									array (
										'key' => 'field_54ea3a2ccb684',
										'label' => 'Título da Galeria',
										'name' => 'titulo',
										'prefix' => '',
										'type' => 'text',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array (
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'default_value' => '',
										'placeholder' => '',
										'prepend' => '',
										'append' => '',
										'maxlength' => '',
										'readonly' => 0,
										'disabled' => 0,
									),
									array (
										'key' => 'field_54ec7dd13a501',
										'label' => 'Tipo de Mídia',
										'name' => 'tipo_de_midia',
										'prefix' => '',
										'type' => 'radio',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array (
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'choices' => array (
											'Imagem' => 'Imagem',
											'Vídeo' => 'Vídeo',
										),
										'other_choice' => 0,
										'save_other_choice' => 0,
										'default_value' => '',
										'layout' => 'vertical',
									),
									array (
										'key' => 'field_54ea3a56cb685',
										'label' => 'Galeria',
										'name' => 'galeria',
										'prefix' => '',
										'type' => 'gallery',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array (
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'min' => '',
										'max' => '',
										'preview_size' => 'thumbnail',
										'library' => 'all',
									),
									array (
										'key' => 'field_54ea3b87807fc',
										'label' => 'Tipo de galeria',
										'name' => 'tipo_de_galeria',
										'prefix' => '',
										'type' => 'select',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array (
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'choices' => array (
											'Slider' => 'Slider',
											'Grid' => 'Grid',
											'Carrosel' => 'Carrosel',
										),
										'default_value' => array (
											'' => '',
										),
										'allow_null' => 0,
										'multiple' => 0,
										'ui' => 0,
										'ajax' => 0,
										'placeholder' => '',
										'disabled' => 0,
										'readonly' => 0,
									),
									array (
										'key' => 'field_54ea3bb9807fd',
										'label' => 'Itens por página',
										'name' => 'itens_por_pagina',
										'prefix' => '',
										'type' => 'number',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array (
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'default_value' => 1,
										'placeholder' => '',
										'prepend' => '',
										'append' => '',
										'min' => 1,
										'max' => '',
										'step' => '',
										'readonly' => 0,
										'disabled' => 0,
									),
								),
								'min' => '',
								'max' => '',
							),
							array (
								'key' => '54ea3c5487d44',
								'name' => 'lista',
								'label' => 'Lista',
								'display' => 'row',
								'sub_fields' => array (
									array (
										'key' => 'field_54ec7e063a502',
										'label' => 'Item',
										'name' => 'item',
										'prefix' => '',
										'type' => 'repeater',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array (
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'min' => '',
										'max' => '',
										'layout' => 'table',
										'button_label' => 'Adicionar Item',
										'sub_fields' => array (
											array (
												'key' => 'field_54ea3c8687d47',
												'label' => 'Imagem',
												'name' => 'imagem',
												'prefix' => '',
												'type' => 'image',
												'instructions' => '',
												'required' => 0,
												'conditional_logic' => 0,
												'wrapper' => array (
													'width' => '',
													'class' => '',
													'id' => '',
												),
												'return_format' => 'array',
												'preview_size' => 'thumbnail',
												'library' => 'all',
											),
											array (
												'key' => 'field_54ea3c6687d45',
												'label' => 'Título',
												'name' => 'titulo',
												'prefix' => '',
												'type' => 'text',
												'instructions' => '',
												'required' => 0,
												'conditional_logic' => 0,
												'wrapper' => array (
													'width' => '',
													'class' => '',
													'id' => '',
												),
												'default_value' => '',
												'placeholder' => '',
												'prepend' => '',
												'append' => '',
												'maxlength' => '',
												'readonly' => 0,
												'disabled' => 0,
											),
											array (
												'key' => 'field_54ea3c6c87d46',
												'label' => 'URL',
												'name' => 'url',
												'prefix' => '',
												'type' => 'text',
												'instructions' => '',
												'required' => 0,
												'conditional_logic' => 0,
												'wrapper' => array (
													'width' => '',
													'class' => '',
													'id' => '',
												),
												'default_value' => '',
												'placeholder' => 'http://',
												'prepend' => '',
												'append' => '',
												'maxlength' => '',
												'readonly' => 0,
												'disabled' => 0,
											),
										),
									),
									array (
										'key' => 'field_54ec7f3f7a30e',
										'label' => 'Tipo de lista',
										'name' => 'tipo_de_lista',
										'prefix' => '',
										'type' => 'select',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array (
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'choices' => array (
											'Lista simples' => 'Lista simples',
											'Lista com itens à esquerda e thumbnail à direita' => 'Lista com itens à esquerda e thumbnail à direita',
											'Lista com thumbnail à esquerda e itens à direita' => 'Lista com thumbnail à esquerda e itens à direita',
											'Lista explicativa' => 'Lista explicativa',
											'Lista em grade' => 'Lista em grade',
										),
										'default_value' => array (
											'' => '',
										),
										'allow_null' => 0,
										'multiple' => 0,
										'ui' => 0,
										'ajax' => 0,
										'placeholder' => '',
										'disabled' => 0,
										'readonly' => 0,
									),
									array (
										'key' => 'field_54ec7f737a30f',
										'label' => 'Itens por página',
										'name' => 'itens_por_pagina',
										'prefix' => '',
										'type' => 'number',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => array (
											array (
												array (
													'field' => 'field_54ec7f3f7a30e',
													'operator' => '==',
													'value' => 'Lista em grade',
												),
											),
										),
										'wrapper' => array (
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'default_value' => 1,
										'placeholder' => '',
										'prepend' => '',
										'append' => '',
										'min' => 1,
										'max' => '',
										'step' => '',
										'readonly' => 0,
										'disabled' => 0,
									),
									array (
										'key' => 'field_54ec7fbb7a311',
										'label' => 'Primeiro item destacado',
										'name' => 'primeiro_item_destacado',
										'prefix' => '',
										'type' => 'radio',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => array (
											array (
												array (
													'field' => 'field_54ec7f3f7a30e',
													'operator' => '==',
													'value' => 'Lista em grade',
												),
											),
										),
										'wrapper' => array (
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'choices' => array (
											'Sim' => 'Sim',
											'Não' => 'Não',
										),
										'other_choice' => 0,
										'save_other_choice' => 0,
										'default_value' => 'Sim',
										'layout' => 'horizontal',
									),
								),
								'min' => '',
								'max' => '',
							),
							array (
								'key' => '54ea3cc587d48',
								'name' => 'accordion',
								'label' => 'Accordion',
								'display' => 'row',
								'sub_fields' => array (
									array (
										'key' => 'field_54ec806eafb7d',
										'label' => 'Item',
										'name' => 'item',
										'prefix' => '',
										'type' => 'repeater',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array (
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'min' => '',
										'max' => '',
										'layout' => 'row',
										'button_label' => 'Adicionar Linha',
										'sub_fields' => array (
											array (
												'key' => 'field_54ec81471896f',
												'label' => 'Título',
												'name' => 'titulo',
												'prefix' => '',
												'type' => 'text',
												'instructions' => '',
												'required' => 0,
												'conditional_logic' => 0,
												'wrapper' => array (
													'width' => '',
													'class' => '',
													'id' => '',
												),
												'default_value' => '',
												'placeholder' => '',
												'prepend' => '',
												'append' => '',
												'maxlength' => '',
												'readonly' => 0,
												'disabled' => 0,
											),
											array (
												'key' => 'field_54ec814718970',
												'label' => 'Texto',
												'name' => 'texto',
												'prefix' => '',
												'type' => 'wysiwyg',
												'instructions' => '',
												'required' => 0,
												'conditional_logic' => 0,
												'wrapper' => array (
													'width' => '',
													'class' => '',
													'id' => '',
												),
												'default_value' => '',
												'tabs' => 'all',
												'toolbar' => 'full',
												'media_upload' => 1,
											),
										),
									),
									array (
										'key' => 'field_54ec80e22d325',
										'label' => 'Comportamento',
										'name' => 'comportamento',
										'prefix' => '',
										'type' => 'radio',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array (
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'choices' => array (
											'Click' => 'Click',
											'Hover' => 'Hover',
										),
										'other_choice' => 0,
										'save_other_choice' => 0,
										'default_value' => 'Click',
										'layout' => 'horizontal',
									),
									array (
										'key' => 'field_54ec810a2d326',
										'label' => 'Permitir abrir todos os itens',
										'name' => 'permitir_abrir_todos_os_itens',
										'prefix' => '',
										'type' => 'radio',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array (
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'choices' => array (
											'Sim' => 'Sim',
											'Não' => 'Não',
										),
										'other_choice' => 0,
										'save_other_choice' => 0,
										'default_value' => 'Sim',
										'layout' => 'horizontal',
									),
								),
								'min' => '',
								'max' => '',
							),
							array (
								'key' => '54ec81471896d',
								'name' => 'topo',
								'label' => 'Topo',
								'display' => 'row',
								'sub_fields' => array (
									array (
										'key' => 'field_54ec81471896e',
										'label' => 'Item',
										'name' => 'item',
										'prefix' => '',
										'type' => 'repeater',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array (
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'min' => '',
										'max' => '',
										'layout' => 'row',
										'button_label' => 'Adicionar Item',
										'sub_fields' => array (
											array (
												'key' => 'field_54ec8255a1e75',
												'label' => 'Icone',
												'name' => 'icone_topo',
												'prefix' => '',
												'type' => 'image',
												'instructions' => '',
												'required' => 0,
												'conditional_logic' => 0,
												'wrapper' => array (
													'width' => '',
													'class' => '',
													'id' => '',
												),
												'return_format' => 'array',
												'preview_size' => 'thumbnail',
												'library' => 'all',
											),
											array (
												'key' => 'field_54ec8267a1e76',
												'label' => 'Fundo',
												'name' => 'background_topo',
												'prefix' => '',
												'type' => 'image',
												'instructions' => '',
												'required' => 0,
												'conditional_logic' => 0,
												'wrapper' => array (
													'width' => '',
													'class' => '',
													'id' => '',
												),
												'return_format' => 'array',
												'preview_size' => 'thumbnail',
												'library' => 'all',
											),
											array (
												'key' => 'field_54ec8274a1e77',
												'label' => 'Imagem',
												'name' => 'imagem_topo',
												'prefix' => '',
												'type' => 'image',
												'instructions' => '',
												'required' => 0,
												'conditional_logic' => 0,
												'wrapper' => array (
													'width' => '',
													'class' => '',
													'id' => '',
												),
												'return_format' => 'array',
												'preview_size' => 'thumbnail',
												'library' => 'all',
											),
											array (
												'key' => 'field_54ec827fa1e78',
												'label' => 'Título',
												'name' => 'titulo',
												'prefix' => '',
												'type' => 'text',
												'instructions' => '',
												'required' => 0,
												'conditional_logic' => 0,
												'wrapper' => array (
													'width' => '',
													'class' => '',
													'id' => '',
												),
												'default_value' => '',
												'placeholder' => '',
												'prepend' => '',
												'append' => '',
												'maxlength' => '',
												'readonly' => 0,
												'disabled' => 0,
											),
											array (
												'key' => 'field_54ec828ba1e79',
												'label' => 'Tipo de mídia',
												'name' => 'tipo_de_midia',
												'prefix' => '',
												'type' => 'radio',
												'instructions' => '',
												'required' => 0,
												'conditional_logic' => 0,
												'wrapper' => array (
													'width' => '',
													'class' => '',
													'id' => '',
												),
												'choices' => array (
													'Imagem' => 'Imagem',
													'Vídeo' => 'Vídeo',
												),
												'other_choice' => 0,
												'save_other_choice' => 0,
												'default_value' => '',
												'layout' => 'vertical',
											),
											array (
												'key' => 'field_54ec82c0a1e7a',
												'label' => 'Imagem',
												'name' => 'imagem',
												'prefix' => '',
												'type' => 'image',
												'instructions' => '',
												'required' => 0,
												'conditional_logic' => array (
													array (
														array (
															'field' => 'field_54ec828ba1e79',
															'operator' => '==',
															'value' => 'Imagem',
														),
													),
												),
												'wrapper' => array (
													'width' => '',
													'class' => '',
													'id' => '',
												),
												'return_format' => 'array',
												'preview_size' => 'thumbnail',
												'library' => 'all',
											),
											array (
												'key' => 'field_54ec8310a1e7b',
												'label' => 'Vídeo',
												'name' => 'video',
												'prefix' => '',
												'type' => 'file',
												'instructions' => '',
												'required' => 0,
												'conditional_logic' => array (
													array (
														array (
															'field' => 'field_54ec828ba1e79',
															'operator' => '==',
															'value' => 'Vídeo',
														),
													),
												),
												'wrapper' => array (
													'width' => '',
													'class' => '',
													'id' => '',
												),
												'return_format' => 'array',
												'library' => 'all',
											),
											array (
												'key' => 'field_54ec8333a1e7c',
												'label' => 'Tipo',
												'name' => 'tipo',
												'prefix' => '',
												'type' => 'select',
												'instructions' => '',
												'required' => 0,
												'conditional_logic' => 0,
												'wrapper' => array (
													'width' => '',
													'class' => '',
													'id' => '',
												),
												'choices' => array (
													'Imagem à esquerda, titulo e texto à direita,' => 'Imagem à esquerda, titulo e texto à direita,',
													'Título e texto à esquerda e imagem à direita,' => 'Título e texto à esquerda e imagem à direita,',
													'Imagem e coluna de texto à direita' => 'Imagem e coluna de texto à direita',
												),
												'default_value' => array (
													'' => '',
												),
												'allow_null' => 0,
												'multiple' => 0,
												'ui' => 0,
												'ajax' => 0,
												'placeholder' => '',
												'disabled' => 0,
												'readonly' => 0,
											),
										),
									),
									array (
										'key' => 'field_54ec814718971',
										'label' => 'Animação',
										'name' => 'animacao',
										'prefix' => '',
										'type' => 'radio',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array (
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'choices' => array (
											'Slide' => 'Slide',
											'Fade' => 'Fade',
										),
										'other_choice' => 0,
										'save_other_choice' => 0,
										'default_value' => 'Slide',
										'layout' => 'horizontal',
									),
									array (
										'key' => 'field_54ec814718972',
										'label' => 'Duração',
										'name' => 'duracao',
										'prefix' => '',
										'type' => 'select',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array (
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'choices' => array (
											'5s' => '5s',
											'7s' => '7s',
											'10s' => '10s',
											'15s' => '15s',
											'30s' => '30s',
											'40s' => '40s',
											'60s' => '60s',
										),
										'default_value' => array (
											'5s' => '5s',
										),
										'allow_null' => 0,
										'multiple' => 0,
										'ui' => 0,
										'ajax' => 0,
										'placeholder' => '',
										'disabled' => 0,
										'readonly' => 0,
									),
								),
								'min' => '',
								'max' => '',
							),
                            // Add-ons
                            /*array (
                                'key' => '54f5aec929da2',
                                'name' => 'foo',
                                'label' => 'Foo',
                                'display' => 'row',
                                'sub_fields' => array (
                                    array (
                                        'key' => 'field_54f5aed88b479',
                                        'label' => 'Foo Title',
                                        'name' => 'foo_title',
                                        'prefix' => '',
                                        'type' => 'text',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array (
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                        'placeholder' => '',
                                        'prepend' => '',
                                        'append' => '',
                                        'maxlength' => '',
                                        'readonly' => 0,
                                        'disabled' => 0,
                                    ),
                                    array (
                                        'key' => 'field_54f5aee68b47a',
                                        'label' => 'Are u foo?',
                                        'name' => 'are_u_foo',
                                        'prefix' => '',
                                        'type' => 'radio',
                                        'instructions' => 'Foo Faa',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array (
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'choices' => array (
                                            '' => '',
                                        ),
                                        'other_choice' => 0,
                                        'save_other_choice' => 0,
                                        'default_value' => '',
                                        'layout' => 'vertical',
                                    ),
                                ),
                                'min' => '',
                                'max' => '',
                            ),*/
                            // Add-ons
						),
					),
				),
				'location' => array (
					array (
						array (
							'param' => 'post_type',
							'operator' => '==',
							'value' => 'page',
						),
					),
				),
				'menu_order' => 0,
				'position' => 'normal',
				'style' => 'default',
				'label_placement' => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen' => array (
					0 => 'permalink',
					1 => 'the_content',
					2 => 'excerpt',
					3 => 'custom_fields',
					4 => 'discussion',
					5 => 'comments',
					6 => 'revisions',
					7 => 'slug',
					8 => 'author',
					9 => 'format',
					10 => 'page_attributes',
					11 => 'featured_image',
					12 => 'categories',
					13 => 'tags',
					14 => 'send-trackbacks',
				),
			));
		endif;
	}

}