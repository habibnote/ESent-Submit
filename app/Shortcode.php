<?php 

namespace Habib\E_Sent_Submit\App;

/**
 * Front class
 */
class Shortcode {

    /**
     * class constructor
     */
    public function __construct() {
        
        add_shortcode( 'ess_main', [$this, 'ess_main_shortcode'] );
    }

    /**
     * main shortcode
     */
    public function ess_main_shortcode() {
        include_once( ESS_DIR . "/views/form/ess-form.php" );
    }
}