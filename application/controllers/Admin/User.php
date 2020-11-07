<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
        $this->load->model("dropdown_model");
        $this->load->library('form_validation');
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'User';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['pengguna'] = $this->user_model->getAll();
        $this->load->view("admin/user/lihatuser", $data);
    }
}