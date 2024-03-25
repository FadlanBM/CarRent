<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class middleware {
    
    protected $CI;

    public function __construct() {
        $this->CI =& get_instance();
    }

    public function restrict() {
        if (!$this->CI->session->userdata('logged_in')) {
            redirect('login'); 
        }
    }
    public function restrictstatus() {
        if ($this->CI->session->userdata('logged_in')) {
            redirect('admin/dashboard');
        }
    }
}
?>
