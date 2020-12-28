<?php

class Profile extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("product_model");
		$this->load->model('user_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = 'Profil';
		$data['title2'] = 'Tambah Alamat';
		$data['detail'] = $this->user_model->getAll();
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->view("user/profile", $data);
	}

	// public function editalamat()
	// {
	//     $this->form_validation->set_rules('kabupaten', 'Kabupaten', 'required', array(
	//         'required' => '%s Harus Diisi !!'
	//     ));
	//     $this->form_validation->set_rules('alamat_toko', 'Alamat Toko', 'required', array(
	//         'required' => '%s Harus Diisi !!'
	//     ));
	//     $this->form_validation->set_rules('no_telepon', 'No Telepon', 'required', array(
	//         'required' => '%s Harus Diisi !!'
	//     ));

	//     if ($this->form_validation->run() == FALSE) {
	//         $data = array(
	//             'title' => 'Alamat Toko',
	//             'setting' => $this->editalamat_model->data_setting(),
	//             'isi' => 'editalamat',
	//         );

	//         $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
	//         $this->load->view('admin/editalamat', $data, FALSE);
	//     } else {
	//         $data = array(
	//             'id_alamat' => '1',
	//             'nama_toko' => $this->input->post('nama_toko'),
	//             'lokasi_toko' => $this->input->post('kabupaten'),
	//             'alamat_toko' => $this->input->post('alamat_toko'),
	//             'no_telepon' => $this->input->post('no_telepon'),
	//         );
	//         $this->editalamat_model->edit($data);
	//         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diubah!</div>');
	//         redirect("admin/admin/editalamat");
	//     }
	// }

	public function editprofil()
	{
		$data['title'] = 'Profil';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

		$this->form_validation->set_rules('name', 'Fullname', 'required|trim');
		$this->form_validation->set_rules('username', 'Username', 'required|trim|min_length[8]|max_length[10]');

		if ($this->form_validation->run() == false) {
			$this->load->view("user/profile", $data);
		} else {
			$name = $this->input->post('name');
			$username = $this->input->post('username');

			$upload_image = $_FILES['image']['name'];

			if ($upload_image) {
				$config['allowed_types'] = 'jpg|png';
				$config['max_size']		 = '2048';
				$config['upload_path']	 = './assetsadmin/img/profile/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('image')) {
					$old_image = $data['user']['image'];
					if ($old_image != 'default.jpg') {
						unlink(FCPATH . 'assetsadmin/img/profile/' . $old_image);
					}
					$new_image = $this->upload->data('file_name');
					$this->db->set('image', $new_image);
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
					redirect('user/profile');
				}
			}

			$this->db->set('name', $name);
			$this->db->where('username', $username);
			$this->db->update('user');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
			redirect('user/profile');
		}
	}

	public function editpass()
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

		$this->form_validation->set_rules('password_lama', 'Password Lama', 'required|trim');
		$this->form_validation->set_rules('password_baru', 'Password Baru', 'required|trim|min_length[8]|matches[konfirm_pass]', [
			'matches' => 'Password tidak Sama!',
			'min_length' => 'Password tidak boleh kurang dari 8 karakter!'
		]);
		$this->form_validation->set_rules('konfirm_pass', 'Konfirmasi Password Baru', 'required|trim|min_length[8]|matches[password_baru]', [
			'matches' => 'Password tidak Sama!',
			'min_length' => 'Password tidak boleh kurang dari 8 karakter!'
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view("user/profile", $data);
		} else {
			$current_password = $this->input->post('password_lama');
			$new_password = $this->input->post('password_baru');
			if (!password_verify($current_password, $data['user']['password'])) {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password lama Salah!</div>');
				redirect('user/profile');
			} else {
				if ($current_password == $new_password) {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password baru tidak boleh sama dengan Password lama!</div>');
					redirect('user/profile');
				} else {
					$password_hash = password_hash($new_password, PASSWORD_DEFAULT);

					$this->db->set('password', $password_hash);
					$this->db->where('username', $this->session->userdata('username'));
					$this->db->update('user');

					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password berhasil diganti!</div>');
					redirect('user/profile');
				}
			}
		}
	}
}
