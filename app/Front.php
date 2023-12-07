<?php 

namespace Habib\E_Sent_Submit\App;

/**
 * Front class
 */
class Front {

    /**
     * class constructor
     */
    public function __construct() {
        add_action( 'wp_enqueue_scripts', [$this, 'enqueue_script'] );
    }

    /**
     * Load all Front assets
     */
    public function enqueue_script() {
        wp_enqueue_style( 'e-sent-submit-front', ESS_ASSET . "/front/css/front.css", [], time() );

        wp_enqueue_script( 'e-sent-submit-front', ESS_ASSET . "/front/js/front.js", ['jquery'], time(), true );
    }
}