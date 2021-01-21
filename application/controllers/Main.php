 
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index()
	{

		$data['pageTitle'] = "UniHealth | Home";
		$data['user'] = $this->user_model->getUserLoginData();

        if($this->session->userdata('user_email')) {
			$this->load->view('template/navbar-login', $data);
			$this->load->view('main');
			$this->load->view('template/footer');
		} else {
			$this->load->view('template/navbar', $data);
			$this->load->view('main');
		}
	}
}
