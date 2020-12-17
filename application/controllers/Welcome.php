<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		$this->load->model('search_model');
		$this->load->model('product_model');
	}

	public function index()
	{
		$data['produk1'] = $this->product_model->getKemejaPanjangIndex();
		$data['produk2'] = $this->product_model->getKaosPanjangIndex();
		$data['produk4'] = $this->product_model->getJaketIndex();
		$data['produk5'] = $this->product_model->getKemejaPendekIndex();
		$data['produk3'] = $this->product_model->getKaosPendekIndex();
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view("user/overview", $data);
	}

	public function hasil()
	{
		$data['cari'] = $this->search_model->search();
		$data['title'] = "Hasil Pencarian";
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('user/hasilcari',$data);
	}
}
