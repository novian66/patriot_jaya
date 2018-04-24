<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create_order extends MX_Controller {
	public function index()
	{
		$customer_id = $this->session->userdata('customer_id');
		if(!empty($customer_id)){
			$this->load->view('create_order');
		}	
		else{
			redirect(base_url().'login');
		}
	}
}
