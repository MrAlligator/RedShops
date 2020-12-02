<?php

class Jaket extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model("product_model");
	}

	public function index()
	{
		// load view admin/overview.php
		$data['title'] = 'Jaket';
		$data['produk'] = $this->product_model->getJaket();
        $this->load->view("user/jaket", $data);
	}
}