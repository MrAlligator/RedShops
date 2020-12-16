<?php

class Kaospanjang extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model("product_model");
	}

	public function index()
	{
		// load view admin/overview.php
		$data['title'] = 'Kaos Lengan Panjang';
		$data['produk'] = $this->product_model->getKaosPanjang();
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view("user/kaospanjang", $data);
	}
}