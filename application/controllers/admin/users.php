<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');
        $this->load->library('session');
    }

    public function index()
    {
        $data['users'] = $this->users_model->get_users();
        $this->load->view('admin/users', $data);
    }
}
