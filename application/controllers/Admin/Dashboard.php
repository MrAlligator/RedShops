<?php

class Dashboard extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		is_logged_in();
	}

	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->view("admin/dashboard", $data);
	}

	public function profil()
	{
		$data['title'] = 'Profil Saya';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->view("admin/profil", $data);
	}

	public function editprofil()
	{
		$data['title'] = 'Edit Profil';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->view("admin/editprofil", $data);
	}

}