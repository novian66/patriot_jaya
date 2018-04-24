<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_service extends MX_Controller {
	public function index()
	{
		$this->load->view('order_service');
	}
}
