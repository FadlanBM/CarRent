<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
    }

    public function index()
    {
        $this->middleware->restrictstatus();
        $data['title'] = 'Dashboard';
        $this->load->view('template/header', $data);
        $this->load->view('auth/login');
        $this->load->view('helper/alert');
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // Validasi input
        if (!empty($username) && !empty($password)) {
            $data = [
                'username' => $username,
                'password' => $password, 
            ];
            $res = $this->auth_model->login($data);
            if ($res !== false) {
                $auth_userdetail = [
                    'user_id' => $res->user_id,
                    'name' => $res->name,
                    'username' => $res->username,
                    'level' => $res->level,
                ];
                $this->session->set_userdata('logged_in', true);
                $this->session->set_userdata('auth_user', $auth_userdetail);			
                if ($res->level === "1") {
					$this->session->set_flashdata('success', 'Success Login');
                    redirect('admin/dashboard');
                } elseif ($res->level === "0") {                
                }
            } else {
                // Data pengguna tidak ditemukan, tampilkan pesan kesalahan
                $this->session->set_flashdata('error', 'Username atau Password tidak valid!');
                redirect('login');
            }
        } else {
            // Jika ada input yang kosong
            $this->session->set_flashdata('error', 'Username dan Password harus diisi');
            redirect('login');
        }
    }
}

?>
