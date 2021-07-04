<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class list_barang extends MY_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('M_list_barang');
    }

	public function index(){
		$data['barang']=$this->M_list_barang->tampil()->result();
		$this->load->view('header_list_barang');
		$this->load->view('content_list_barang', $data);
		$this->load->view('footer_list_barang');
	}
}