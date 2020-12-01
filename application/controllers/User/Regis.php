<?php  

/**
* 
*/
class Regis extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("User_model");
	}

	function index(){
		// if (!empty($this->session->userdata("E-mail")))
			// redirect(base_url("Beranda"));
		$this->load->view('user/_partials/regis');
	}

	function regis_proses(){
        $name=$this->input->post("name");
        $email=$this->input->post("email");
        $username=$this->input->post("username");
		$password=md5($this->input->post("password"));
        // $user=$this->m_user->regis($username,$password);
        
        $data = [
            'name' => $name,
            'email' => $email,
            'username' => $username,
            'password' => $password,
            'role_id' => 3,
            'date_created' => time()
        ];

        $simpan = $this->User_model->insert($data);

        redirect('User/Overview');
		// if ($user) {
		// 	$this->session->set_userdata((array)$user);
		// 	redirect(site_url("Beranda"));
		// }else{
		// 	redirect($this->index());
		// }
	}
}

?>