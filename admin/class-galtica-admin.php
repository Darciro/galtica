<?php

/**
 * The dashboard-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Galtica
 * @subpackage Galtica/admin
 */

/**
 * The dashboard-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the dashboard-specific stylesheet and JavaScript.
 *
 * @package    Galtica
 * @subpackage Galtica/admin
 * @author     Your Name <email@example.com>
 */
class Galtica_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the Dashboard.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Galtica_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Galtica_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/galtica-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the dashboard.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Galtica_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Galtica_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/galtica-admin.js', array( 'jquery' ), $this->version, false );

	}


    /**
     * Register menu and pages for Galtica
     *
     */
    public function register_galtica_menu_page() {

        // add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
        add_menu_page( 'Galtica', 'Galtica','manage_options', 'galtica/admin/partials/galtica-admin-display.php', '', 'dashicons-admin-generic', 15);

        // add_submenu_page( $parent_slug, $page_title, $menu_title, $capability, $menu_slug, $function );
        // add_submenu_page( 'galtica/admin/partials/galtica-admin-display.php', 'Adicionar Tipo de Conteúdo', 'Novo Tipo de Conteúdo', 'manage_options', 'galtica/admin/partials/galtica-add-type.php', '' );

    }

    /**
     * Create our generic custom post type
     * This will handle all of dynamic content
     *
     */
    public function init_galtica_cpt() {
        $labels = array(
            'name' => _x('Tipos de conteúdo', 'post type general name'),
            'singular_name' => _x('Tipos de conteúdo', 'post type singular name'),
            'add_new' => _x('Criar Novo tipo de conteúdo', 'CPT'),
            'add_new_item' => __('Criar Novo tipo de conteúdo'),
            'edit_item' => __('Editar'),
            'new_item' => __('Todos os tipos de conteúdo'),
            'all_items' => __('Todos os itens'),
            'view_item' => __('Visualizar tipo conteúdo'),
            'search_items' => __('Buscar'),
            'not_found' => __('Nenhum tipo de conteúdo encontrado'),
            'not_found_in_trash' => __('Nenhum tipo de conteúdo encontrado'),
            'parent_item_colon' => '',
            'menu_name' => __('Galtica CPT')
        );

        $args = array(
            'labels' => $labels,
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            // 'show_in_menu'          => 'galtica/admin/partials/galtica-admin-display.php',
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => false,
            'menu_position' => null,
            'supports' => array('title')
        );
        register_post_type('galtica_cpt', $args);


        // Init our custom post types created
        $the_query = new WP_Query(array('post_type' => array('galtica_cpt')));
        while ($the_query->have_posts()) : $the_query->the_post();
            global $post;

	        // Post type name
	        $galtica_post_type_general_name         = get_post_meta($post->ID, 'galtica_post_type_general_name', true);
	        $galtica_post_type_singular_name        = get_post_meta($post->ID, 'galtica_post_type_singular_name', true);
	        $galtica_post_type_slug                 = get_post_meta($post->ID, 'galtica_post_type_slug', true);

	        // General Config
	        $galtica_post_type_public               = (get_post_meta($post->ID, 'galtica_post_type_public', true) == 'on' ? true : false);
	        $galtica_post_type_publicly_queryable   = (get_post_meta($post->ID, 'galtica_post_type_publicly_queryable', true) == 'on' ? true : false);
	        $galtica_post_type_show_ui              = (get_post_meta($post->ID, 'galtica_post_type_show_ui', true) == 'on' ? true : false);
	        $galtica_post_type_show_in_menu         = (get_post_meta($post->ID, 'galtica_post_type_show_in_menu', true) == 'on' ? true : false);
	        $galtica_post_type_query_var            = (get_post_meta($post->ID, 'galtica_post_type_query_var', true) == 'on' ? true : false);
	        $galtica_post_type_rewrite              = (get_post_meta($post->ID, 'galtica_post_type_rewrite', true) == 'on' ? true : false);
	        $galtica_post_type_has_archive          = (get_post_meta($post->ID, 'galtica_post_type_has_archive', true) == 'on' ? true : false);
	        $galtica_post_type_hierarchical         = (get_post_meta($post->ID, 'galtica_post_type_hierarchical', true) == 'on' ? true : false);
            $galtica_post_type_capability_type      = get_post_meta($post->ID, 'galtica_post_type_capability_type', true);
            $galtica_post_type_menu_position        = get_post_meta($post->ID, 'galtica_post_type_menu_position', true);

	        // Labels
	        $galtica_post_type_add_new              = get_post_meta($post->ID, 'galtica_post_type_add_new', true);
	        $galtica_post_type_add_new_item         = get_post_meta($post->ID, 'galtica_post_type_add_new_item', true);
	        $galtica_post_type_edit_item            = get_post_meta($post->ID, 'galtica_post_type_edit_item', true);
	        $galtica_post_type_new_item             = get_post_meta($post->ID, 'galtica_post_type_new_item', true);
	        $galtica_post_type_all_items            = get_post_meta($post->ID, 'galtica_post_type_all_items', true);
	        $galtica_post_type_view_item            = get_post_meta($post->ID, 'galtica_post_type_view_item', true);
	        $galtica_post_type_search_items         = get_post_meta($post->ID, 'galtica_post_type_search_items', true);
	        $galtica_post_type_not_found            = get_post_meta($post->ID, 'galtica_post_type_not_found', true);
	        $galtica_post_type_not_found_in_trash   = get_post_meta($post->ID, 'galtica_post_type_not_found_in_trash', true);
	        $galtica_post_type_parent_item_colon    = get_post_meta($post->ID, 'galtica_post_type_parent_item_colon', true);

	        // Support
	        $galtica_post_type_s = [];
	        $galtica_post_type_s_title = get_post_meta($post->ID, 'galtica_post_type_s_title', true);
            if ($galtica_post_type_s_title == "on") {
                $galtica_post_type_s[] = 'title';
            }
            $galtica_post_type_s_editor = get_post_meta($post->ID, 'galtica_post_type_s_editor', true);
            if ($galtica_post_type_s_editor == "on") {
                $galtica_post_type_s[] = 'editor';
            }
            $galtica_post_type_s_author = get_post_meta($post->ID, 'galtica_post_type_s_author', true);
            if ($galtica_post_type_s_author == "on") {
                $galtica_post_type_s[] = 'author';
            }
            $galtica_post_type_s_thumbnail = get_post_meta($post->ID, 'galtica_post_type_s_thumbnail', true);
            if ($galtica_post_type_s_thumbnail == "on") {
                $galtica_post_type_s[] = 'thumbnail';
            }
            $galtica_post_type_s_excerpt = get_post_meta($post->ID, 'galtica_post_type_s_excerpt', true);
            if ($galtica_post_type_s_excerpt == "on") {
                array_push($galtica_post_type_s, 'excerpt');
            }
            $galtica_post_type_s_comments = get_post_meta($post->ID, 'galtica_post_type_s_comments', true);
            if ($galtica_post_type_s_comments == "on") {
                array_push($galtica_post_type_s, 'comments');
            }

            $labels = array(
                'name'                  => _x($galtica_post_type_general_name, 'post type general name'),
                'singular_name'         => _x($galtica_post_type_singular_name, 'post type singular name'),
                'add_new'               => _x($galtica_post_type_add_new, get_the_title($post->ID)),
                'add_new_item'          => __($galtica_post_type_add_new_item),
                'edit_item'             => __($galtica_post_type_edit_item),
                'new_item'              => __($galtica_post_type_new_item),
                'all_items'             => __($galtica_post_type_all_items),
                'view_item'             => __($galtica_post_type_view_item),
                'search_items'          => __($galtica_post_type_search_items),
                'not_found'             => __($galtica_post_type_not_found),
                'not_found_in_trash'    => __($galtica_post_type_not_found_in_trash),
                'parent_item_colon'     => __($galtica_post_type_parent_item_colon),
                'menu_name'             => __($galtica_post_type_general_name)
            );
            $args = array(
                'labels'                => $labels,
                'public'                => $galtica_post_type_public,
                'publicly_queryable'    => $galtica_post_type_publicly_queryable,
                'show_ui'               => $galtica_post_type_show_ui,
                'show_in_menu'          => $galtica_post_type_show_in_menu,
                'query_var'             => $galtica_post_type_query_var,
                'rewrite'               => $galtica_post_type_rewrite,
                'capability_type'       => 'post',
                'has_archive'           => $galtica_post_type_has_archive,
                'hierarchical'          => $galtica_post_type_hierarchical,
                'menu_position'         => $galtica_post_type_menu_position,
                'supports'              => $galtica_post_type_s
            );
            register_post_type($galtica_post_type_slug, $args);

        endwhile;

    }


    /**
     * Create our generic custom post type
     * This will handle all of dynamic content
     *
     */
    public function create_galtica_metabox() {
        add_meta_box('galtica_cpt_meta_desc', 'Configurações Básicas', 'create_galtica_metabox_desc', 'galtica_cpt', 'normal');
	    add_meta_box('galtica_cpt_meta_labels', 'Rótulos', 'create_galtica_metabox_labels', 'galtica_cpt', 'normal');
	    add_meta_box('galtica_cpt_meta_pos', 'Localização', 'create_galtica_metabox_pos', 'galtica_cpt', 'side');
	    add_meta_box('galtica_cpt_meta_support', 'Suporte', 'create_galtica_metabox_support', 'galtica_cpt', 'normal');
	    add_meta_box('galtica_cpt_meta_config', 'Configurações Gerais', 'galtica_cpt_meta_config', 'galtica_cpt', 'normal');

	    function create_galtica_metabox_desc() {
		    global $post;
		    $galtica_post_type_general_name  = get_post_meta($post->ID, 'galtica_post_type_general_name', true);
		    $galtica_post_type_singular_name = get_post_meta($post->ID, 'galtica_post_type_singular_name', true);
		    $galtica_post_type_slug = get_post_meta($post->ID, 'galtica_post_type_slug', true); ?>

            <table width="100%">
                <tr>
                    <td>Nome do tipo de conteúdo (Plural)</td>
                    <td><input style="width: 90%;" type="text" name="galtica_post_type_general_name" value="<?php echo $galtica_post_type_general_name; ?>"/></td>
                    <td>General name for the post type, usually plural.</td>
                </tr>
                <tr>
                    <td>Nome do tipo de conteúdo (Singular)</td>
                    <td><input style="width: 90%;" type="text" name="galtica_post_type_singular_name" value="<?php echo $galtica_post_type_singular_name; ?>"/></td>
                    <td>Name for one object of this post type.</td>
                </tr>
	            <tr>
		            <td>Slug do tipo de conteúdo</td>
		            <td><input style="width: 90%;" type="text" name="galtica_post_type_slug" value="<?php echo $galtica_post_type_slug; ?>"/></td>
		            <td>Max. 20 characters, can not contain capital letters or spaces</td>
	            </tr>
            </table>

	    <?php }

	    function create_galtica_metabox_labels() {
		    global $post;
		    $galtica_post_type_add_new              = get_post_meta($post->ID, 'galtica_post_type_add_new', true);
		    $galtica_post_type_add_new_item         = get_post_meta($post->ID, 'galtica_post_type_add_new_item', true);
		    $galtica_post_type_edit_item            = get_post_meta($post->ID, 'galtica_post_type_edit_item', true);
		    $galtica_post_type_new_item             = get_post_meta($post->ID, 'galtica_post_type_new_item', true);
		    $galtica_post_type_all_items            = get_post_meta($post->ID, 'galtica_post_type_all_items', true);
		    $galtica_post_type_view_item            = get_post_meta($post->ID, 'galtica_post_type_view_item', true);
		    $galtica_post_type_search_items         = get_post_meta($post->ID, 'galtica_post_type_search_items', true);
		    $galtica_post_type_not_found            = get_post_meta($post->ID, 'galtica_post_type_not_found', true);
		    $galtica_post_type_not_found_in_trash   = get_post_meta($post->ID, 'galtica_post_type_not_found_in_trash', true);
		    $galtica_post_type_parent_item_colon    = get_post_meta($post->ID, 'galtica_post_type_parent_item_colon', true); ?>

		    <table width="100%">
			    <tr>
				    <td>Add new</td>
				    <td><input type="text" name="galtica_post_type_add_new" value="<?php echo $galtica_post_type_add_new; ?>"/></td>
				    <td>The add new text. The default is "Add New" for both hierarchical and non-hierarchical post types.</td>
			    </tr>
			    <tr>
				    <td>Add new item</td>
				    <td><input type="text" name="galtica_post_type_add_new_item" value="<?php echo $galtica_post_type_add_new_item; ?>"/></td>
				    <td>The add new item text. Default is Add New Post/Add New Page</td>
			    </tr>
			    <tr>
				    <td>Edit Item</td>
				    <td><input type="text" name="galtica_post_type_edit_item" value="<?php echo $galtica_post_type_edit_item; ?>"/></td>
				    <td>The edit item text. In the UI, this label is used as the main header on the post's editing panel.</td>
			    </tr>
			    <tr>
				    <td>New Item</td>
				    <td><input type="text" name="galtica_post_type_new_item" value="<?php echo $galtica_post_type_new_item; ?>"/></td>
				    <td>The new item text. Default is "New Post" for non-hierarchical and "New Page" for hierarchical post types.</td>
			    </tr>
			    <tr>
				    <td>All Items</td>
				    <td><input type="text" name="galtica_post_type_all_items" value="<?php echo $galtica_post_type_all_items; ?>"/></td>
				    <td>The all items text used in the menu. Default is the value of 'name'.</td>
			    </tr>
			    <tr>
				    <td>View Item</td>
				    <td><input type="text" name="galtica_post_type_view_item" value="<?php echo $galtica_post_type_view_item; ?>"/></td>
				    <td>The view item text. Default is View Post/View Page.</td>
			    </tr>
			    <tr>
				    <td>Search Items</td>
				    <td><input type="text" name="galtica_post_type_search_items" value="<?php echo $galtica_post_type_search_items; ?>"/></td>
				    <td>The search items text. Default is Search Posts/Search Pages.</td>
			    </tr>
			    <tr>
				    <td>Not Found</td>
				    <td><input type="text" name="galtica_post_type_not_found" value="<?php echo $galtica_post_type_not_found; ?>"/></td>
				    <td>The not found text. Default is No posts found/No pages found.</td>
			    </tr>
			    <tr>
				    <td>Not Found in Trash</td>
				    <td><input type="text" name="galtica_post_type_not_found_in_trash" value="<?php echo $galtica_post_type_not_found_in_trash; ?>"/></td>
				    <td>The not found in trash text. Default is No posts found in Trash/No pages found in Trash.</td>
			    </tr>
			    <tr>
				    <td>Parent item Column</td>
				    <td><input type="text" name="galtica_post_type_parent_item_colon" value="<?php echo $galtica_post_type_parent_item_colon; ?>"/></td>
				    <td>The parent text. This string is used only in hierarchical post types</td>
			    </tr>
		    </table>

	    <?php }

	    function create_galtica_metabox_pos() {
		    global $post;
		    $galtica_post_type_capability_type      = get_post_meta($post->ID, 'galtica_post_type_capability_type', true);
		    $galtica_post_type_menu_position        = get_post_meta($post->ID, 'galtica_post_type_menu_position', true); ?>

		    <table width="100%">
			    <tr>
				    <td style="width: 15%;">Capability Type</td>
				    <td>
					    <select name="galtica_post_type_capability_type">
						    <option value="5" <?php if ($galtica_post_type_capability_type == "5") { echo "selected"; } ?>>Below Posts</option>
						    <option value="10" <?php if ($galtica_post_type_capability_type == "10") { echo "selected"; } ?>>Below Media</option>
						    <option value="15" <?php if ($galtica_post_type_capability_type == "15") { echo "selected"; } ?>>Below Links</option>
						    <option value="20" <?php if ($galtica_post_type_capability_type == "20") { echo "selected"; } ?>>Below Pages</option>
						    <option value="25" <?php if ($galtica_post_type_capability_type == "25") { echo "selected"; } ?>>Below comments</option>
						    <option value="60" <?php if ($galtica_post_type_capability_type == "60") { echo "selected"; } ?>>Below first separator</option>
						    <option value="65" <?php if ($galtica_post_type_capability_type == "65") { echo "selected"; } ?>>Below Plugins</option>
						    <option value="70" <?php if ($galtica_post_type_capability_type == "70") { echo "selected"; } ?>>Below Users</option>
						    <option value="75" <?php if ($galtica_post_type_capability_type == "75") { echo "selected"; } ?>>Below Tools</option>
						    <option value="80" <?php if ($galtica_post_type_capability_type == "80") { echo "selected"; } ?>>Below Settings</option>
						    <option value="100" <?php if ($galtica_post_type_capability_type == "100") { echo "selected"; } ?>>Below second separator</option>
					    </select>
				    </td>
			    </tr>
			    <tr>
				    <td style="width: 15%;">Menu Position:</td>
				    <td>
					    <select name="galtica_post_type_menu_position">
						    <option value="post" <?php if ($galtica_post_type_menu_position == "post") { echo "selected"; } ?>>Post</option>
						    <option value="page" <?php if ($galtica_post_type_menu_position == "page") { echo "selected"; }?>>Page</option>
					    </select>
				    </td>
			    </tr>
			    <tr>
				    <td>Icons</td>
				    <td>
					    <!--<div class="wpcf-types-menu-image dashicons-before dashicons-admin-post"><br></div>-->
					    <select id="wpcf-types-icon" name="ct[icon]" class="wpcf-form-select form-select select">
						    <option value="admin-appearance" class="wpcf-form-option form-option option">admin
							    appearance
						    </option>
						    <option value="admin-collapse" class="wpcf-form-option form-option option">admin collapse
						    </option>
						    <option value="admin-comments" class="wpcf-form-option form-option option">admin comments
						    </option>
						    <option value="admin-generic" class="wpcf-form-option form-option option">admin generic
						    </option>
						    <option value="admin-home" class="wpcf-form-option form-option option">admin home</option>
						    <option value="admin-links" class="wpcf-form-option form-option option">admin links</option>
						    <option value="admin-media" class="wpcf-form-option form-option option">admin media</option>
						    <option value="admin-network" class="wpcf-form-option form-option option">admin network
						    </option>
						    <option value="admin-page" class="wpcf-form-option form-option option">admin page</option>
						    <option value="admin-plugins" class="wpcf-form-option form-option option">admin plugins
						    </option>
					    </select>
				    </td>
			    </tr>
		    </table>

	    <?php }

	    function create_galtica_metabox_support() {
		    global $post;
		    $galtica_post_type_s_title              = get_post_meta($post->ID, 'galtica_post_type_s_title', true);
		    $galtica_post_type_s_editor             = get_post_meta($post->ID, 'galtica_post_type_s_editor', true);
		    $galtica_post_type_s_author             = get_post_meta($post->ID, 'galtica_post_type_s_author', true);
		    $galtica_post_type_s_thumbnail          = get_post_meta($post->ID, 'galtica_post_type_s_thumbnail', true);
		    $galtica_post_type_s_excerpt            = get_post_meta($post->ID, 'galtica_post_type_s_excerpt', true);
		    $galtica_post_type_s_comments           = get_post_meta($post->ID, 'galtica_post_type_s_comments', true); ?>

		    <table width="100%">
			    <tr>
				    <td>
					    <input type="checkbox" <?php if ($galtica_post_type_s_title == "on") { echo "checked"; }; ?> name="galtica_post_type_s_title"/>
					    <label for="galtica_post_type_s_title">Title</label>
				    </td>
			    </tr>
			    <tr>
				    <td>
					    <input type="checkbox" <?php if ($galtica_post_type_s_editor == "on") { echo "checked"; }; ?> name="galtica_post_type_s_editor"/>
					    <label for="galtica_post_type_s_editor">Editor</label>
				    </td>
			    </tr>
			    <tr>
				    <td>
					    <input type="checkbox" <?php if ($galtica_post_type_s_author == "on") { echo "checked"; }; ?> name="galtica_post_type_s_author"/>
					    <label for="galtica_post_type_s_author">Author</label>
				    </td>
			    </tr>
			    <tr>
				    <td>
					    <input type="checkbox" <?php if ($galtica_post_type_s_thumbnail == "on") { echo "checked"; }; ?> name="galtica_post_type_s_thumbnail"/>
					    <label for="galtica_post_type_s_thumbnail">Thumbnail</label>
				    </td>
			    </tr>
			    <tr>
				    <td>
					    <input type="checkbox" <?php if ($galtica_post_type_s_excerpt == "on") { echo "checked"; }; ?> name="galtica_post_type_s_excerpt"/>
					    <label for="galtica_post_type_s_excerpt">Excerpt</label>
				    </td>
			    </tr>
			    <tr>
				    <td>
					    <input type="checkbox" <?php if ($galtica_post_type_s_comments == "on") { echo "checked"; }; ?> name="galtica_post_type_s_comments"/>
					    <label for="galtica_post_type_s_comments">Comments</label>
				    </td>
			    </tr>
		    </table>

	    <?php }

        function galtica_cpt_meta_config() {
            global $post;

            $galtica_post_type_public               = get_post_meta($post->ID, 'galtica_post_type_public', true);
            $galtica_post_type_publicly_queryable   = get_post_meta($post->ID, 'galtica_post_type_publicly_queryable', true);
            $galtica_post_type_show_ui              = get_post_meta($post->ID, 'galtica_post_type_show_ui', true);
            $galtica_post_type_show_in_menu         = get_post_meta($post->ID, 'galtica_post_type_show_in_menu', true);
            $galtica_post_type_query_var            = get_post_meta($post->ID, 'galtica_post_type_query_var', true);
            $galtica_post_type_rewrite              = get_post_meta($post->ID, 'galtica_post_type_rewrite', true);
            $galtica_post_type_has_archive          = get_post_meta($post->ID, 'galtica_post_type_has_archive', true);
            $galtica_post_type_hierarchical         = get_post_meta($post->ID, 'galtica_post_type_hierarchical', true); ?>
            <table width="100%">
                <tr>
                    <td>
                        <input type="checkbox" <?php if ($galtica_post_type_public == "on") { echo "checked"; } ?> name="galtica_post_type_public"/>
                        <label for="galtica_post_type_public">Public</label>
                        <p class="label_text"> Controls how the type is visible to authors (show_in_nav_menus, show_ui) and readers (exclude_from_search, publicly_queryable).</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" <?php if ($galtica_post_type_publicly_queryable == "on") { echo "checked"; }; ?> name="galtica_post_type_publicly_queryable"/>
                        <label for="galtica_post_type_publicly_queryable">Publicly Queryable</label>
                        <p class="label_text">Whether queries can be performed on the front end as part of parse_request().</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" <?php if ($galtica_post_type_show_ui == "on") { echo "checked"; }; ?> name="galtica_post_type_show_ui"/>
                        <label for="galtica_post_type_show_ui">Show UI</label>
                        <p class="label_text">Whether to generate a default UI for managing this post type in the admin.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" <?php if ($galtica_post_type_show_in_menu == "on") { echo "checked"; }; ?> name="galtica_post_type_show_in_menu"/>
                        <label for="galtica_post_type_show_in_menu">Show in menu</label>
                        <p class="label_text">Where to show the post type in the admin menu. show_ui must be true.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" <?php if ($galtica_post_type_query_var == "on") { echo "checked"; }; ?> name="galtica_post_type_query_var"/>
                        <label for="galtica_post_type_query_var">Query Var</label>
                        <p class="label_text">Sets the query_var key for this post type.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" <?php if ($galtica_post_type_rewrite == "on") { echo "checked"; }; ?> name="galtica_post_type_rewrite"/>
                        <label for="galtica_post_type_rewrite">Rewrite</label>
                        <p class="label_text">Triggers the handling of rewrites for this post type. To prevent rewrites, set to false</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" <?php if ($galtica_post_type_has_archive == "on") { echo "checked"; }; ?> name="galtica_post_type_has_archive"/>
                        <label for="galtica_post_type_has_archive">Has Archive</label>
                        <p class="label_text">Enables post type archives.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" <?php if ($galtica_post_type_hierarchical == "on") { echo "checked"; }; ?> name="galtica_post_type_hierarchical"/>
                        <label for="galtica_post_type_hierarchical">Hierarchical</label>
                        <p class="label_text">Whether the post type is hierarchical (e.g. page). Allows Parent to be specified. The 'supports' parameter should contain 'page-attributes' to show the parent select box on the editor page.</p>
                    </td>
                </tr>
            </table>

            <input type="hidden" name="galtica_cpt-hidd" value="true" />
        <?php
        }
    }

    /**
     * Save our custom post type
     *
     */
    public function galtica_save_cpt() {
        global $post;
        if ( isset($_POST['galtica_cpt-hidd']) && $_POST['galtica_cpt-hidd'] == 'true' ) {
	        $galtica_post_type_general_name         = get_post_meta($post->ID, 'galtica_post_type_general_name', true);
	        $galtica_post_type_singular_name        = get_post_meta($post->ID, 'galtica_post_type_singular_name', true);
	        $galtica_post_type_slug                 = get_post_meta($post->ID, 'galtica_post_type_slug', true);

	        $galtica_post_type_add_new              = get_post_meta($post->ID, 'galtica_post_type_add_new', true);
	        $galtica_post_type_add_new_item         = get_post_meta($post->ID, 'galtica_post_type_add_new_item', true);
	        $galtica_post_type_edit_item            = get_post_meta($post->ID, 'galtica_post_type_edit_item', true);
	        $galtica_post_type_new_item             = get_post_meta($post->ID, 'galtica_post_type_new_item', true);
	        $galtica_post_type_all_items            = get_post_meta($post->ID, 'galtica_post_type_all_items', true);
	        $galtica_post_type_view_item            = get_post_meta($post->ID, 'galtica_post_type_view_item', true);
	        $galtica_post_type_search_items         = get_post_meta($post->ID, 'galtica_post_type_search_items', true);
	        $galtica_post_type_not_found            = get_post_meta($post->ID, 'galtica_post_type_not_found', true);
	        $galtica_post_type_not_found_in_trash   = get_post_meta($post->ID, 'galtica_post_type_not_found_in_trash', true);
	        $galtica_post_type_parent_item_colon    = get_post_meta($post->ID, 'galtica_post_type_parent_item_colon', true);

	        $galtica_post_type_s_title              = get_post_meta($post->ID, 'galtica_post_type_s_title', true);
	        $galtica_post_type_s_editor             = get_post_meta($post->ID, 'galtica_post_type_s_editor', true);
	        $galtica_post_type_s_author             = get_post_meta($post->ID, 'galtica_post_type_s_author', true);
	        $galtica_post_type_s_thumbnail          = get_post_meta($post->ID, 'galtica_post_type_s_thumbnail', true);
	        $galtica_post_type_s_excerpt            = get_post_meta($post->ID, 'galtica_post_type_s_excerpt', true);
	        $galtica_post_type_s_comments           = get_post_meta($post->ID, 'galtica_post_type_s_comments', true);

            $galtica_post_type_public               = get_post_meta($post->ID, 'galtica_post_type_public', true);
            $galtica_post_type_publicly_queryable   = get_post_meta($post->ID, 'galtica_post_type_publicly_queryable', true);
            $galtica_post_type_show_ui              = get_post_meta($post->ID, 'galtica_post_type_show_ui', true);
            $galtica_post_type_show_in_menu         = get_post_meta($post->ID, 'galtica_post_type_show_in_menu', true);
            $galtica_post_type_query_var            = get_post_meta($post->ID, 'galtica_post_type_query_var', true);
            $galtica_post_type_rewrite              = get_post_meta($post->ID, 'galtica_post_type_rewrite', true);
            $galtica_post_type_has_archive          = get_post_meta($post->ID, 'galtica_post_type_has_archive', true);
            $galtica_post_type_hierarchical         = get_post_meta($post->ID, 'galtica_post_type_hierarchical', true);

	        $galtica_post_type_capability_type      = get_post_meta($post->ID, 'galtica_post_type_capability_type', true);
            $galtica_post_type_menu_position        = get_post_meta($post->ID, 'galtica_post_type_menu_position', true);

	        update_post_meta($post->ID, 'galtica_post_type_general_name', $_POST['galtica_post_type_general_name'], $galtica_post_type_general_name);
	        update_post_meta($post->ID, 'galtica_post_type_singular_name', $_POST['galtica_post_type_singular_name'], $galtica_post_type_singular_name);
	        update_post_meta($post->ID, 'galtica_post_type_slug', $_POST['galtica_post_type_slug'], $galtica_post_type_slug);

	        update_post_meta($post->ID, 'galtica_post_type_add_new', $_POST['galtica_post_type_add_new'], $galtica_post_type_add_new);
	        update_post_meta($post->ID, 'galtica_post_type_add_new_item', $_POST['galtica_post_type_add_new_item'], $galtica_post_type_add_new_item);
	        update_post_meta($post->ID, 'galtica_post_type_edit_item', $_POST['galtica_post_type_edit_item'], $galtica_post_type_edit_item);
	        update_post_meta($post->ID, 'galtica_post_type_new_item', $_POST['galtica_post_type_new_item'], $galtica_post_type_new_item);
	        update_post_meta($post->ID, 'galtica_post_type_all_items', $_POST['galtica_post_type_all_items'], $galtica_post_type_all_items);
	        update_post_meta($post->ID, 'galtica_post_type_view_item', $_POST['galtica_post_type_view_item'], $galtica_post_type_view_item);
	        update_post_meta($post->ID, 'galtica_post_type_search_items', $_POST['galtica_post_type_search_items'], $galtica_post_type_search_items);
	        update_post_meta($post->ID, 'galtica_post_type_not_found', $_POST['galtica_post_type_not_found'], $galtica_post_type_not_found);
	        update_post_meta($post->ID, 'galtica_post_type_not_found_in_trash', $_POST['galtica_post_type_not_found_in_trash'], $galtica_post_type_not_found_in_trash);
	        update_post_meta($post->ID, 'galtica_post_type_parent_item_colon', $_POST['galtica_post_type_parent_item_colon'], $galtica_post_type_parent_item_colon);

	        update_post_meta($post->ID, 'galtica_post_type_s_title', $_POST['galtica_post_type_s_title'], $galtica_post_type_s_title);
	        update_post_meta($post->ID, 'galtica_post_type_s_editor', $_POST['galtica_post_type_s_editor'], $galtica_post_type_s_editor);
	        update_post_meta($post->ID, 'galtica_post_type_s_author', $_POST['galtica_post_type_s_author'], $galtica_post_type_s_author);
	        update_post_meta($post->ID, 'galtica_post_type_s_thumbnail', $_POST['galtica_post_type_s_thumbnail'], $galtica_post_type_s_thumbnail);
	        update_post_meta($post->ID, 'galtica_post_type_s_excerpt', $_POST['galtica_post_type_s_excerpt'], $galtica_post_type_s_excerpt);
	        update_post_meta($post->ID, 'galtica_post_type_s_comments', $_POST['galtica_post_type_s_comments'], $galtica_post_type_s_comments);

	        update_post_meta($post->ID, 'galtica_post_type_public', $_POST['galtica_post_type_public'], $galtica_post_type_public);
            update_post_meta($post->ID, 'galtica_post_type_publicly_queryable', $_POST['galtica_post_type_publicly_queryable'], $galtica_post_type_publicly_queryable);
            update_post_meta($post->ID, 'galtica_post_type_show_ui', $_POST['galtica_post_type_show_ui'], $galtica_post_type_show_ui);
            update_post_meta($post->ID, 'galtica_post_type_show_in_menu', $_POST['galtica_post_type_show_in_menu'], $galtica_post_type_show_in_menu);
            update_post_meta($post->ID, 'galtica_post_type_query_var', $_POST['galtica_post_type_query_var'], $galtica_post_type_query_var);
            update_post_meta($post->ID, 'galtica_post_type_rewrite', $_POST['galtica_post_type_rewrite'], $galtica_post_type_rewrite);
            update_post_meta($post->ID, 'galtica_post_type_has_archive', $_POST['galtica_post_type_has_archive'], $galtica_post_type_has_archive);
            update_post_meta($post->ID, 'galtica_post_type_hierarchical', $_POST['galtica_post_type_hierarchical'], $galtica_post_type_hierarchical);
            update_post_meta($post->ID, 'galtica_post_type_capability_type', $_POST['galtica_post_type_capability_type'], $galtica_post_type_capability_type);
            update_post_meta($post->ID, 'galtica_post_type_menu_position', $_POST['galtica_post_type_menu_position'], $galtica_post_type_menu_position);

        }
    }


}
