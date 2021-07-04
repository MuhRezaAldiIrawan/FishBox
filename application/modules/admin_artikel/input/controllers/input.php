<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class input extends MY_Controller 
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
			$this->load->view('header_input');
			$this->load->view('content_input');
			$this->load->view('footer_input');
		}else{
			$data = [
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'harga' => htmlspecialchars($this->input->post('harga', true)),
                'stok' => htmlspecialchars($this->input->post('stok', true)),
                'kategori' => htmlspecialchars($this->input->post('kategori', true)),
				'tanggal' => time()

			];

			$this->db->insert('barang', $data);
			redirect('list_barang');
		}
	}
	
}