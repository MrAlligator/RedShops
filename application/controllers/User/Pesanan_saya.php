<?php

class Pesanan_saya extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("transaksi_model");
        $this->load->library('form_validation');
    }


    public function index()
    {
        $data = array(
            'title' => 'Pesanan Saya',
            'isi' => 'pesanan_saya',
            'belum_bayar' => $this->transaksi_model->belum_bayar(),
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array()
        );
        $this->load->view('user/myorder', $data, FALSE);
    }
}
