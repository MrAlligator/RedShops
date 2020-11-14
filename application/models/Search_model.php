<?php
class Search_model extends CI_Model {
    public function __construct() 
    {
        $this->load->database();
    }

    public function search()
    {
        $cari = $this->input->GET('search', TRUE);
        $data = $this->db->query("SELECT * FROM produk WHERE nama_produk like '%$cari%' OR jenis_produk like'%$cari%' ");
        return $data->result();
    }
}