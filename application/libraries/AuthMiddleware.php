<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthMiddleware {
    
    protected $CI;

    public function __construct() {
        $this->CI =& get_instance();
    }

    public function restrict() {
        if (!$this->CI->session->userdata('logged_in')) {
            redirect('login'); 
        }
    }
}
?>