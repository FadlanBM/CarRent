<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	public function index()
	{
		$data['title']="Dashboard";
		$this->load->view('template/header',$data);
		$this->load->view('auth/login');
	}
}

?>
 