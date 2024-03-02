<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function index()
	{
		$this->load->view('Templates/header');
		$this->load->view('Templates/topbar');
		$this->load->view('Templates/sidebar');
		$this->load->view('Admin/dashboard');
		$this->load->view('Templates/footer');
	}
}
