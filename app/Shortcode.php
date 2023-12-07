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
        add_action( 'wp_ajax_ess_form_submit', [$this, 'ess_form_submit'] );
    }

    /**
     * Process ajax request
     */
    public function ess_form_submit() {

        $ess_name   = $_POST['ess_name'];
        $ess_email  = $_POST['ess_email'];

        //get admin email address
        $admin_user = get_users( array( 'role' => 'administrator' ) );

        // Check if there's at least one administrator
        if ( ! empty( $admin_user ) ) {

            // Get the first administrator's email address
            $admin_email = get_the_author_meta( 'user_email', $admin_user[0]->ID );

        }

        $to = 'sendto@example.com';
        $subject = 'The subject';
        $body = 'The email body content';
        $headers = array('Content-Type: text/html; charset=UTF-8');

        wp_mail( $to, $subject, $body, $headers );

    }

    /**
     * main shortcode
     */
    public function ess_main_shortcode() {
        include_once( ESS_DIR . "/views/form/ess-form.php" );
    }
}