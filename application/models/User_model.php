<?php defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model
{
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
}