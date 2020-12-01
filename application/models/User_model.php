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
    public $role_id;
    public $is_Active;
    public $date_created;

    public function rules()
    {
        return [
            ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required']
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