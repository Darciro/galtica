<?php

/**
 * Fired during plugin activation
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Galtica
 * @subpackage Galtica/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Galtica
 * @subpackage Galtica/includes
 * @author     Your Name <email@example.com>
 */
class Galtica_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
        /**
         * Detect if ACF plugin is active
         */
        if ( is_plugin_active( 'advanced-custom-fields/acf.php' ) || is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) ) {

        }else{

	        /*add_action('admin_notices', 'wpse75629_admin_notice');

	        function wpse75629_admin_notice()
	        {
		        global $pagenow;

		        // Only show this message on the admin dashboard and if asked for
		        if ('index.php' === $pagenow && ! empty($_GET['success_notice']))
		        {
			        echo '<div class="updated"><p>Your success message!</p></div>';
		        }
	        }

	        exit();*/

	        $plugin_dir = ABSPATH . 'wp-content/plugins/advanced-custom-fields';
	        $plugin_dir_pro = ABSPATH . 'wp-content/plugins/advanced-custom-fields-pro';
	        if( file_exists($plugin_dir) || file_exists($plugin_dir_pro) ){
		        die('Ative o plugin Advanced Custom Fields, para prosseguir com a instalação do Galtica.');
	        }
	        $pluginNotFound = 'Galtica necessita do plugin <a href="http://www.advancedcustomfields.com/" target="_blank">Advanced Custom Fields</a> ativo para funcionar normalmente.';
	        die($pluginNotFound);
        }
    }

}
