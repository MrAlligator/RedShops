<?php

class Kaospendek extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model("product_model");
	}

	public function index()
	{
		// load view admin/overview.php
		$data['title'] = 'Kaos Lengan Pendek';
		$data['produk'] = $this->product_model->getKaosPendek();
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view("user/kaospendek", $data);
	}
}