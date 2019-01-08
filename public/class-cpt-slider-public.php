<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/public
 * @author     Your Name <email@example.com>
 */
class cpt_slider_Public {

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
		 * defined in cpt_slider_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The cpt_slider_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		 wp_enqueue_style( 'lightslider', plugin_dir_url( __FILE__ ) .  '/css/lightslider.css' );
     wp_enqueue_style( 'cpt', plugin_dir_url( __FILE__ ) .  '/css/cpt.css' );

		 // wp_enqueue_style( 'lightslider', get_stylesheet_directory_uri() . '/css/lightslider.css' );
		 // wp_enqueue_style( 'cpt', get_stylesheet_directory_uri() . '/css/cpt.css' );
		//wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/cpt-slider-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in cpt_slider_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The cpt_slider_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		 wp_enqueue_script( 'sliderjs', plugin_dir_url( __FILE__ ) . 'js/lightslider.js', array ( 'jquery' ), 1.1, true);
		 wp_enqueue_script( 'cptjs', plugin_dir_url( __FILE__ ) . 'js/cpt.js', array ( 'jquery' ), 1.1, true);

	}


}
// //modal for the cpt slider
// function et_header_top_hook_example() {
//
//  echo '<div style="display: none;" class="kcmodal"><div class="loadedcontent"></div><img class="loading" src="http://mcstageridge.wpengine.com/wp-content/themes/Divi-Child/img/ball-load.gif"><span>X</span></div></li>';
// }
//
// add_action( 'et_header_top', 'et_header_top_hook_example' );
