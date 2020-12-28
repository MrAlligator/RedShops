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

    public function getBelumBayar()
    {
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->where('status_bayar=0');
        return $this->db->get()->result();
    }

    public function getSudahBayar()
    {
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->where('status_bayar=1');
        return $this->db->get()->result();
    }

    /**
     * Status order
     * 0 = Order
     * 1 = Di Proses
     * 2 = Di Kirim
     * 3 = Selesai
     */

    public function belum_bayar()
    {
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->where('status_bayar=0');
        $this->db->where('id_user', $this->session->userdata('id_user'));
        $this->db->order_by('id_transaksi', 'desc');
        return $this->db->get()->result();
    }

    public function diproses()
    {
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->where('status_bayar=1');
        $this->db->where('id_user', $this->session->userdata('id_user'));
        $this->db->order_by('id_transaksi', 'desc');
        return $this->db->get()->result();
    }

    public function detail_pesanan($id_transaksi)
    {
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->where('id_transaksi', $id_transaksi);
        return $this->db->get()->row();
    }

    public function rekening()
    {
        $this->db->select('*');
        $this->db->from('rekening');
        return $this->db->get()->result();
    }

    public function pesanan()
    {
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->where('status_bayar=0');
        $this->db->order_by('id_transaksi', 'desc');
        return $this->db->get()->result();
    }

    public function pesanan_diproses()
    {
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->where('status_bayar=1');
        $this->db->order_by('id_transaksi', 'desc');
        return $this->db->get()->result();
    }

    public function update_order($data)
    {
        $this->db->where('id_transaksi', $data['id_transaksi']);
        $this->db->update('transaksi', $data);
    }

    public function upload_buktibayar($data)
    {
        $this->db->where('id_transaksi', $data['id_transaksi']);
        $this->db->update('transaksi', $data);
    }

    public function hitung_jumlah_transaksi()
    {
        $query = $this->db->get('transaksi');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function hitung_jumlah_belumbayar()
    {
        $query = $this->db->query('SELECT * FROM transaksi WHERE status_bayar=0');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function hitung_jumlah_sudahbayar()
    {
        $query = $this->db->query('SELECT * FROM transaksi WHERE status_bayar=1');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
}
