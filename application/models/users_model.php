<?php
defined('BASEPATH') or exit('No direct script access allowed');

class users_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_users()
    {
        $query = $this->db->get('user');
        return $query->result();
    }

    public function get_user($id)
    {
        // Mengambil data pengguna berdasarkan id
        $query = $this->db->get_where('users', array('id' => $id));
        return $query->row();
    }
}
