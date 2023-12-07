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
     * class constructor
     */
    private function __construct() {
        
        $this->include();
        $this->define();
        $this->hooks();
    }

    /**
     * Include all needed files
     */
    public function include() {
        require_once( dirname( __FILE__ ) . '/vendor/autoload.php' );
    }

    /**
     * define all constant
     */
    private function define() {
        define( 'ESS', __FILE__ );
        define( 'ESS_DIR', dirname( ESS ) );
        define( 'ESS_ASSET', plugins_url( 'assets', ESS ) );
    }

    /**
     * All hooks
     */
    private function hooks() {
        new App\Admin();
        new App\Front();
        new App\Shortcode();
    }

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