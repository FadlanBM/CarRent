 <?php
 defined('BASEPATH') or exit('No direct script access allowed');

 class MobileController extends CI_Controller
 {
     public function __construct()
     {
         parent::__construct();
         $this->load->model('mobil_model');
         $this->load->model('sead_model');
     }
     public function index()
     {
         $this->middleware->restrict();
         $data['title'] = 'Management Mobil';
         $data['breadcrumb'] = ['Dashboard', 'Management Mobil'];
         $data['users'] = $this->mobil_model->index('users')->result();
         $this->load->view('template/header', $data);
         $this->load->view('template/sidebar', $data);
         $this->load->view('admin/mobile', $data);
         $this->load->view('template/footer');
         $this->load->view('helper/alert');
     }

     public function create()
     {
         $data['title'] = 'Tambah Mobil';
         $data['breadcrumb'] = ['Managemen Mobil', 'Tambah Mobil'];
         $data['sead'] = $this->sead_model->index()->result();
         $this->load->view('template/header', $data);
         $this->load->view('template/sidebar', $data);
         $this->load->view('admin/form/create_mobil', $data);
         $this->load->view('template/footer');
         $this->load->view('helper/alert');
     }

     public function store()
     {
         $this->_rules();
         if ($this->form_validation->run() == false) {
             $this->create();
         } else {
             $config['upload_path'] = './uploads/';
             $config['allowed_types'] = 'gif|jpg|png|jpeg';
             $this->load->library('upload', $config);

             if (!$this->upload->do_upload('image')) {
                 $error = $this->upload->display_errors();
                 $this->session->set_flashdata('error', $error);
                 $this->create();
             } else {
                 $data = $this->upload->data();
                 $file_name = $data['file_name'];
                 $data = [
                     'brand' => $this->input->post('brand'),
                     'plate' => $this->input->post('plate'),
                     'color' => $this->input->post('color'),
                     'year' => $this->input->post('year'),
                     'status' => $this->input->post('status'),
                     'rental_price' => $this->input->post('price'),
                     'car_seat_id' => $this->input->post('sead'),
                     'image' => $file_name,
                 ];
                 $this->mobil_model->insert($data);
                 $this->session->set_flashdata('success', 'Tambah data mobile successfully!');
                 redirect('admin/mobil');
             }
         }
     }

     public function _rules()
     {
         $this->form_validation->set_rules('brand', 'Brand', 'required', [
             'required' => '%s Brand harus diisi !!',
         ]);
         $this->form_validation->set_rules('plate', 'Plate', 'required', [
             'required' => '%s Plate harus diisi !!',
         ]);
         $this->form_validation->set_rules('color', 'Color', 'required', [
             'required' => '%s Color harus diisi !!',
         ]);
         $this->form_validation->set_rules('status', 'Status', 'required', [
             'required' => '%s Status harus diisi !!',
         ]);
         $this->form_validation->set_rules('sead', 'Sead', 'required', [
             'required' => '%s Sead harus diisi !!',
         ]);
         $this->form_validation->set_rules('price', 'Price', 'required', [
             'required' => '%s Price harus diisi !!',
             'numeric' => '%s harus berupa angka !!',
         ]);
         $this->form_validation->set_rules('year', 'Year', 'required', [
             'required' => '%s Year harus diisi !!',
         ]);
     }
 }

 /* End of file Controllername.php */
