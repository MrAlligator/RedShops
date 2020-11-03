<?php

class Kemeja extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model("product_model");
	}

	public function index()
	{
		// load view admin/overview.php
		$data['title'] = 'Kemeja';
        $this->load->view("user/kemeja", $data);
	}
}