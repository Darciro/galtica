<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Galtica
 * @subpackage Galtica/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the dashboard-specific stylesheet and JavaScript.
 *
 * @package    Galtica
 * @subpackage Galtica/public
 * @author     Your Name <email@example.com>
 */
class Galtica_Public {

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
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

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/galtica-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
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

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/galtica-public.js', array( 'jquery' ), $this->version, false );

	}

	public function register_content_filter() {
		$content = '';



		// check if the flexible content field has rows of data
		if( have_rows('galtica_cpt_content') ):

			// loop through the rows of data
			while ( have_rows('galtica_cpt_content') ) : the_row();

				if( get_row_layout() == 'conteudo_simples' ):

					require( 'partials/galtica-cpt-conteudo_simples.php' );

				elseif( get_row_layout() == 'download' ):

					$file = get_sub_field('file');

				endif;

			endwhile;

		else :

			// no layouts found

		endif;

		// Returns the content.
		return $content;

	}

}
