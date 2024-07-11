<?php

class Users extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index()
    {
        // Mengambil data pengguna dari model user_model
        $data['user'] = $this->user_model->get_users();

        // Memuat tampilan daftar pengguna dengan data yang sudah diambil
        $this->load->view('bukti-pdf', $data);
    }

    public function view($user)
    {
        // Mengambil data pengguna berdasarkan id dari model user_model
        $data['user'] = $this->user_model->get_user($user);

        // Mengambil data pembelian berdasarkan id pengguna dari model purchase_model
        $data['user'] = $this->purchase_model->get_user_purchases($user);

        // Memuat tampilan detail pengguna dengan data yang sudah diambil
        $this->load->view('bukti-pdf', $data);
    }
}
