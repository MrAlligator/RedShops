<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi_model extends CI_Model
{
    private $_table = "transaksi";
    
    public function simpan_transaksi($data)
    {
        $this->db->insert('transaksi', $data);
    }

    public function simpan_detail_transaksi($data_detail)
    {
        $this->db->insert('detail_transaksi', $data_detail);
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function belum_bayar()
    {
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->where('status_bayar=0');
        $this->db->where('id_user', $this->session->userdata('id_user'));
        $this->db->order_by('id_transaksi', 'desc');
        return $this->db->get()->result();
    }
}
