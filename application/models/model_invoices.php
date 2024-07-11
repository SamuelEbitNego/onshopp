<?php

class Model_invoices extends CI_Model
{
	public function index()
	{
		date_default_timezone_set('Asia/Jakarta');
		$nomor = $this->input->post('nomor');
		$alamat = $this->input->post('alamat');

		$invoices = array(
			'nomor' 		=> $nomor,
			'alamat' 	=> $alamat,
			'tgl_pesan' => date('Y-m-d H:i:s'),
			'batas_bayar' => date('Y-m-d H:i:s', mktime(
				date('H'),
				date('i'),
				date('s'),
				date('m'),
				date('d') + 1,
				date('
					Y')
			)),

		);
		$this->db->insert('tb_invoices', $invoices);
		$id_invoices = $this->db->insert_id();

		foreach ($this->cart->contents() as $item) {
			$data = array(
				'id_invoices' => $id_invoices,
				'id_brg' 	  => $item['id'],
				'nama_brg'	  => $item['name'],
				'jumlah'	  => $item['qty'],
				'harga'	  	  => $item['price'],
			);
			$this->db->insert('tb_pesanan', $data);
		}
		return true;
	}

	public function tampil_data()
	{
		$result = $this->db->get('tb_invoices');
		if ($result->num_rows() >= 0) {
			return $result->result();
		} else {
			return false;
		}
	}


	public function ambil_id_invoices($id_invoices)
	{
		$result = $this->db->where('id', $id_invoices)->limit(1)->get('tb_invoices');
		if ($result->num_rows() >= 0) {
			return $result->row();
		} else {

			return false;
		}
	}

	public function ambil_id_pesanan($id_invoices)
	{
		$result = $this->db->where('id_invoices', $id_invoices)->get('tb_pesanan');
		if ($result->num_rows() >= 0) {
			return $result->result();
		} else {

			return false;
		}
	}

	public function hapus_invoices($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}
