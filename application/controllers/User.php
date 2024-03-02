<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


	public function index()
	{
		$this->load->view('Templates/navbar_main');
		$this->load->view('User/main_page');
	}

	public function price()
	{
		$this->load->view('Templates/navbar_main');
		$this->load->view('User/price_list');
	}
	public function test()
	{
		$this->load->view('Templates/navbar_main');
		$this->load->view('User/test');
	}
	public function payment()
	{
		$this->load->view('Templates/navbar_main');
		$this->load->view('User/payment');
	}
}
