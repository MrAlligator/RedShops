<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Editalamat_model extends CI_Model
{
    public function data_setting()
    {
        $this->db->select('*');
        $this->db->from('setting_toko');
        $this->db->where('id_alamat', 1);
        return $this->db->get()->row();
    }

    public function edit($data)
    {
        $this->db->where('id_alamat', $data['id_alamat']);
        $this->db->update('setting_toko', $data);
    }
}
