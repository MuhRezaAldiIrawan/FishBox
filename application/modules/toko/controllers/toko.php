<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class toko extends MY_Controller 
{
	public function __construct()
	{
		parent::__construct();
		
	}
	public function index()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('nomor', 'nomor', 'required|trim');
		$this->form_validation->set_rules('alamat', 'alamat', 'required|trim');
		
		if($this->form_validation->run() == false)
		{
			$this->load->view('header');
			$this->load->view('body');
			$this->load->view('footer');
		}else{
			$data = [
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
                'nomor' => htmlspecialchars($this->input->post('nomor', true)),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                'image' => 'default.jpg',
				'date_created' => time()

			];

			$this->db->insert('toko', $data);
			redirect('akun/akun');
		}
	}
	
}