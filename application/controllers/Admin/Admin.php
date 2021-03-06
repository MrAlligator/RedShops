<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("editalamat_model");
        $this->load->model("transaksi_model");
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
        $data['totaltransaksi'] = $this->transaksi_model->hitung_jumlah_transaksi();
        $data['totalbelumbayar'] = $this->transaksi_model->hitung_jumlah_belumbayar();
        $data['totalsudahbayar'] = $this->transaksi_model->hitung_jumlah_sudahbayar();
        $data['totalkirim'] = $this->transaksi_model->hitung_jumlah_kirim();
        $data['totalselesai'] = $this->transaksi_model->hitung_jumlah_selesai();
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
            if ($product->save() == true) {
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
        $data = array(
            'title' => 'Data Transaksi',
            'pesanan' => $this->transaksi_model->pesanan(),
            'pesanan_diproses' => $this->transaksi_model->pesanan_diproses(),
            'pesanan_dikirim' => $this->transaksi_model->pesanan_dikirim(),
            'pesanan_diterima' => $this->transaksi_model->pesanan_diterima(),
            'isi' => 'lihattransaksi',
        );

        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view("admin/transaksi/lihattransaksi", $data, FALSE);
    }

    public function verifikasi($id_transaksi)
    {
        $data = array(
            'id_transaksi' => $id_transaksi,
            'status_order' => '1'
        );
        $this->transaksi_model->update_order($data);
        $this->session->set_flashdata('message', 'Pesanan Berhasil di Verifikasi !!');
        redirect('admin/admin/transaksi');
    }

    public function kirim($id_transaksi)
    {
        $data = array(
            'id_transaksi' => $id_transaksi,
            'no_resi' => $this->input->post('no_resi'),
            'status_order' => '2'
        );
        $this->transaksi_model->update_order($data);
        $this->session->set_flashdata('message', 'Pesanan Berhasil di Kirim !!');
        redirect('admin/admin/transaksi');
    }

    public function editalamat()
    {
        $this->form_validation->set_rules('nama_toko', 'Nama_toko', 'required', array(
            'required' => '%s Harus Diisi !!'
        ));
        $this->form_validation->set_rules('kabupaten', 'Kabupaten', 'required', array(
            'required' => '%s Harus Diisi !!'
        ));
        $this->form_validation->set_rules('alamat_toko', 'Alamat Toko', 'required', array(
            'required' => '%s Harus Diisi !!'
        ));
        $this->form_validation->set_rules('no_telepon', 'No Telepon', 'required', array(
            'required' => '%s Harus Diisi !!'
        ));

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Alamat Toko',
                'setting' => $this->editalamat_model->data_setting(),
                'isi' => 'editalamat',
            );

            $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            $this->load->view('admin/editalamat', $data, FALSE);
        } else {
            $data = array(
                'id_alamat' => '1',
                'nama_toko' => $this->input->post('nama_toko'),
                'lokasi_toko' => $this->input->post('kabupaten'),
                'alamat_toko' => $this->input->post('alamat_toko'),
                'no_telepon' => $this->input->post('no_telepon'),
            );
            $this->editalamat_model->edit($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diubah!</div>');
            redirect("admin/admin/editalamat");
        }
    }

    public function cetak()
    {
        $data['transaksi'] = $this->transaksi_model->getAll();
        $this->load->view("admin/print/transaksi", $data);
    }

    public function cetak2()
    {
        $data['transaksi'] = $this->transaksi_model->getBelumBayar();
        $this->load->view("admin/print/transaksi", $data);
    }

    public function cetak3()
    {
        $data['transaksi'] = $this->transaksi_model->getSudahBayar();
        $this->load->view("admin/print/transaksi", $data);
    }

    public function cetak4()
    {
        $data['transaksi'] = $this->transaksi_model->getSudahKirim();
        $this->load->view("admin/print/transaksi", $data);
    }
    
    public function cetak5()
    {
        $data['transaksi'] = $this->transaksi_model->getSudahTerima();
        $this->load->view("admin/print/transaksi", $data);
    }
    
}
