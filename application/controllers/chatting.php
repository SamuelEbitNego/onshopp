// controller: Chat.php
<?php
class chatting extends CI_Controller
{

     public function __construct()
     {
          parent::__construct();
          $this->load->model('chatting_model');
     }

     public function index()
     {
          $data['messages'] = $this->chatting_model->get_messages();
          $this->load->view('chat_view', $data);
     }

     public function send_message()
     {
          $user = $this->input->post('user');
          $message = $this->input->post('message');
          $this->chatting_model->add_message($user, $message);
          redirect('chat');
     }

     public function load_messages()
     {
          $data['messages'] = $this->chatting_model->get_messages();
          $this->load->view('chat_view', $data);
     }
}
