<?php

/**
 * cpt CNL slider
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://mirandacreative.com
 * @since             1.0.0
 * @package           cpt-slider
 *
 * @wordpress-plugin
 * Plugin Name:       cpt CNL Slider
 * Plugin URI:        http://mirandacreative.com
 * Description:       This plugin slides book images and links to the correlating book info
 * Version:           1.0.0
 * Author:            Kahlil Calavas
 * Author URI:        http://mirandacreative.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       cpt-slider
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
define( 'cpt_slider_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-cpt-slider-activator.php
 */
function activate_plugin_name() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-cpt-slider-activator.php';
	cpt_slider_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-cpt-slider-deactivator.php
 */
function deactivate_plugin_name() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-cpt-slider-deactivator.php';
	cpt_slider_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_plugin_name' );
register_deactivation_hook( __FILE__, 'deactivate_plugin_name' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-cpt-slider.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_plugin_name() {

	$plugin = new Plugin_Name();
	$plugin->run();

}
function AddSlider($atts) {
	$a = shortcode_atts( array(
		 'posttype' => '',
		 'catid' => ''
		), $atts );

	$posttype = $a['posttype'];
	$catid = $a['catid'];
	set_query_var('posttype', $posttype);
	set_query_var('catid', $catid);
	ob_start();
	include( 'public/cpt-slider.php');
  $output = ob_get_contents();
  ob_end_clean();

	return $output;
}
add_shortcode('cptslider', 'AddSlider');
run_plugin_name();
