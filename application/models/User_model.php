<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model {


    public function userLoginCheck($username) {
        $this->db->where("user_email =  '$username' or user_username =  '$username'");
        $query = $this->db->get('uhe_user');
        return $query->row_array();
    }

    public function register() {
        $data = [
            'user_name' => htmlspecialchars($this->input->post('name', true)),
            'user_email' => htmlspecialchars($this->input->post('email', true)),
            'user_username' => htmlspecialchars($this->input->post('username', true)),
            'user_photo' => 'default.jpg', 
            'user_password' => password_hash($this->input->post('password1', true), PASSWORD_DEFAULT),
            'user_is_active' => 1,
            'date_created' => time()
        ];

        $this->db->insert('uhe_user', $data);
    }

    public function getUserLoginData() {
        return $this->db->get_where('uhe_user', ['user_email' => $this->session->userdata('user_email')])->row_array();
    }
}