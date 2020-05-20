<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://karavic.com/techwhiz
 * @since      1.0.0
 *
 * @package    Winner_Victorry
 * @subpackage Winner_Victorry/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Winner_Victorry
 * @subpackage Winner_Victorry/includes
 * @author     Certified Vic <admin@karavic.com>
 */
class Winner_Victorry_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'winner-victorry',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
