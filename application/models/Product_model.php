<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model
{
    private $_table = "produk";

    public $id_produk;
    public $nama_produk;
    public $jenis_produk;
    public $harga_produk;
    public $foto_produk = "default.jpg";
    public $deskripsi;

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'jenis',
            'label' => 'Jenis',
            'rules' => 'required'],

            ['field' => 'harga',
            'label' => 'Harga',
            'rules' => 'numeric', 'required'],
            
            ['field' => 'deskripsi',
            'label' => 'Deskripsi',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_produk" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_produk = uniqid();
        $this->nama_produk = $post["nama"];
        $this->jenis_produk = $post["jenis"];
        $this->harga_produk = $post["harga"];
        $this->deskripsi = $post["deskripsi"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_produk = $post["id"];
        $this->nama_produk = $post["nama"];
        $this->jenis_produk = $post["jenis"];
        $this->harga_produk = $post["harga"];
        $this->deskripsi = $post["deskripsi"];
        return $this->db->update($this->_table, $this, array('id_produk' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_produk" => $id));
    }

    public function hitung_jumlah_produk()
    {
        $query=$this->db->get('produk');
        if ($query->num_rows()>0) {
            return $query->num_rows();
        }
        else {
            return 0;
        }
    }
}