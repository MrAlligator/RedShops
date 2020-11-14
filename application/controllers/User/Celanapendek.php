<?php

class Celanapendek extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model("product_model");
	}

	public function index()
	{
		// load view admin/overview.php
		$data['title'] = 'Celana Pendek';
		$data['produk'] = $this->product_model->getCelanaPendek();
        $this->load->view("user/celanapendek", $data);
	}
}