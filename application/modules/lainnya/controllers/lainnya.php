<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lainnya extends MY_Controller {
	public function index(){
		$this->load->view('header_lainnya');
		$this->load->view('body_lainnya');
		$this->load->view('footer_lainnya');
	}
}
