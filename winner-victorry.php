<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://karavic.com/techwhiz
 * @since             1.0.0
 * @package           Winner_Victorry
 *
 * @wordpress-plugin
 * Plugin Name:       winner
 * Plugin URI:        https://karavic.com/winner
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Certified Vic
 * Author URI:        https://karavic.com/techwhiz
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       winner-victorry
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'WINNER_VICTORRY_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-winner-victorry-activator.php
 */
function activate_winner_victorry() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-winner-victorry-activator.php';
	Winner_Victorry_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-winner-victorry-deactivator.php
 */
function deactivate_winner_victorry() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-winner-victorry-deactivator.php';
	Winner_Victorry_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_winner_victorry' );
register_deactivation_hook( __FILE__, 'deactivate_winner_victorry' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-winner-victorry.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_winner_victorry() {

	$plugin = new Winner_Victorry();
	$plugin->run();

}
run_winner_victorry();
