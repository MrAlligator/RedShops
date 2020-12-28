<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile_model extends CI_Model
{
    public function alamat_user()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id_user', 1);
        return $this->db->get()->row();
    }

    public function edit($data)
    {
        $this->db->where('id_user', $data['id_user']);
        $this->db->update('user', $data);
    }
}
