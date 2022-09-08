<?php

class Kategori extends CI_Controller{
	public function kopi()
	{
		$data['kopi'] = $this->model_kategori->data_kopi()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('kopi',$data);
		$this->load->view('templates/footer');
	}

	public function bubuk()
	{
		$data['bubuk'] = $this->model_kategori->data_bubuk()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('bubuk',$data);
		$this->load->view('templates/footer');
	}

	public function sirup()
	{
		$data['sirup'] = $this->model_kategori->data_sirup()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('sirup',$data);
		$this->load->view('templates/footer');
	}

}