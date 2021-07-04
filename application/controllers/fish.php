<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class fish extends MY_Controller {
	public function index(){
		$this->load->view('header_home');
		$this->load->view('content_home');
		$this->load->view('footer_home');
	}
	
}
