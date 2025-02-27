<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Contact_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('contact/contact');
    }

    public function submit()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('message', 'Message', 'required');
        $this->form_validation->set_rules('number', 'number', 'required');



        if ($this->form_validation->run() == FALSE) {
            $this->load->view('contact/contact');
        } else {
            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'message' => $this->input->post('message'),
                'mobile' => $this->input->post('number'),
                'created_at' => date('Y-m-d H:i:s')
            );

            $this->Contact_model->insert_contact($data);
            $this->session->set_flashdata('success', 'Your message has been sent successfully!');
            redirect('contact');
        }
    }

    public function all_contact_query()
    {

        if (!$this->session->userdata('user') || $this->session->userdata('user')['role'] != 'admin') {
            redirect('auth/login');
        }

        $data['querys'] = $this->Contact_model->getquery();
        $this->load->view('contact/contact_query', $data);
    }

    public function delete_contact_query($id)
    {
        if (!$this->session->userdata('user') || $this->session->userdata('user')['role'] != 'admin') {
            redirect('auth/login');
        }

        $this->Contact_model->delete_query($id);

        redirect('contact/all_query');

    }


}
