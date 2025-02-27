<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Blog_model');
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
    }

    // Public method to allow all users to view blogs
    public function view_all()
    {
        $data['blogs'] = $this->Blog_model->get_all_blogs();
        $this->load->view('blog/view_all', $data);
    }
    

    // Admin-only blog management
    public function index()
    {
        if (!$this->session->userdata('user') || $this->session->userdata('user')['role'] != 'admin') {
            redirect('auth/login');
        }
        $data['blogs'] = $this->Blog_model->get_all_blogs();
        $this->load->view('blog/index', $data);
    }
                 
    public function blog_details($id) {
        $data['blog'] = $this->Blog_model->get_blog_by_id($id);

        if (!$data['blog']) {
            show_404();
        }

        // Load the blog details view
        $this->load->view('blog/blog_details', $data);
    }

    


    public function create()
    {
        if (!$this->session->userdata('user') || $this->session->userdata('user')['role'] != 'admin') {
            redirect('auth/login');
        }
        $this->load->view('blog/create');
    }

    public function store()
    {
        if (!$this->session->userdata('user') || $this->session->userdata('user')['role'] != 'admin') {
            redirect('auth/login');
        }

        $this->load->library('upload');

        $config['upload_path']   = FCPATH . 'uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size']      = 2048;

        if (!is_dir($config['upload_path'])) {
            mkdir($config['upload_path'], 0777, true);
        }

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('image')) {
            $this->session->set_flashdata('error', $this->upload->display_errors());
            redirect('blog/create');
        } else {
            $upload_data = $this->upload->data();
            $image_path = 'uploads/' . $upload_data['file_name'];

            $data = array(
                'title'       => $this->input->post('title'),
                'author'      => $this->session->userdata('user')['name'],
                'description' => $this->input->post('description'),
                'price'       => $this->input->post('price'),
                'image'       => $image_path
            );

            $this->Blog_model->create_blog($data);
            redirect('blog/index');
        }
    }

    public function edit($id)
    {
        // Check if user is logged in and is an admin
        if (!$this->session->userdata('user') || $this->session->userdata('user')['role'] != 'admin') {
            redirect('auth/login');
        }

        // Fetch blog post data
        $data['blog'] = $this->Blog_model->get_blog_by_id($id);

        // If no blog post is found, show an error
        if (!$data['blog']) {
            show_error('Blog post not found', 404);
            return;
        }

        // Load the edit view
        $this->load->view('blog/edit', $data);
    }

    public function update($id)
    {
        // Check if user is logged in and is an admin
        if (!$this->session->userdata('user') || $this->session->userdata('user')['role'] != 'admin') {
            redirect('auth/login');
        }

        // Load upload library
        $this->load->library('upload');

        // Configure upload settings
        $config['upload_path']   = FCPATH . 'uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size']      = 2048;

        // Ensure upload directory exists
        if (!is_dir($config['upload_path'])) {
            mkdir($config['upload_path'], 0777, true);
        }

        $this->upload->initialize($config);

        // Handle file upload
        if ($this->upload->do_upload('image')) {
            $upload_data = $this->upload->data();
            $image_path = 'uploads/' . $upload_data['file_name'];
        } else {
            $image_path = $this->input->post('old_image'); // Keep old image if no new image is uploaded
        }

        // Validate form inputs before updating
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            // Reload the edit view with errors
            $data['blog'] = $this->Blog_model->get_blog_by_id($id);
            $this->load->view('blog/edit', $data);
        } else {
            // Update blog post
            $data = array(
                'title'       => $this->input->post('title'),
                'description' => $this->input->post('description'),
                'price'       => $this->input->post('price'),
                'image'       => $image_path
            );

            // Update the blog post in the database
            $this->Blog_model->update_blog($id, $data);

            // Redirect to the blog list page
            redirect('blog/index');
        }
    }

    public function delete($id)
    {
        if (!$this->session->userdata('user') || $this->session->userdata('user')['role'] != 'admin') {
            redirect('auth/login');
        }
        $this->Blog_model->delete_blog($id);
        redirect('blog/index');
    }
}
