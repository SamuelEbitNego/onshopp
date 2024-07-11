<?php

class Model_kategori extends CI_Model
{
	public function data_stylish_pria()
	{
		return $this->db->get_where("tb_barang", array('kategori' => 'STYLISH PRIA'));
	}

	public function data_stylish_wanita()
	{
		return $this->db->get_where("tb_barang", array('kategori' => 'STYLISH WANITA'));
	}

	public function data_elektronik()
	{
		return $this->db->get_where("tb_barang", array('kategori' => 'ELEKTRONIK'));
	}

	public function data_buku()
	{
		return $this->db->get_where("tb_barang", array('kategori' => 'BUKU'));
	}

	public function daftar_pembelian()
	{
		return $this->db->get_where("purchases", array('kategori' => 'RIWAYAT PEMBELIAN'));
	}
}
