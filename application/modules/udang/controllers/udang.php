<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class udang extends MY_Controller {
	public function index(){
		$this->load->view('header_udang');
		$this->load->view('content_udang');
		$this->load->view('footer_udang');
	}
}
