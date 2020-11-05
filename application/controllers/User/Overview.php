<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model('search_model');
	}

	public function index()
	{
        // load view admin/overview.php
        $this->load->view("user/overview");
	}

	public function hasil()
	{
		$data['cari'] = $this->search_model->search();
		$data['title'] = "Hasil Pencarian";
		$this->load->view('user/hasilcari',$data);
	}
}