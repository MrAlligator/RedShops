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
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]|matches[konfirm]', [
            'matches' => 'Password tidak Sama!',
            'min_length' => 'Password tidak boleh kurang dari 8 karakter!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|matches[password]');
        if($this->form_validation->run() == false){
            $this->load->view("admin/register", $data);
        } else {
            $email = $this->input->post('email',true);
            $data = [
                'name' => htmlspecialchars($this->input->post('nama',true)),
                'email' => htmlspecialchars($email),
                'username' => htmlspecialchars($this->input->post('username',true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 0,
                'date_created' => time()
            ];

            $token = base64_encode(random_bytes(32));
            $user_token = [
                'email' => $email,
                'token' => $token,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->db->insert('user_token', $user_token);

            $this->_sendEmail($token, 'verify');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Akun berhasil dibuat. Silahkan cek email untuk verifikasi</div>');
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

            if($email) {
                $token = base64_encode(random_bytes(32));
                $user_token = [
                    'email' => $email,
                    'token' => $token,
                    'date_created' => time()
                ];

                $this->db->insert('user_token', $user_token);
                $this->_sendEmail($token, 'forgot');

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Silahkan cek email untuk reset password</div>');
                redirect('admin/auth');

            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum terdaftar atau Belum aktif</div>');
                redirect('admin/auth/forgot');
            }
        }
    }

    private function _sendEmail($token, $type)
    {
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'redshop0990@gmail.com',
            'smtp_pass' => 'Qweewq123',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        ];

        $this->load->library('email', $config);
        $this->email->initialize($config);

        $this->email->from('redshop0990@gmail.com', 'Admin Redshop Jember');
        $this->email->to($this->input->post('email'));
        if($type == 'verify') {
            $this->email->subject('Verifikasi Akun');
            $this->email->message('
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Hai user baru, silahkan Klik untuk verifikasi akunmu!</h1>
                            </div>
                            <div class="text-center">
                                <a class="btn btn-primary" href="' . base_url() . 'index.php/admin/auth/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Verifikasi?</a>
                            </div>
                        </div>
                    </div>
                </div>
        ');
        } else if ($type == 'forgot') {
            $this->email->subject('Reset Password');
            $this->email->message('
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Hai, silahkan Klik untuk reset passwordmu!</h1>
                            </div>
                            <div class="text-center">
                                <a class="btn btn-primary" href="' . base_url() . 'index.php/admin/auth/resetpass?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Reset Password</a>
                            </div>
                        </div>
                    </div>
                </div>
        ');
        }

        if($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
        }
    }

    public function verify()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();
            if($user_token) {
                if(time() - $user_token['date_created'] < (60*60*24)) {
                    $this->db->set('is_active', 1);
                    $this->db->where('email', $email);
                    $this->db->update('user');

                    $this->db->delete('user_token', ['email' => $email]);

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">'. $email . ' telah diaktivasi, silahkan login.</div>');
                    redirect('admin/auth');
                } else {
                    $this->db->delete('user', ['email' => $email]);
                    $this->db->delete('user_token', ['email' => $email]);
                    
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Aktivasi gagal, Token kadaluarsa</div>');
                    redirect('admin/auth/forgot');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Aktivasi gagal, Token invalid</div>');
                redirect('admin/auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Aktivasi gagal, Email Salah!</div>');
            redirect('admin/auth');
        }
    }

    public function resetpass ()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();
            if($user_token) {
                $this->session->set_userdata('reset_email', $email);
                $this->changePassword();
                // if(time() - $user_token['date_created'] < (60*60*24)) {
                //     $this->db->set('is_active', 1);
                //     $this->db->where('email', $email);
                //     $this->db->update('user');

                //     $this->db->delete('user_token', ['email' => $email]);

                //     $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">'. $email . ' telah diaktivasi, silahkan login.</div>');
                //     redirect('admin/auth');
                // } else {
                //     $this->db->delete('user', ['email' => $email]);
                //     $this->db->delete('user_token', ['email' => $email]);
                    
                //     $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Reset password gagal, Token kadaluarsa</div>');
                //     redirect('admin/auth/forgot');
                // }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Reset password gagal, Token invalid</div>');
                redirect('admin/auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Reset password gagal, Email Salah!</div>');
            redirect('admin/auth');
        }
    }

    public function changePassword()
    {
        $data['title'] = 'Reset Password';
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]|matches[konfirm]', [
            'matches' => 'Password tidak Sama!',
            'min_length' => 'Password tidak boleh kurang dari 8 karakter!'
        ]);
        $this->form_validation->set_rules('konfirm', 'konfirm', 'required|trim|min_length[8]|matches[password]', [
            'matches' => 'Password tidak Sama!',
            'min_length' => 'Password tidak boleh kurang dari 8 karakter!'
        ]);

        if($this->form_validation->run() == false) {
            $this->load->view("admin/resetpass", $data);
        } else {
            $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            $email = $this->session->userdata('reset_email');

            $this->db->set('password', $password);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->unset_userdata('reset_email');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Silahkan Login</div>');
            redirect('admin/auth');
        }
    }
}