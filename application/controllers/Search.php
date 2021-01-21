<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	public function index()
	{
        $data = [
            'pageTitle' => 'UniHealth | Home'
        ];

		$this->load->view('template/navbar', $data);
		$this->load->view('search');
	}
}
