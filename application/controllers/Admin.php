<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
    $data['title'] = "Admin Page";

		$this->load->view('templates/sidebar', $data);	
		$this->load->view('templates/navbar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('templates/footer');
	}
}
