<?php
/**
 * WordPress Featured Posts Bottom Bar
 *
 *
 * @link              https://www.mashvisor.com
 * @since             1.0.0
 * @package           WP_Bottom_Featured_Bar
 *
 * @wordpress-plugin
 * Plugin Name:       Featured Posts Bottom Bar
 * Plugin URI:        https://github.com/mashvisor/wp-bottom-featured-bar
 * Description:       Display featured posts inside a fancy floating bar.
 * Version:           1.0.0
 * Author:            Mohammed Jebrini
 * Author URI:        https://jebrini.net
 * License:           MIT
 * License URI:       https://opensource.org/licenses/MIT
 * Text Domain:       wp-bfb
 * Domain Path:       /languages
 */
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-bottom-featured-bar-activator.php
 */
function activate_bottom_featured_bar() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-bottom-featured-bar-activator.php';
	WP_Bottom_Featured_Bar_Activator::activate();
}
/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-bottom-featured-bar-deactivator.php
 */
function deactivate_bottom_featured_bar() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-bottom-featured-bar-deactivator.php';
	WP_Bottom_Featured_Bar_Deactivator::deactivate();
}
register_activation_hook( __FILE__, 'activate_bottom_featured_bar' );
register_deactivation_hook( __FILE__, 'deactivate_bottom_featured_bar' );
/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-bottom-featured-bar.php';
/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_bottom_featured_bar() {
	$plugin = new Bottom_Featured_Bar();
	$plugin->run();
}
run_bottom_featured_bar();