<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class input2 extends MY_Controller 
{
	public function __construct()
	{
		parent::__construct();
		
	}
	public function index()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Nama Barang', 'required|trim');
		$this->form_validation->set_rules('harga', 'Harga', 'required|trim');
		$this->form_validation->set_rules('stok', 'Stok', 'required|trim');
		$this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
		
		if($this->form_validation->run() == false)
		{
			$this->load->view('header_input2');
			$this->load->view('content_input2');
			$this->load->view('footer_input2');
		}else{
			$data = [
				'nama' => htmlspecialchars($this->input2->post('nama', true)),
				'harga' => htmlspecialchars($this->input2->post('harga', true)),
                'stok' => htmlspecialchars($this->input2->post('stok', true)),
                'kategori' => htmlspecialchars($this->input2->post('kategori', true)),
				'tanggal' => time()

			];

			$this->db->insert('barang', $data);
			redirect('list_barang');
		}
	}
	
}