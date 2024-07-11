<?php

class Registrasi extends CI_Controller
{

	public function index()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => 'Silahkan di isi Nama Anda']);
		$this->form_validation->set_rules('username', 'Username', 'required', ['required' => 'Silahkan di isi Username Anda']);
		$this->form_validation->set_rules(
			'password_1',
			'Password',
			'required|matches[password_2]',
			[
				'required' => 'Silahkan di isi Password Anda',
				'matches' => 'Password Tidak Cocok!'
			]
		);
		$this->form_validation->set_rules('password_2', 'Password', 'required|matches[password_1]');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header');
			$this->load->view('registrasi');
			$this->load->view('templates/footer');
		} else {
			$data = array(
				'id' => '',
				'nama' => $this->input->post('nama'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password_1'),
				'role_id' => 2,
			);

			$this->db->insert('user', $data);
			redirect('auth/login');
		}
	}

	public function datauser()
	{
		$data['judul'] = 'Data Anggota';
		$data['user'] = $this->Model_User->cekData(['nama' => $this->session->userdata('nama')])->row_array();
		$this->db->where('role_id', 1);
		$data['datauser'] = $this->db->get('user')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/anggota', $data);
		$this->load->view('templates/footer');
	}
}
