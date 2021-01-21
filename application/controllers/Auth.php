<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->library('form_validation');
    }

    public function index() {
        $this->form_validation->set_rules('username', 'Username or Email', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if($this->form_validation->run()) {
            $this->_doLogin();
        } else {
            $data['pageTitle'] = "UniHealth | Login";

            $this->load->view('template/navbar', $data);
            $this->load->view('auth/login');
        } 
    }

    // Login process method
    private function _doLogin() {

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->user_model->userLoginCheck($username);

        if($user != null) {
            if($user['user_is_active'] == 1) {
                if(password_verify($password, $user['user_password'])) {
                    $data = [
                        'user_email' => $user['user_email'],
                        'user_username' => $user['user_username'],
                        'user_id' => $user['user_id']
                    ];

                    $this->session->set_userdata($data);

                    redirect('main');
                } else {
                    $this->session->set_flashdata('failed', 'Your password is wrong. Try again');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('failed', 'Your account is no longer active');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('failed', 'Email or username is not registered');
            redirect('auth');
        }
    }

    // Register process method
    public function register() {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[uhe_user.user_email]', [
            'is_unique' => "That email is taken. Try another!"
        ]);

        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[uhe_user.user_username]', [
            'is_unique' => "That username is taken. Try another!"
        ]);

        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
            'matches' => "Those password didn't match. Try another!",
            'min_length' => "Use 6 characters or more for your password"
        ]);

        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if($this->form_validation->run()) {
            $this->user_model->register();
            $this->session->set_flashdata('success', 'Registration is successful');
            redirect('auth');
        } else {
             $data['pageTitle'] = "UniHealth | Sign Up";

            $this->load->view('template/navbar', $data);
            $this->load->view('auth/register');
        }
    }
}
