<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
        $this->load->model('User_model');
    }
    public function register()
    {
        $this->load->view('auth/register');
    }
    
    public function register_process()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('role', 'Role', 'required|in_list[admin,user]');

        if ($this->form_validation->run() == FALSE) {
            $this->register();
        } else {
            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                'role' => $this->input->post('role') // Save selected role
            );

            $this->User_model->register($data);
            redirect('auth/login');
        }
    }


    public function login()
    {
        $this->load->view('auth/login');
    }



    public function login_process()
    {
        $user = $this->User_model->get_user($this->input->post('email'));

        if ($user && password_verify($this->input->post('password'), $user['password'])) {
            $this->session->set_userdata(['user' => $user]);

            if ($user['role'] == 'admin') {
                redirect('blog/index');
            } else {
                redirect('blog/view_all');
            }
        } else {
            $this->session->set_flashdata('error', 'Invalid Email or Password');
            redirect('auth/login');
        }
    }



    public function logout()
    {
        $this->session->unset_userdata('user');
        redirect('auth/login');
    }
    // Public method to allow all users to view blogs


    public function view_all_users()
    {
        if (!$this->session->userdata('user') || $this->session->userdata('user')['role'] != 'admin') {
            redirect('auth/login');
        }

        $data['users'] = $this->User_model->get_all_User();
        $this->load->view('auth/all_users', $data);
    }

    
    public function deleteUser($id) {
        if (!$this->session->userdata('user') || $this->session->userdata('user')['role'] != 'admin') {
            redirect('auth/login');
        }
        $this->User_model->delete_user($id);
        redirect('auth/view_all_users');
    }


    public function toggleRole($id) {
        
        if (!$this->session->userdata('user') || $this->session->userdata('user')['role'] != 'admin') {
            redirect('auth/login');
        }
    

        $user = $this->User_model->get_user_by_id($id);
        if (!$user) {
            redirect('auth/view_all_users');
        }
    
        $newRole = ($user['role'] == 'admin') ? 'user' : 'admin';
    
        $this->User_model->update_role($id, $newRole);
    
        redirect('auth/view_all_users');
    }
    
}
