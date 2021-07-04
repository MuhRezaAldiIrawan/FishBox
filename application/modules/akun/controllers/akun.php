<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class akun extends MY_Controller {
	public function index(){
		$this->load->view('header_akun');
		$this->load->view('content_akun');
		$this->load->view('footer_akun');
	}
}
