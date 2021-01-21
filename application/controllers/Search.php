<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

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
			$this->load->view('template/navbar-login', $data);
			$this->load->view('search');	
			$this->load->view('template/footer');
		} else {
			$this->load->view('template/navbar', $data);
			$this->load->view('search');
			$this->load->view('template/footer');
		}
		
	}
}
