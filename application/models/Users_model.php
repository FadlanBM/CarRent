<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

	public function index($table){
		return $this->db->get($table);
	}

	public function insert($table,$data){
        return $this->db->insert($table,$data);
    }
	public function update($table,$data){        
		$this->db->where('user_id', $data['user_id']);		
		$this->db->update($table, $data);	
    }
	public function destroy($table,$id) {        
        $this->db->where('user_id', $id);
        $this->db->delete($table);
    }
}

/* End of file ModelName.php */
