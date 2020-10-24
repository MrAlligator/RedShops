<?php

class Dashboard extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->view("admin/dashboard", $data);
	}

	public function profil()
	{
		
	}
}