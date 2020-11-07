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
}