<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Password {

    public function __construct() {
        // Load library atau helper yang dibutuhkan di sini
    }

    public function hash_password($password) {
        return password_hash($password, PASSWORD_DEFAULT);
    }

    public function check_password($password_input, $hashed_password_from_db) {
        return password_verify($password_input, $hashed_password_from_db);
    }
}
