<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobil_model extends CI_Model {
	public function index(){
		return $this->db->get('cars');
	}
	public function insert($data){
        return $this->db->insert('cars',$data);
    }

	public function getCarSead()
{
    // Mengambil semua nama kursi mobil beserta mobil yang terkait
    $query = $this->db->select('carseat.name, GROUP_CONCAT(cars.brand) as cars')
                      ->from('carseat')
                      ->join('cars', 'cars.car_seat_id = carseat.car_seat_id', 'left')
                      ->group_by('carseat.car_seat_id')
                      ->get();

    return $query->result();
}
}

/* End of file ModelName.php */

