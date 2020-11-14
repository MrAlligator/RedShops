<?php

class Kemejapendek extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model("product_model");
	}

	public function index()
	{
		// load view admin/overview.php
		$data['title'] = 'Kemeja Lengan Pendek';
		$data['produk'] = $this->product_model->getKemejaPendek();
        $this->load->view("user/kemejapendek", $data);
	}
}