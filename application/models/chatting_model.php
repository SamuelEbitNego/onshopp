
<?php
class chatting_model extends CI_Model
{

     public function __construct()
     {
          parent::__construct();
          $this->load->database();
     }

     public function get_messages()
     {
          $this->db->select('*');
          $this->db->from('messages');
          $this->db->order_by('timestamp', 'asc');
          $query = $this->db->get();
          return $query->result_array();
     }

     public function add_message($user, $message)
     {
          $data = array(
               'user' => $user,
               'message' => $message,
               'timestamp' => time()
          );
          $this->db->insert('messages', $data);
     }
}
