<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends MX_Controller {
	public function index()
	{
		$this->load->view('video');
	}
}
