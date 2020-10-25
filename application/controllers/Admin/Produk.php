<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("product_model");
        $this->load->library('form_validation');
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Produk';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data["produk"] = $this->product_model->getAll();
        $this->load->view("admin/produk/lihatproduk", $data);
    }

    public function add()
    {
        $product = $this->product_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data['title'] = 'Tambah Produk';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view("admin/produk/tambahproduk", $data);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/produk');
        $product = $this->product_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["produk"] = $product->getById($id);
        if (!$data["produk"]) show_404();
        
        $data['title'] = 'Edit Produk';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view("admin/produk/editproduk", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->product_model->delete($id)) {
            redirect(site_url('admin/produk'));
        }
    }
}