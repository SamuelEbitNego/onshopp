<?php
class auth extends CI_Controller
{

	public function login()

	{
		$this->form_validation->set_rules('username', 'Username', 'required', ['required' => 'Username Silahkan di isi!']);
		$this->form_validation->set_rules('password', 'Password', 'required', ['required' => 'Password Silahkan di isi!']);
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header');
			$this->load->view('form_login');
			$this->load->view('templates/footer');
		} else {
			$auth = $this->model_auth->cek_login();

			if ($auth == FALSE) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					Username atau Password Salah!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
					</div>');
				redirect('auth/login');
			} else {
				$this->session->set_userdata('username', $auth->username);
				$this->session->set_userdata('role_id', $auth->role_id);

				switch ($auth->role_id) {
					case 1:
						redirect('admin/dashboard_admin');
						break;

					case 2:
						redirect('dashboard');
						break;

					default:
						break;
				}
			}
		}
	}

	public function datauser()
	{
		$data['judul'] = 'Data User';
		$data['user'] = $this->model_user->cekData(['nama' => $this->session->userdata('nama')])->row_array();
		$this->db->where('role_id', 1);
		$data['datauser'] = $this->db->get('user')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/datauser', $data);
		$this->load->view('templates/footer');
	}

	public function logout()
	{
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Anda telah logout!!</div>');
		$this->session->sess_destroy();
		redirect('auth/login');
	}
}
