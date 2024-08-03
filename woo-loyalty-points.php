<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://malavvasita.github.io
 * @since             1.0.0
 * @package           Woo_Loyalty_Points
 *
 * @wordpress-plugin
 * Plugin Name:       Woo - Customer Loyalty Points
 * Plugin URI:        https://optimtechstudio.com
 * Description:       The WooCommerce Loyalty Points Plugin is a revolutionary plugin designed to increase customer participation and loyalty. This plugin allows store owners to configure rules that govern how customers can earn points from sales and use them in future purchase transactions. It’s a flexible loyalty program, built with ease of use in mind, that enables you to recognize your customers for shopping again and again, and this helps to boost your sales. Start improving the fortunes of your WooCommerce store right now!
 * Version:           1.0.0
 * Author:            Malav Vasita
 * Author URI:        https://malavvasita.github.io/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       woo-loyalty-points
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
define( 'WOO_LOYALTY_POINTS_VERSION', '1.0.0' );

// Loyaltypoints plugin dir url.
define( 'WLP_PLUGIN_URL', plugin_dir_url(__FILE__) );

// Loyaltypoints plugin dir path.
define( 'WLP_PLUGIN_PATH', plugin_dir_path(__FILE__) );


/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-woo-loyalty-points-activator.php
 */
function activate_woo_loyalty_points() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-woo-loyalty-points-activator.php';
	Woo_Loyalty_Points_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-woo-loyalty-points-deactivator.php
 */
function deactivate_woo_loyalty_points() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-woo-loyalty-points-deactivator.php';
	Woo_Loyalty_Points_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_woo_loyalty_points' );
register_deactivation_hook( __FILE__, 'deactivate_woo_loyalty_points' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-woo-loyalty-points.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_woo_loyalty_points() {

	$plugin = new Woo_Loyalty_Points();
	$plugin->run();

}
run_woo_loyalty_points();
