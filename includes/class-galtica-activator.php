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
        if ( !is_plugin_active( 'advanced-custom-fields/acf.php' ) ) {
            $pluginNotFound = 'O Plugin Galtica necessita do plugin <a href="http://www.advancedcustomfields.com/" target="_blank">Advanced Custom Fields</a> ativo para funcionar normalmente.';
            die($pluginNotFound);
        }
    }

}
