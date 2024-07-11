<?php
class Customer_service_model extends CI_Model {
   public function insert_customer_service($data) {
      $this->db->insert('customer_service', $data);
   }

   public function get_all_customer_service() {
      $query = $this->db->get('customer_service');
      return $query->result();
   }
}
