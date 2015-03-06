<?php

/**
 * Provide a dashboard view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Galtica
 * @subpackage Galtica/admin/partials
 */
?>

<div id="galtica-admin-page" class="wrap">
    <h2><span class="dashicons dashicons-welcome-widgets-menus"></span> Galtica</h2>

	<form id="galtica-installed-ctp-form" method="post" action="options.php">
		<?php // wp_nonce_field( 'galtica_action', 'galticar_form_nonce' ); ?>
		<?php
		settings_fields( 'galtica-settings-group' );
		do_settings_sections( 'galtica-settings-group' );

		$activate_conteudo_simples  = ( get_option('galtica-activate_conteudo_simples') == 'on' ? true : false);
		$activate_conteudo_colunas  = ( get_option('galtica-activate_conteudo_colunas') == 'on' ? true : false);
		$activate_galeria_de_midia  = ( get_option('galtica-activate_galeria_de_midia') == 'on' ? true : false);
		$activate_lista             = ( get_option('galtica-activate_lista') == 'on' ? true : false);
		$activate_accordion         = ( get_option('galtica-activate_accordion') == 'on' ? true : false);
		$activate_topo              = ( get_option('galtica-activate_topo') == 'on' ? true : false);

		// Check if has some add-on
		$default_cpt = array(
			'galtica-activate_conteudo_simples',
			'galtica-activate_conteudo_colunas',
			'galtica-activate_galeria_de_midia',
			'galtica-activate_lista',
			'galtica-activate_accordion',
			'galtica-activate_topo',
		);
		$addons = array();
		$check_addon = get_option('galtica_addon');
		if($check_addon){
			global $wpdb;
			// $results = $wpdb->get_results("SELECT * FROM wp_options WHERE option_name LIKE 'galtica-activate_%'", ARRAY_A);
			$results = $wpdb->get_results("SELECT * FROM wp_options WHERE option_name LIKE 'galtica_addon_%'", ARRAY_A);
			foreach($results as $i => $result){
                // $option_values = $result['option_value'];
                // $option_values = unserialize($result['option_value']);
                $option_unserialized = unserialize(unserialize($result['option_value']));
                $addons[$i]['galtica_addon_name'] = $option_unserialized['name'];
                $addons[$i]['galtica_addon_label'] = $option_unserialized['label'];
                $addons[$i]['galtica_addon_slug'] = $option_unserialized['slug'];
                // var_dump($option_unserialized); echo "<br>";

                /*var_dump($result['option_value']); echo "<br>";
                var_dump($option_values); echo "<br>";*/

                /*foreach($option_values as $option_value){
                    var_dump($option_value); echo "<br>";
                }*/
				/*if( !in_array($result['option_name'], $default_cpt) ){
					var_dump($result); echo "<br>";
					$result['xxx'] = ( get_option($result['option_name']) == 'on' ? true : false);
					array_push( $addons,$result );
				}*/
			}

			// echo "<pre>"; var_dump($addons); echo "</pre>";
		}

		?>
		<table id="galtica-installed-ctp" class="widefat" cellspacing="0">
	        <thead>
	        <tr>
		        <th scope="col" id="cb" class="manage-column column-cb check-column" style="">
			        <label class="screen-reader-text" for="cb-select-all-1">Selecionar todos</label>
			        <input id="cb-select-all-1" type="checkbox">
		        </th>
	            <th id="wpcf-table-name">Tipo de Conteúdo</th>
	            <th id="wpcf-table-description">Nome</th>
	            <th id="wpcf-table-active">Ativo</th>
	        </tr>
	        </thead>
	        <tfoot>
	        <tr>
		        <th scope="col" id="cb" class="manage-column column-cb check-column" style="">
			        <label class="screen-reader-text" for="cb-select-all-1">Selecionar todos</label>
			        <input id="cb-select-all-1" type="checkbox">
		        </th>
		        <th id="wpcf-table-name">Tipo de Conteúdo</th>
		        <th id="wpcf-table-description">Nome</th>
		        <th id="wpcf-table-active">Ativo</th>
	        </tr>
	        </tfoot>
	        <tbody>
	        <tr class="">
		        <th scope="row" class="check-column">
			        <label class="screen-reader-text" for="galtica-activate_conteudo_simples">Selecionar Conteúdo Simples</label>
			        <input id="galtica-activate_conteudo_simples" name="galtica-activate_conteudo_simples" type="checkbox" <?php if ($activate_conteudo_simples) { echo "checked"; }; ?>>
			        <div class="locked-indicator"></div>
		        </th>
		        <td class="wpcf-table-column-name">
			        <a href="#">Conteúdo Simples</a><br>
			        <div class="row-actions">
			            <a href="#">Ativar</a> |
				        <a href="#" class="wpcf-ajax-link" id="wpcf-list-activate-teste">Desativar</a> |
				        <a href="#" class="wpcf-ajax-link" id="wpcf-list-delete-teste">Excluir Permanentemente</a>
					</div>
	            <td class="wpcf-table-column-description">conteudo_simples</td>
	            <td class="wpcf-table-column-active-teste"><?php if ($activate_conteudo_simples) { echo "Sim"; }else{ echo "Não"; }; ?></td>
	        </tr>
	        <tr class="">
		        <th scope="row" class="check-column">
			        <label class="screen-reader-text" for="galtica-activate_conteudo_colunas">Selecionar Conteúdo em Colunas</label>
			        <input id="galtica-activate_conteudo_colunas" name="galtica-activate_conteudo_colunas" type="checkbox" <?php if ($activate_conteudo_colunas) { echo "checked"; }; ?>>
			        <div class="locked-indicator"></div>
		        </th>
		        <td class="wpcf-table-column-name">
			        <a href="#">Conteúdo em Colunas</a><br>
			        <div class="row-actions">
			            <a href="#">Ativar</a> |
				        <a href="#" class="wpcf-ajax-link" id="wpcf-list-activate-teste">Desativar</a> |
				        <a href="#" class="wpcf-ajax-link" id="wpcf-list-delete-teste">Excluir Permanentemente</a>
					</div>
		        <td class="wpcf-table-column-description">conteudo_colunas</td>
		        <td class="wpcf-table-column-active-teste"><?php if ($activate_conteudo_colunas) { echo "Sim"; }else{ echo "Não"; }; ?></td>
	        </tr>
	        <tr class="">
		        <th scope="row" class="check-column">
			        <label class="screen-reader-text" for="galtica-activate_galeria_de_midia">Selecionar Galeria de mídia</label>
			        <input id="galtica-activate_galeria_de_midia" name="galtica-activate_galeria_de_midia" type="checkbox" <?php if ($activate_galeria_de_midia) { echo "checked"; }; ?>>
			        <div class="locked-indicator"></div>
		        </th>
		        <td class="wpcf-table-column-name">
			        <a href="#">Galeria de mídia</a><br>
			        <div class="row-actions">
			            <a href="#">Ativar</a> |
				        <a href="#" class="wpcf-ajax-link" id="wpcf-list-activate-teste">Desativar</a> |
				        <a href="#" class="wpcf-ajax-link" id="wpcf-list-delete-teste">Excluir Permanentemente</a>
					</div>
		        <td class="wpcf-table-column-description">galeria_de_midia</td>
		        <td class="wpcf-table-column-active-teste"><?php if ($activate_galeria_de_midia) { echo "Sim"; }else{ echo "Não"; }; ?></td>
	        </tr>
	        <tr class="">
		        <th scope="row" class="check-column">
			        <label class="screen-reader-text" for="galtica-activate_lista">Selecionar Lista</label>
			        <input id="galtica-activate_lista" name="galtica-activate_lista" type="checkbox" <?php if ($activate_lista) { echo "checked"; }; ?>>
			        <div class="locked-indicator"></div>
		        </th>
		        <td class="wpcf-table-column-name">
			        <a href="#">Lista</a><br>
			        <div class="row-actions">
			            <a href="#">Ativar</a> |
				        <a href="#" class="wpcf-ajax-link" id="wpcf-list-activate-teste">Desativar</a> |
				        <a href="#" class="wpcf-ajax-link" id="wpcf-list-delete-teste">Excluir Permanentemente</a>
					</div>
		        <td class="wpcf-table-column-description">lista</td>
		        <td class="wpcf-table-column-active-teste"><?php if ($activate_lista) { echo "Sim"; }else{ echo "Não"; }; ?></td>
	        </tr>
	        <tr class="">
		        <th scope="row" class="check-column">
			        <label class="screen-reader-text" for="galtica-activate_accordion">Selecionar Accordion</label>
			        <input id="galtica-activate_accordion" name="galtica-activate_accordion" type="checkbox" <?php if ($activate_accordion) { echo "checked"; }; ?>>
			        <div class="locked-indicator"></div>
		        </th>
		        <td class="wpcf-table-column-name">
			        <a href="#">Accordion</a><br>
			        <div class="row-actions">
			            <a href="#">Ativar</a> |
				        <a href="#" class="wpcf-ajax-link" id="wpcf-list-activate-teste">Desativar</a> |
				        <a href="#" class="wpcf-ajax-link" id="wpcf-list-delete-teste">Excluir Permanentemente</a>
					</div>
		        <td class="wpcf-table-column-description">accordion</td>
		        <td class="wpcf-table-column-active-teste"><?php if ($activate_accordion) { echo "Sim"; }else{ echo "Não"; }; ?></td>
	        </tr>
	        <tr class="">
		        <th scope="row" class="check-column">
			        <label class="screen-reader-text" for="galtica-activate_topo">Selecionar Topo</label>
			        <input id="galtica-activate_topo" name="galtica-activate_topo" type="checkbox" <?php if ($activate_topo) { echo "checked"; }; ?>>
			        <div class="locked-indicator"></div>
		        </th>
		        <td class="wpcf-table-column-name">
			        <a href="#">Topo</a><br>
			        <div class="row-actions">
			            <a href="#">Ativar</a> |
				        <a href="#" class="wpcf-ajax-link" id="wpcf-list-activate-teste">Desativar</a> |
				        <a href="#" class="wpcf-ajax-link" id="wpcf-list-delete-teste">Excluir Permanentemente</a>
					</div>
		        <td class="wpcf-table-column-description">topo</td>
		        <td class="wpcf-table-column-active-teste"><?php if ($activate_topo) { echo "Sim"; }else{ echo "Não"; }; ?></td>
	        </tr>
        <?php

        for($i = 0; $i < count($addons); ++$i) { ?>
            <?php
            $addon_option = 'galtica-activate_' . $addons[$i]['galtica_addon_slug'];
            $activate_addon = ( get_option($addon_option) == 'on' ? true : false);
            ?>
	        <tr class="">
		        <th scope="row" class="check-column">
			        <label class="screen-reader-text" for="<?php echo $addons[$i]['galtica_addon_name']; ?>">Selecionar Topo</label>
			        <input id="<?php echo $addons[$i]['galtica_addon_name']; ?>" name="<?php echo $addons[$i]['galtica_addon_name']; ?>" type="checkbox" <?php if ($activate_addon) { echo "checked"; }; ?>>
			        <div class="locked-indicator"></div>
		        </th>
		        <td class="wpcf-table-column-name">
			        <a href="#"><?php echo $addons[$i]['galtica_addon_label']; ?></a><br>
			        <div class="row-actions">
				        <a href="#">Ativar</a> |
				        <a href="#" class="wpcf-ajax-link" id="wpcf-list-activate-teste">Desativar</a> |
				        <a href="#" class="wpcf-ajax-link" id="wpcf-list-delete-teste">Excluir Permanentemente</a>
			        </div>
		        <td class="wpcf-table-column-description">topo</td>
		        <td class="wpcf-table-column-active-teste"><?php if ($activate_addon) { echo "Sim"; }else{ echo "Não"; }; ?></td>
	        </tr>
        <?php }

	        ?>
	        </tbody>
	    </table>

		<div class="tablenav bottom">

			<div class="alignleft actions bulkactions">
				<label for="bulk-action-selector-bottom" class="screen-reader-text">Selecionar ação em massa</label><select name="action2" id="bulk-action-selector-bottom">
					<option value="-1" selected="selected">Ações em massa</option>
					<option value="activate" class="hide-if-no-js">Ativar</option>
					<option value="deactivate" class="hide-if-no-js">Desativar</option>
					<option value="trash">Mover para a lixeira</option>
				</select> <input type="submit" name="" id="doaction2" class="button action" value="Aplicar">
			</div>
			<div class="alignleft actions"></div>
			<div class="tablenav-pages one-page"><span class="displaying-num">1 item</span>
				<span class="pagination-links"><a class="first-page disabled" title="Ir para a primeira página" href="http://localhost/galtica/wp-admin/edit.php">«</a>
				<a class="prev-page disabled" title="Ir para a página anterior" href="http://localhost/galtica/wp-admin/edit.php?paged=1">‹</a>
				<span class="paging-input">1 de <span class="total-pages">1</span></span>
				<a class="next-page disabled" title="Ir para a próxima página" href="http://localhost/galtica/wp-admin/edit.php?paged=1">›</a>
				<a class="last-page disabled" title="Ir para a última página" href="http://localhost/galtica/wp-admin/edit.php?paged=1">»</a></span>
			</div>
			<br class="clear">
		</div>
		<?php submit_button(); ?>
	</form>
</div>
