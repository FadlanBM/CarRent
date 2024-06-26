<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->middleware->restrict();
        $data['title'] = 'Dashboard';
        $data['breadcrumb'] = ['Dashboard'];
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('admin/dashboard');
        $this->load->view('template/footer');
        $this->load->view('helper/alert');
    }
}

?>
