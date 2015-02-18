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

<div class="wrap">
    <div id="icon-edit" class="icon32"></div>
    <h2>Galtica</h2>
    <p>Nesta tela será mostrado a lista de tipos de conteúdo criados e suas taxonomias</p>
    <P>Passos:</P>
    <ul>
        <li>O usuário irá cadastrar um tipo de conteúdo;</li>
        <li>Em seguida irá definir os campos que esse conteúdo terá</li>
    </ul>

    <!--<table class="wp-list-table widefat fixed posts">
        <thead>
        <tr>
            <th scope="col" id="cb" class="manage-column column-cb check-column" style=""><label class="screen-reader-text" for="cb-select-all-1">Selecionar todos</label><input id="cb-select-all-1" type="checkbox"></th><th scope="col" id="title" class="manage-column column-title sortable desc" style=""><a href="http://localhost/galtica/wp-admin/edit.php?orderby=title&amp;order=asc"><span>Título</span><span class="sorting-indicator"></span></a></th><th scope="col" id="author" class="manage-column column-author" style="">Autor</th><th scope="col" id="categories" class="manage-column column-categories" style="">Categorias</th><th scope="col" id="tags" class="manage-column column-tags" style="">Tags</th><th scope="col" id="comments" class="manage-column column-comments num sortable desc" style=""><a href="http://localhost/galtica/wp-admin/edit.php?orderby=comment_count&amp;order=asc"><span><span class="vers"><span title="Comentários" class="comment-grey-bubble"></span></span></span><span class="sorting-indicator"></span></a></th><th scope="col" id="date" class="manage-column column-date sortable asc" style=""><a href="http://localhost/galtica/wp-admin/edit.php?orderby=date&amp;order=desc"><span>Data</span><span class="sorting-indicator"></span></a></th>	</tr>
        </thead>

        <tfoot>
        <tr>
            <th scope="col" class="manage-column column-cb check-column" style=""><label class="screen-reader-text" for="cb-select-all-2">Selecionar todos</label><input id="cb-select-all-2" type="checkbox"></th><th scope="col" class="manage-column column-title sortable desc" style=""><a href="http://localhost/galtica/wp-admin/edit.php?orderby=title&amp;order=asc"><span>Título</span><span class="sorting-indicator"></span></a></th><th scope="col" class="manage-column column-author" style="">Autor</th><th scope="col" class="manage-column column-categories" style="">Categorias</th><th scope="col" class="manage-column column-tags" style="">Tags</th><th scope="col" class="manage-column column-comments num sortable desc" style=""><a href="http://localhost/galtica/wp-admin/edit.php?orderby=comment_count&amp;order=asc"><span><span class="vers"><span title="Comentários" class="comment-grey-bubble"></span></span></span><span class="sorting-indicator"></span></a></th><th scope="col" class="manage-column column-date sortable asc" style=""><a href="http://localhost/galtica/wp-admin/edit.php?orderby=date&amp;order=desc"><span>Data</span><span class="sorting-indicator"></span></a></th>	</tr>
        </tfoot>

        <tbody id="the-list">
        <tr id="post-1" class="post-1 type-post status-publish format-standard hentry category-sem-categoria alternate iedit author-self level-0">
            <th scope="row" class="check-column">
                <label class="screen-reader-text" for="cb-select-1">Selecionar Olá, mundo!</label>
                <input id="cb-select-1" type="checkbox" name="post[]" value="1">
                <div class="locked-indicator"></div>
            </th>
            <td class="post-title page-title column-title"><strong><a class="row-title" href="http://localhost/galtica/wp-admin/post.php?post=1&amp;action=edit" title="Editar “Olá, mundo!”">Olá, mundo!</a></strong>
                <div class="locked-info"><span class="locked-avatar"></span> <span class="locked-text"></span></div>
                <div class="row-actions"><span class="edit"><a href="http://localhost/galtica/wp-admin/post.php?post=1&amp;action=edit" title="Editar este item">Editar</a> | </span><span class="inline hide-if-no-js"><a href="#" class="editinline" title="Editar este item diretamente">Edição rápida</a> | </span><span class="trash"><a class="submitdelete" title="Mover este item para a Lixeira" href="http://localhost/galtica/wp-admin/post.php?post=1&amp;action=trash&amp;_wpnonce=b9f19db0ab">Lixeira</a> | </span><span class="view"><a href="http://localhost/galtica/?p=1" title="Ver “Olá, mundo!”" rel="permalink">Ver</a></span></div>
                <div class="hidden" id="inline_1">
                    <div class="post_title">Olá, mundo!</div>
                    <div class="post_name">ola-mundo</div>
                    <div class="post_author">1</div>
                    <div class="comment_status">open</div>
                    <div class="ping_status">open</div>
                    <div class="_status">publish</div>
                    <div class="jj">11</div>
                    <div class="mm">02</div>
                    <div class="aa">2015</div>
                    <div class="hh">21</div>
                    <div class="mn">31</div>
                    <div class="ss">32</div>
                    <div class="post_password"></div><div class="post_category" id="category_1">1</div><div class="tags_input" id="post_tag_1"></div><div class="sticky"></div><div class="post_format"></div></div></td>			<td class="author column-author"><a href="edit.php?post_type=post&amp;author=1">Desenvolvimento do plugin</a></td>
            <td class="categories column-categories"><a href="edit.php?category_name=sem-categoria">Sem categoria</a></td><td class="tags column-tags">—</td>			<td class="comments column-comments"><div class="post-com-count-wrapper">
                    <a href="http://localhost/galtica/wp-admin/edit-comments.php?p=1" title="0 pendente(s)" class="post-com-count"><span class="comment-count">1</span></a>			</div></td>
            <td class="date column-date"><abbr title="11/02/2015 21:31:32">11/02/2015</abbr><br>Publicado</td>		</tr>
        </tbody>
    </table>-->

    <table class="widefat" cellspacing="0">
        <thead>
        <tr>
            <th id="wpcf-table-name">Nome do Tipo de Post</th>
            <th id="wpcf-table-description">Descrição</th>
            <th id="wpcf-table-active">Ativo</th>
            <th id="wpcf-table-tax">Taxonomias</th>

        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>Tipo de conteúdo</th>
            <th>Descrição</th>
            <th>Ativo</th>
            <th>Taxonomias</th>

        </tr>
        </tfoot>
        <tbody>
        <tr class=""><td class="wpcf-table-column-name"><a href="http://localhost/galtica/wp-admin/admin.php?page=wpcf-edit-type&amp;wpcf-post-type=teste">Testes</a><br><a href="http://localhost/galtica/wp-admin/admin.php?page=wpcf-edit-type&amp;wpcf-post-type=teste">Editar</a> | <a href="http://localhost/galtica/wp-admin/admin-ajax.php?action=wpcf_ajax&amp;wpcf_action=deactivate_post_type&amp;wpcf-post-type=teste&amp;wpcf_ajax_update=wpcf_list_ajax_response_teste&amp;wpcf_ajax_callback=wpcfRefresh&amp;_wpnonce=be3ce8a616" class="wpcf-ajax-link" id="wpcf-list-activate-teste">Desativar</a> | <a href="http://localhost/galtica/wp-admin/admin-ajax.php?action=wpcf_ajax&amp;wpcf_action=delete_post_type&amp;wpcf-post-type=teste&amp;wpcf_ajax_update=wpcf_list_ajax_response_teste&amp;wpcf_ajax_callback=wpcfRefresh&amp;_wpnonce=887a6a9e53&amp;wpcf_warning=Tem certeza?" class="wpcf-ajax-link" id="wpcf-list-delete-teste">Excluir Permanentemente</a><div id="wpcf_list_ajax_response_teste"></div></td>
            <td class="wpcf-table-column-description">Teste do plugin Types</td>
            <td class="wpcf-table-column-active-teste">Sim</td>
            <td class="wpcf-table-column-tax">taxxoo</td>
        </tr>

        </tbody>
    </table>
</div>
