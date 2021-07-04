<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bayar extends MY_Controller 
{
	public function __construct()
	{
		parent::__construct();
		
	}
	public function index()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
		$this->form_validation->set_rules('metode', 'Metode', 'required|trim');
		$this->form_validation->set_rules('jumlah', 'jumlah', 'required|trim');
		
		if($this->form_validation->run() == false)
		{
			$this->load->view('header');
			$this->load->view('body');
			$this->load->view('footer');
		}else{
			$data = [
				'nama' => htmlspecialchars($this->input->post('nama', true)),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),
				'metode' => htmlspecialchars($this->input->post('metode', true)),
                'jumlah' => htmlspecialchars($this->input->post('jumlah', true)),
				'tanggal' => time()

			];

			$this->db->insert('bayar', $data);
			redirect('akun/akun');
		}
	}
	
}