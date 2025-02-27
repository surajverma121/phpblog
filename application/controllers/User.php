<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {
    public function dashboard() {
        $this->load->view('user/dashboard');
        $this->load->view('blog/index');


    }
}