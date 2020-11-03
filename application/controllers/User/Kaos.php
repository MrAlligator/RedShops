<?php

class Kaos extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
		// load view admin/overview.php
		$data['title'] = 'Kaos';
        $this->load->view("user/kaos", $data);
	}
}