<?php

class Jaket extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
		// load view admin/overview.php
		$data['title'] = 'Jaket';
        $this->load->view("user/jaket", $data);
	}
}