<?php

class Celanapanjang extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model("product_model");
	}

	public function index()
	{
		// load view admin/overview.php
		$data['title'] = 'Celana Panjang';
		$data['produk'] = $this->product_model->getCelanaPanjang();
        $this->load->view("user/celanapanjang", $data);
	}
}