<?php
class Customer_service extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('Customer_service_model');
   }

   public function index()
   {
      $data['customer_service'] = $this->Customer_service_model->get_all_customer_service();
      $this->load->view('admin/customer_service', $data);
   }

   public function save_customer_service()
   {
      $data = array(
         'nama' => $this->input->post('nama'),
         'email' => $this->input->post('email'),
         'pesan' => $this->input->post('pesan')
      );

      $this->Customer_service_model->insert_customer_service($data);
      redirect('admin/customer_service');
   }
}
