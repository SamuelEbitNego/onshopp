<?php

class kategori extends CI_Controller
{
	public function stylish_pria()
	{
		$data['stylish_pria'] = $this->model_kategori->data_stylish_pria()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('stylish_pria', $data);
		$this->load->view('templates/footer');
	}

	public function stylish_wanita()
	{
		$data['stylish_wanita'] = $this->model_kategori->data_stylish_wanita()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('stylish_wanita', $data);
		$this->load->view('templates/footer');
	}

	public function elektronik()
	{
		$data['elektronik'] = $this->model_kategori->data_elektronik()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('elektronik', $data);
		$this->load->view('templates/footer');
	}

	public function buku()
	{
		$data['buku'] = $this->model_kategori->data_buku()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('buku', $data);
		$this->load->view('templates/footer');
	}

	public function daftar_pembelian()
	{
		$data['buku'] = $this->model_kategori->data_buku()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('buku', $data);
		$this->load->view('templates/footer');
	}
}
