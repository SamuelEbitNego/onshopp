<?php
class Chat_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_chats()
    {
        $this->db->order_by('id', 'ASC');
        $query = $this->db->get('chats');
        return $query->result_array();

        $this->db->order_by('id', 'ASC');
        $query = $this->db->get('user');
        return $query->result_array();
    }

    public function insert_chat($data)
    {
        $this->db->insert('chats', $data);
        return $this->db->insert_id();

        $this->db->insert('user', $data);
        return $this->db->insert_id();
    }
}
