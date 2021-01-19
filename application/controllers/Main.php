 
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
        $data['pageTitle'] = "UniHealth | Home";

		$this->load->helper('url');
		$this->load->view('template/navbar', $data);
		$this->load->view('main');
	}
}
