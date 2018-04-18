<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MX_Controller {
	public function index()
	{
		$this->load->view('login');
	}

	public function proses(){
		$this->session->set_userdata('customer_id',123);
		redirect(base_url().'');
	}

	public function logout(){
		session_destroy();
		redirect(base_url().'login');
	}
}
