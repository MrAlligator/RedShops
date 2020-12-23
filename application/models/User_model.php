<?php defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model
{
    private $_table = "user";

    public $id_user;
    public $name;
    public $email;
    public $username;
    public $image = "default.jpg";
    public $password;
    public $alamat;
    public $alamat2;
    public $alamat3;
    public $role_id;
    public $is_active;
    public $date_created;

    public function rules()
    {
        return [
            ['field' => 'name',
            'label' => 'Nama',
            'rules' => 'required|trim'],

            ['field' => 'email',
            'label' => 'Email',
            'rules' => 'required|trim|valid_email|is_unique[user.email]',
            'is_unique' => 'Email telah terdaftar'],

            ['field' => 'username',
            'label' => 'Username',
            'rules' => 'required|trim|is_unique[user.username]',
            'is_unique' => 'Username telah terdaftar']
        ];
    }

    public function hitung_jumlah_user()
    {
        $query=$this->db->get('user');
        if ($query->num_rows()>0) {
            return $query->num_rows();
        }
        else {
            return 0;
        }
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_user" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->name = $post["name"];
        $this->email = $post["email"];
        $this->username = $post["username"];
        $this->image = 'default.jpg';
        $this->password = password_hash("admin123", PASSWORD_DEFAULT);
        $this->alamat = 'Belum diatur';
        $this->kab = 'Belum diatur';
        $this->prov = 'Belum diatur';
        $this->telp = 'Belum diatur';
        $this->role_id = $post["role"];
        $this->is_active = 1;
        $this->date_created = time();
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_user = $post["id"];
        $this->password = $post["nama"];
        return $this->db->update($this->_table, $this, array('id_user' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_user" => $id));
    }

    public function insert($data)
    {
        return $this->db->insert('user', $data);
    }
}
?>