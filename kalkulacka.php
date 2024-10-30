<?php
/**
 * Plugin Name: Kalkulačka čisté mzdy
 * Plugin URI: 
 * Description: Během chvíle vypočítá výši vaší čisté mzdy, odvodů na dani z příjmu i výši sociálního a zdravotního pojištění.
 * Version: 0.1
 * Author: Internet Info, s.r.o.
 * Author URI: http://www.iinfo.cz/
 */


if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}


define( 'KALKULACKA_CISTE_MZDY_VERSION', '0.1' );

define( 'KALKULACKA_CISTE_MZDY_REQUIRED_WP_VERSION', '4.2' );

define( 'KALKULACKA_CISTE_MZDY_PLUGIN', __FILE__ );

define( 'KALKULACKA_CISTE_MZDY_PLUGIN_DIR', untrailingslashit( dirname( KALKULACKA_CISTE_MZDY_PLUGIN ) ) );

define( 'KALKULACKA_CISTE_MZDY_PLUGIN_URL', untrailingslashit( plugins_url( '', KALKULACKA_CISTE_MZDY_PLUGIN ) ) );

require_once KALKULACKA_CISTE_MZDY_PLUGIN_DIR . '/settings.php';
