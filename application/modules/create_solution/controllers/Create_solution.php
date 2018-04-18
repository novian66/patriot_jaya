<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create_solution extends MX_Controller {
	public function index()
	{
		$customer_id = $this->session->userdata('customer_id');
		if(!empty($customer_id)){
			$this->load->view('create_solution');
		}	
		else{
			redirect(base_url().'login');
		}
	}
}
