<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("editalamat_model");
        $this->load->model("product_model");
        $this->load->model("dropdown_model");
        $this->load->model('user_model');
        $this->load->library('form_validation');
        is_logged_in();
    }

    public function index()
    {
        $data['totalproduk'] = $this->product_model->hitung_jumlah_produk();
        $data['totaluser'] = $this->user_model->hitung_jumlah_user();
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view("admin/dashboard", $data);
    }

    public function produk()
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

        $data['title'] = 'Tambah Produk';
        $data["menu"] = $this->dropdown_model->get_jenis();
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        if ($validation->run() == false) {
            $this->load->view("admin/produk/tambahproduk", $data);
        } else {
            if($product->save() == true) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan</div>');
                redirect("admin/admin/add");
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data gagal ditambahkan</div>');
                redirect("admin/admin/add");
            }
        }
    }

    public function edit($id = null)
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

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->product_model->delete($id)) {
            redirect(site_url('admin/admin/produk'));
        }
    }

    public function transaksi()
    {
        $data['title'] = 'Data Transaksi';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view("admin/transaksi/lihattransaksi", $data);
    }

    public function editalamat()
    {
        // $data['title'] = 'Alamat Toko';
        // $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data = array(
            'title' => 'Alamat Toko',
            'alamat_toko' => $this->editalamat_model->setting(),
            'isi' => 'editalamat',
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array()
        );
        $this->load->view('admin/editalamat', $data);
    }
}
