<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UsersController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');
    }

    public function index()
    {
        $this->middleware->restrict();
        $data['title'] = 'Managemen Users';
        $data['breadcrumb'] = ['Managemen Users'];
        $data['users'] = $this->users_model->index('users')->result();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('admin/users', $data);
        $this->load->view('template/footer');
        $this->load->view('helper/alert');
    }

    public function create()
    {
        $data['title'] = 'Tambah Users';
        $data['breadcrumb'] = ['Managemen Users', 'Tambah Users'];
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('admin/form/create_users');
        $this->load->view('template/footer');
        $this->load->view('helper/alert');
    }

    public function store()
    {
        $this->_rules();

        if ($this->form_validation->run() == false) {
            $this->create();
        } else {
            $data = [
                'name' => $this->input->post('name'),
                'username' => $this->input->post('username'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'level' => $this->input->post('level'),
            ];
            $this->users_model->insert('users', $data);
            $this->session->set_flashdata('success', 'Tambah data user successfully!');
            redirect('admin/users');
        }
    }

    public function update($user_id)
    {
        $method = $this->input->post('_method');
        if ($method === 'PUT') {
            $this->_rules_update();
            if ($this->form_validation->run() == false) {
                $this->index();
            } else {
                $data = [
                    'user_id' => $user_id,
                    'name' => $this->input->post('name'),
                    'username' => $this->input->post('username'),
                    'level' => $this->input->post('level'),
                ];

                $this->users_model->update('users', $data);
                $this->session->set_flashdata('success', 'Update data user successfully!');
                redirect('admin/users');
            }
        } else {
            redirect('admin/users');
        }
    }

    public function destroy($user_id)
    {
        $this->users_model->destroy('users', $user_id);
        $this->session->set_flashdata('success', 'Form Delete successfully!');
        redirect('admin/users');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('name', 'Name', 'required', [
            'required' => '%s Name harus diisi !!',
        ]);
        $this->form_validation->set_rules('username', 'Username', 'required', [
            'required' => '%s Username harus diisi !!',
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required', [
            'required' => '%s Password harus diisi !!',
        ]);
        $this->form_validation->set_rules('confirmPassword', 'Konfirmasi Password', 'required|matches[password]', [
            'required' => 'Konfirmasi password harus diisi !!',
            'matches' => 'Konfirmasi password tidak cocok dengan password.',
        ]);
        $this->form_validation->set_rules('level', 'Level', 'required', [
            'required' => '%s Role harus diisi !!',
        ]);
    }

    public function _rules_update()
    {
        $this->form_validation->set_rules('name', 'Name', 'required', [
            'required' => '%s Name harus diisi !!',
        ]);
        $this->form_validation->set_rules('username', 'Username', 'required', [
            'required' => '%s Username harus diisi !!',
        ]);
        $this->form_validation->set_rules('level', 'Level', 'required', [
            'required' => '%s Role harus diisi !!',
        ]);
    }

    public function resetPass($user_id)
    {
        $data = [
			'user_id' => $user_id,
            'password' => password_hash('12345678', PASSWORD_DEFAULT),
        ];
        $this->users_model->update('users', $data);
        $this->session->set_flashdata('success', 'Update data user successfully!');
    }
}
?>
