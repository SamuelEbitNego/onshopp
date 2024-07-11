<?php

class Invoices extends CI_Controller
{
	public function index()
	{
		$data['invoices'] = $this->model_invoices->tampil_data();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/invoices', $data);
		$this->load->view('templates_admin/footer');
	}
	public function detail($id_invoices)
	{
		$data['invoices'] = $this->model_invoices->ambil_id_invoices($id_invoices);
		$data['pesanan'] = $this->model_invoices->ambil_id_pesanan($id_invoices);
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/detail_invoices', $data);
		$this->load->view('templates_admin/footer');
	}

	public function hapus($invoices)
	{
		$where = array('id' => $invoices);
		$this->model_invoices->hapus_invoices($where, 'tb_invoices');
		redirect('admin/invoices/index');
	}
}
