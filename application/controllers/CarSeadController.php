<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CarSeadController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('sead_model');
    }
    public function index()
    {
        $this->middleware->restrict();
        $data['title'] = 'Management Car Sead';
        $data['breadcrumb'] = ['Management Car Sead'];
        $data['sead'] = $this->sead_model->index('carseat')->result();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('admin/carsead', $data);
        $this->load->view('template/footer');
        $this->load->view('helper/alert');
    }

    public function store()
    {
        $this->form_validation->set_rules('sead', 'Sead', 'required|is_unique[carseat.name]');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('error', 'data car sead duplicate!');
            redirect('admin/carsead');
        } else {
            $data = [
                'name' => $this->input->post('sead'),
            ];
            $this->sead_model->insert('carseat', $data);
            $this->session->set_flashdata('success', 'Tambah data car sead successfully!');
            redirect('admin/carsead');
        }
    }

    public function update($car_seat_id)
    {
        $this->form_validation->set_rules('sead', 'Sead', 'required|is_unique[carseat.name]');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('error', 'data car sead duplicate!');
            redirect('admin/carsead');
        } else {
            $method = $this->input->post('_method');
            if ($method === 'PUT') {
                $data = [
                    'car_seat_id' => $car_seat_id,
                    'name' => $this->input->post('sead'),
                ];
                $this->sead_model->update('carseat', $data);
                $this->session->set_flashdata('success', 'Update data car sead successfully!');
                redirect('admin/carsead');
            }
        }
    }

    public function destroy($carseat_id)
    {
        $this->sead_model->destroy('carseat', $carseat_id);
        $this->session->set_flashdata('success', 'Delete successfully!');
        redirect('admin/users');
    }
}

/* End of file Controllername.php */
