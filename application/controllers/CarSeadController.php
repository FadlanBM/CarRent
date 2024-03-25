<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CarSeadController extends CI_Controller {

	 public function index()
     {
         $this->middleware->restrict();
         $data['title'] = 'Management Car Sead';
         $data['breadcrumb'] = ['Management Car Sead'];
         $this->load->view('template/header', $data);
         $this->load->view('template/sidebar', $data);
         $this->load->view('admin/carsead');
         $this->load->view('template/footer');
     }

}

/* End of file Controllername.php */
