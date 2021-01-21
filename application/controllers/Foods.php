<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Foods extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index()
	{
        $data = [
			'pageTitle' => 'UniHealth | Foods',
			'user' => $this->user_model->getUserLoginData()
        ];

		if($this->session->userdata('user_username')) {
			$this->load->view('template/header', $data);
			$this->load->view('template/navbar-login');
			$this->load->view('search');	
			$this->load->view('template/footer');
		} else {
			$this->load->view('template/header', $data);
			$this->load->view('template/navbar');
			$this->load->view('search');
			$this->load->view('template/footer');
		}
	}
}
