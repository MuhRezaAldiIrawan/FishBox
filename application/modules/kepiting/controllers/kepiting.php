<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kepiting extends MY_Controller {
	public function index(){
		$this->load->view('header_kepiting');
		$this->load->view('content_kepiting');
		$this->load->view('footer_kepiting');
	}
}
