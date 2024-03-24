<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('AuthMiddleware');
    }

    public function index()
    {
        $this->AuthMiddleware->restrict();
        $data['title'] = 'Dashboard';
        $data['breadcrumb'] = ['Dashboard'];
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('admin/dashboard');
        $this->load->view('template/footer');
    }
}

?>
