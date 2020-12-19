<?php

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Profile';
        $data['title2'] = 'Tambah Alamat';
        $data['detail'] = $this->user_model->getAll();
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view("user/profile", $data);
    }

    public function editalamat() {
		if($this->form_validation->run() == false) {
			$this->load->view("user/profile", $data);
		} else {
			$current_password = $this->input->post('password_lama');
			$new_password = $this->input->post('password_baru');
			if(!password_verify($current_password, $data['user']['password'])){
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password lama Salah!</div>');
        		redirect('user/profile/editalamat');
			} else {
				if($current_password == $new_password) {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password baru tidak boleh sama dengan Password lama!</div>');
        			redirect('user/profile/editalamat');
				} else {
					$password_hash = password_hash($new_password, PASSWORD_DEFAULT);

					$this->db->set('password', $password_hash);
					$this->db->where('username', $this->session->userdata('username'));
					$this->db->update('user');

					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password berhasil diganti!</div>');
        			redirect('user/profile/editalamat');
				}
			}
		}
    }
}
