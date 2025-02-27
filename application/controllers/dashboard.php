<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('user')) {
            redirect('auth/login');
        }
    }

    public function user() {
        $this->load->view('dashboard/user');
    }

    public function admin() {
        if ($this->session->userdata('user')['role'] !== 'admin') {
            redirect('dashboard/user');
        }
        $this->load->view('dashboard/admin');
    }
}
?>
