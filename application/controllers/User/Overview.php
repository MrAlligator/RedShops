<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model('search_model');
		$this->load->model('product_model');
	}

	public function index()
	{
		$data['produk'] = $this->product_model->getKemejaPanjang();
        $this->load->view("user/overview", $data);
	}

	public function hasil()
	{
		$data['cari'] = $this->search_model->search();
		$data['title'] = "Hasil Pencarian";
		$this->load->view('user/hasilcari',$data);
	}


}