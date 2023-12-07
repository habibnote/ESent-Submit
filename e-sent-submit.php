<?php 
/*
 * Plugin Name:       ESent Submit
 * Plugin URI:        
 * Description:       
 * Version:           0.0.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Md. Habib
 * Author URI:        https://me.habibnote.com
 * Text Domain:       e-sent
*/

namespace Habib\E_Sent_Submit;

if( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Plugin main class
 */ 
final class Esent_Submit {
    static $instance = false;

    /**
     * Singleton Instance
    */
    static function get_esent_plugin() {
        
        if( ! self::$instance ) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}

/**
 * Cick off the plugins 
 */
Esent_Submit::get_esent_plugin();