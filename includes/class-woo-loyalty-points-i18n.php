<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://malavvasita.github.io
 * @since      1.0.0
 *
 * @package    Woo_Loyalty_Points
 * @subpackage Woo_Loyalty_Points/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Woo_Loyalty_Points
 * @subpackage Woo_Loyalty_Points/includes
 * @author     Malav Vasita <plugins@optimtechstudio.com>
 */
class Woo_Loyalty_Points_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'woo-loyalty-points',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
