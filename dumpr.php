<?php
/**
 * Dumpr
 *
 * @package             Dumpr
 * @author              Stephan Nijman <vanaf1979@gmail.com>
 * @copyright           2019 Stephan Nijman
 * @license             GPL-2.0-or-later
 * @version             0.8.0
 * 
 * @uses Var-dumper https://github.com/symfony/var-dumper
 *
 * @wordpress-plugin
 * Plugin Name:         Dumpr
 * Plugin URI:          https://vanaf1979.nl/
 * Description:         d() and dd() functions for WordPress thee development.
 * Version:             0.8.0
 * Requires at least:   5.3
 * Requires PHP:        7.0
 * Author:              Stephan Nijman
 * Author URI:          https://vanaf1979.nl
 * Text Domain:         dumpr
 * License:             GPL v2 or later
 * License URI:         http://www.gnu.org/licenses/gpl-2.0.txt
 */


/**
 * Check for WordPress context.
 */
if ( ! defined( 'ABSPATH' ) ) exit;


if( WP_DEBUG ) {

    /**
     * Prevent WordPRess output before dump.
     */
    ob_start();

    /**
     * Load the composer autoload file.
     */
    require_once __DIR__ . '/vendor/autoload.php';


} else {

    /**
     * d.
     *
     * Mock dump() function if debug is false
     * 
     * @return void
     */
    if ( ! function_exists('dump') ) {
        function dump() : void {
            return;
        }
    }


    /**
     * d.
     *
     * Mock d() function if debug is false
     * 
     * @return void
     */
    if ( ! function_exists('d') ) {
        function d() : void {
            return;
        }
    }


    /**
     * dd.
     *
     * Mock dd() function if debug is false
     * 
     * @return void
     */
    if ( ! function_exists('dd') ) {
        function dd() : void {
            return;
        }
    }


    /**
     * dp.
     *
     * Mock dp() function if debug is false
     * 
     * @return void
     */
    if ( ! function_exists('dp') ) {
        function dp() : void {
            return;
        }
    }


    /**
     * dpd.
     *
     * Mock dpd() function if debug is false
     * 
     * @return void
     */
    if ( ! function_exists('dpd') ) {
        function dpd() : void {
            return;
        }
    }

}
