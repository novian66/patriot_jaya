<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MX_Controller {
	public function index()
	{
		// echo $this->session->userdata('customer_id');
		$this->load->view('welcome');
	}
}
