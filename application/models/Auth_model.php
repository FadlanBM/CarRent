<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
    public function login($data)
    {
        $this->db->select('*');
        $this->db->where('username', $data['username']);
        $this->db->from('users');
        $this->db->limit(1);

        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            $user = $query->row();
            if (password_verify($data['password'], $user->password)) {
                return $user;
            } else {
                return false; // Password salah
            }
        } else {
            return false; // Username tidak ditemukan
        }
    }

    public function register($data)
    {
        return $this->db->insert('users', $data);
    }
}

/* End of file Controllername.php */

?>
