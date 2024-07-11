<?php
class Chat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('chat_model');
    }

    public function index()
    {
        $data['chats'] = $this->chat_model->get_chats();
        $this->load->view('chat', $data);
    }

    public function send_chat()
    {
        $data = array(
            'name' => $this->input->post('name'),
            'message' => $this->input->post('message')
        );
        $this->chat_model->insert_chat($data);
        redirect('chat');
    }
}
