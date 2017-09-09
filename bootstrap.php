<?php
/**
 * Starter Plugin
 *
 * @package     CampFirePixels\CFP_Starter_Plugin
 * @author      Danny G Smith
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: CFP_Starter_Plugin
 * Plugin URI:  https://campfirepixels.com/
 * Description: This plugin gives you a workspace to write code, test it, and learn.  This is your playground.
 * Version:     1.0.0
 * Author:      Danny G Smith
 * Author URI:  https://campfirepixels.com
 * Text Domain: Starter_Plugin
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

namespace CampFirePixels\CFP_Starter_Plugin;

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Cheatin&#8217; uh?' );
}

define( 'Starter_Plugin_URL', plugin_dir_url( __FILE__ ) );

require_once( __DIR__. '/src/support/load-assets.php' );
