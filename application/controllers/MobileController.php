 <?php
 defined('BASEPATH') or exit('No direct script access allowed');

 class MobileController extends CI_Controller
 {
     public function index()
     {
         $this->middleware->restrict();
         $data['title'] = 'Management Mobil';
         $data['breadcrumb'] = ['Dashboard', 'Management Mobil'];
         $this->load->view('template/header', $data);
         $this->load->view('template/sidebar', $data);
         $this->load->view('admin/mobile');
         $this->load->view('template/footer');
     }

     public function create()
     {
         $data['title'] = 'Tambah Mobil';
         $data['breadcrumb'] = ['Managemen Mobil', 'Tambah Mobil'];
         $this->load->view('template/header', $data);
         $this->load->view('template/sidebar', $data);
         $this->load->view('admin/form/create_mobil');
         $this->load->view('template/footer');
         $this->load->view('helper/alert');
     }
 }

 /* End of file Controllername.php */
