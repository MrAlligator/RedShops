<?php defined('BASEPATH') OR exit('No direct script access allowed');

class jumlah_pesanan_model extends CI_Model
{
    public function hitung_jumlah_pesanan()
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