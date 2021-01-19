<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
        $data['pageTitle'] = "UniHealth | Login";

        $this->load->view('template/navbar', $data);
        $this->load->view('auth/login');
    }
    
    public function register() {
        $data['pageTitle'] = "UniHealth | Sign Up";

        $this->load->view('template/navbar', $data);
        $this->load->view('auth/register');
    }
}
