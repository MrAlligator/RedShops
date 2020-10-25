<?php

class Auth extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
	}

	public function index()
	{
        if($this->session->userdata('username')) {
            redirect('admin/dashboard');
        }

        $data['title'] = 'Login';
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if($this->form_validation->run() == false) {
            $this->load->view("admin/login", $data);
        } else {
            //validasi lolos
            $this->_login();
        }
    }

    private function _login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();
        //jika user ada
        if($user) {
            //user aktif
            if($user['is_active'] == 1) {
                //cek pass
                if(password_verify($password, $user['password'])){
                    $data = [
                        'username' => $user['username'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    redirect('admin/dashboard');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
                    redirect('admin/auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun Belum Diaktifkan</div>');
                redirect('admin/auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun Belum Terdaftar</div>');
            redirect('admin/auth');
        }
    }
    
    public function regis()
	{
        if($this->session->userdata('username')) {
            redirect('admin/dashboard');
        }
        $data['title'] = 'Registrasi';
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]', [
            'is_unique' => 'Username Telah Terdaftar'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email Telah Terdaftar'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]|max_length[8]|matches[konfirm]', [
            'matches' => 'Password tidak Sama!',
            'min_length' => 'Password tidak boleh kurang dari 8 karakter!',
            'max_length' => 'Password tidak boleh lebih dari 8 karakter!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|matches[password]');
        if($this->form_validation->run() == false){
            $this->load->view("admin/register", $data);
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('nama',true)),
                'email' => htmlspecialchars($this->input->post('email',true)),
                'username' => htmlspecialchars($this->input->post('username',true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Akun berhasil dibuat. Silahkan Login</div>');
            redirect('admin/auth');

        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda Sudah Logout</div>');
        redirect('admin/auth');
    }

    public function forgot()
    {
        $data['title'] = 'Lupa Password';
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');

        if($this->form_validation->run() == false) {
            $this->load->view("admin/lupapass", $data);
        } else {
            //validasi lolos
            $email = $this->input->post('email');
            $this->db->get_where('user', ['email' => $email, 'is_active' => 1])->row_array();

            if($user) {
                $token = base64_encode(random_bytes(32));
                $user_token = [
                    'email' => $email,
                    'token' => $token,
                    'date_created' => time()
                ];

                $this->db->insert('user_token', $user_token);
                $this->_sendEmail($token, 'forgot');

            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum terdaftar atau Belum aktif</div>');
                redirect('admin/auth/forgot');
            }
        }
    }
}