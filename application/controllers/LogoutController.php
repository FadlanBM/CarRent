<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LogoutController extends CI_Controller
{
    public function logout()
    {        
        $this->load->library('session');        
        $this->session->unset_userdata('logged_in');
    }
}

/* End of file Controllername.php */
