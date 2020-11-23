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

    // public function edit($id = null)
    // {
    //     if (!isset($id)) redirect('admin/user/lihatuser');
    //     $user = $this->user_model;
    //     $validation = $this->form_validation;
    //     $validation->set_rules($user->rules());

    //     if ($validation->run()) {
    //         $user->update();
    //         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diperbarui</div>');
    //     } else {
    //         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data gagal diperbarui</div>');
    //     }

    //     $data["admin"] = $user->getById($id);
    //     if (!$data["admin"]) show_404();
        
    //     $data['title'] = 'Edit User';
	// 	$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
    //     $this->load->view("admin/user/edituser", $data);
    // }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->user_model->delete($id)) {
            redirect(site_url('admin/user'));
        }
    }
}