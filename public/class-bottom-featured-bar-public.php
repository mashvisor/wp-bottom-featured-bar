<?php
/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://www.mashvisor.com
 * @since      1.0.0
 *
 * @package    Bottom_Featured_Bar
 * @subpackage Bottom_Featured_Bar/public
 */
/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Bottom_Featured_Bar
 * @subpackage Bottom_Featured_Bar/public
 * @author     Mohammed Jebrini <mohd@mashvisor.com>
 */
class Bottom_Featured_Bar_Public {
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
		wp_enqueue_style( 'fontaweasome', '//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css');
		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/bottom-featured-bar-public.css', array('fontaweasome'), $this->version, 'all' );
	}
	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() { 
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/bottom-featured-bar-public.js', array( 'jquery' ), $this->version, false );
	}
    /**
	 * Render the HTML for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function render_view() { 
		require plugin_dir_path( __FILE__ ) . 'partials/bottom-featured-bar-public-display.php';
	}

}