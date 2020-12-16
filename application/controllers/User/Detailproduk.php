<?php

class Detailproduk extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
        $this->load->model("editalamat_model");
        $this->load->model("product_model");
        $this->load->model("dropdown_model");
        $this->load->model('user_model');
        $this->load->library('form_validation');
        // is_logged_in();
	}

	public function index()
	{
		// load view admin/overview.php
		$data['title'] = 'Detail Produk';
		$data['produk'] = $this->product_model->getKemejaPendek();
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view("user/detailproduk");
	}

	public function lihat($id = null)
    {
        if (!isset($id)) redirect('admin/admin/produk');
        $product = $this->product_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        $data['title'] = 'Edit Produk';
        $data["menu"] = $this->dropdown_model->get_jenis();
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data["produk"] = $product->getById($id);
        if (!$data["produk"]) show_404();
        
        if ($validation->run() == false) {
            $this->load->view("admin/produk/editproduk", $data);
        } else {
            if ($product->update() == true) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diubah</div>');
                redirect("admin/admin/edit");
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data gagal diubah</div>');
                redirect("admin/admin/edit");
            }
        }
    }
}