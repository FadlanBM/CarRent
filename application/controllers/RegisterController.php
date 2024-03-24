<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterController extends CI_Controller {

	public function index()
	{
		$data['title']="Dashboard";
		$this->load->view('template/header',$data);
		$this->load->view('auth/register');
	}

}

/* End of file RegisterController.php */

