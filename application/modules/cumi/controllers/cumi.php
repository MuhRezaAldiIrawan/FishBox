<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cumi extends MY_Controller {
	public function index(){
		$this->load->view('header_ikan');
		$this->load->view('content_cumi');
		$this->load->view('footer_ikan');
	}
}
