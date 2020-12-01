<?php  

/**
* 
*/
class login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("User_model");
	}

	function index(){
		if (!empty($this->session->userdata("E-mail")))
			redirect(base_url("Beranda"));

		$this->load->view("login");
	}

	function login_proses(){
		$email=$this->input->post("email");
		$password=md5($this->input->post("password"));

		$user = $this->db->get_where('user', ['email' => $email])->row_array();

		if ($user) {
			if ($user['is_active'] == 1) {
				if ($password == $user['password']) {
					$data = [
						'email' => $user['email']
					];
					$this->session->set_userdata($data);
					redirect('User/Overview');
					} 
				} 
			} 
		}

		public function logout()
  {
    $this->session->unset_userdata('email');
    // $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="fas fa-check">  </i>Anda berhasil logout!</div>');
    redirect('User/Overview');
  }
		// $user=$this->m_user->login($username,$password);
		
		// if ($user) {
		// 	$this->session->set_userdata((array)$user);
		// 	redirect(site_url("Beranda"));
		// }else{
		// 	redirect($this->index());
		// }
    }
    ?>