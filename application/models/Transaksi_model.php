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
        // $this->db->where('status_bayar=0');
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

    public function view_by_date($date)
    {
        $this->db->where('DATE(tgl)', $date); // Tambahkan where tanggal nya

        return $this->db->get('transaksi')->result(); // Tampilkan data transaksi sesuai tanggal yang diinput oleh user pada filter
    }

    public function view_by_month($month, $year)
    {
        $this->db->where('MONTH(tgl)', $month); // Tambahkan where bulan
        $this->db->where('YEAR(tgl)', $year); // Tambahkan where tahun

        return $this->db->get('transaksi')->result(); // Tampilkan data transaksi sesuai bulan dan tahun yang diinput oleh user pada filter
    }

    public function view_by_year($year)
    {
        $this->db->where('YEAR(tgl)', $year); // Tambahkan where tahun

        return $this->db->get('transaksi')->result(); // Tampilkan data transaksi sesuai tahun yang diinput oleh user pada filter
    }

    public function view_all()
    {
        return $this->db->get('transaksi')->result(); // Tampilkan semua data transaksi
    }

    public function option_tahun()
    {
        $this->db->select('YEAR(tgl) AS tahun'); // Ambil Tahun dari field tgl
        $this->db->from('transaksi'); // select ke tabel transaksi
        $this->db->order_by('YEAR(tgl)'); // Urutkan berdasarkan tahun secara Ascending (ASC)
        $this->db->group_by('YEAR(tgl)'); // Group berdasarkan tahun pada field tgl

        return $this->db->get()->result(); // Ambil data pada tabel transaksi sesuai kondisi diatas
    }
}
