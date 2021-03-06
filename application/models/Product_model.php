<?php defined('BASEPATH') or exit('No direct script access allowed');

class Product_model extends CI_Model
{
    private $_table = "produk";

    public $id_produk;
    public $nama_produk;
    public $jenis_produk;
    public $harga_produk;
    public $jumlahstok;
    public $berat;
    public $foto_produk = "default.jpg";
    public $foto_produk2 = "default.jpg";
    public $foto_produk3 = "default.jpg";
    public $deskripsi;
    public $deskripsi2;
    public $deskripsi3;

    public function rules()
    {
        return [
            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'required'
            ],

            [
                'field' => 'jenis',
                'label' => 'Jenis',
                'rules' => 'required'
            ],

            [
                'field' => 'harga',
                'label' => 'Harga',
                'rules' => 'numeric', 'required'
            ],

            [
                'field' => 'jumlahstok',
                'label' => 'Jumlah Stok',
                'rules' => 'numeric', 'required'
            ],

            [
                'field' => 'berat',
                'label' => 'Berat',
                'rules' => 'numeric', 'required'
            ],

            [
                'field' => 'foto',
                'label' => 'Foto',
                'rules' => 'uploaded'
            ],

            [
                'field' => 'gambar',
                'label' => 'Foto',
                'rules' => 'uploaded'
            ],

            [
                'field' => 'gmbr',
                'label' => 'Foto',
                'rules' => 'uploaded'
            ],

            [
                'field' => 'deskripsi',
                'label' => 'Deskripsi',
                'rules' => 'required'
            ]
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

    public function getKemejaPendekIndex()
    {
        $data = $this->db->query("SELECT * FROM produk WHERE jenis_produk='Kemeja Lengan Pendek' LIMIT 0,4 ");
        return $data->result();
    }

    public function getStok($id)
    {
        $data = $this->db->query("SELECT jumlahstok FROM produk WHERE id_produk=$id_produk ");
        return $data->result();
    }

    public function getKemejaPendek()
    {
        $data = $this->db->query("SELECT * FROM produk WHERE jenis_produk='Kemeja Lengan Pendek' ");
        return $data->result();
    }

    public function getKemejaPanjangIndex()
    {
        $data = $this->db->query("SELECT * FROM produk WHERE jenis_produk='Kemeja Lengan Panjang' LIMIT 0,4 ");
        return $data->result();
    }

    public function getKemejaPanjang()
    {
        $data = $this->db->query("SELECT * FROM produk WHERE jenis_produk='Kemeja Lengan Panjang' ");
        return $data->result();
    }

    public function getKaosPendekIndex()
    {
        $data = $this->db->query("SELECT * FROM produk WHERE jenis_produk='Kaos Lengan Pendek' LIMIT 0,4 ");
        return $data->result();
    }

    public function getKaosPendek()
    {
        $data = $this->db->query("SELECT * FROM produk WHERE jenis_produk='Kaos Lengan Pendek' ");
        return $data->result();
    }

    public function getKaosPanjangIndex()
    {
        $data = $this->db->query("SELECT * FROM produk WHERE jenis_produk='Kaos Lengan Panjang' LIMIT 0,4 ");
        return $data->result();
    }

    public function getjaketIndex()
    {
        $data = $this->db->query("SELECT * FROM produk WHERE jenis_produk='jaket' LIMIT 0,4 ");
        return $data->result();
    }

    public function getjaket()
    {
        $data = $this->db->query("SELECT * FROM produk WHERE jenis_produk='jaket' ");
        return $data->result();
    }

    public function getKaosPanjang()
    {
        $data = $this->db->query("SELECT * FROM produk WHERE jenis_produk='Kaos Lengan Panjang' ");
        return $data->result();
    }

    public function getCelanaPendek()
    {
        return $this->db->get_where($this->_table, ["jenis_produk" => "Celana Pendek"])->result();
    }

    public function getCelanaPanjang()
    {
        return $this->db->get_where($this->_table, ["jenis_produk" => "Celana Panjang"])->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_produk = uniqid();
        $this->nama_produk = $post["nama"];
        $this->jenis_produk = $post["jenis"];
        $this->harga_produk = $post["harga"];
        $this->jumlahstok = $post["jumlahstok"];
        $this->berat = $post["berat"];
        $this->foto_produk = $this->_uploadImage();
        $this->foto_produk2 = $this->_uploadImg();
        $this->foto_produk3 = $this->_uploadGbr();
        $this->deskripsi = $post["deskripsi"];
        $this->deskripsi2 = $post["deskripsi2"];
        $this->deskripsi3 = $post["deskripsi3"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_produk = $post["id"];
        $this->nama_produk = $post["nama"];
        $this->jenis_produk = $post["jenis"];
        $this->harga_produk = $post["harga"];
        $this->jumlahstok = $post["jumlahstok"];
        $this->berat = $post["berat"];
        if (!empty($_FILES["foto"]["name"])) {
            $this->foto_produk = $this->_uploadImage();
        } else {
            $this->foto_produk = $post["old_image"];
        }
        if (!empty($_FILES["foto2"]["nama"])) {
            $this->foto_produk2 = $this->_uploadImage2();
        } else {
            $this->foto_produk2 = $post["old_image"];
        }
        if (!empty($_FILES["foto3"]["nama"])) {
            $this->foto_produk3 = $this->_uploadImage3();
        } else {
            $this->foto_produk3 = $post["old_image"];
        }
        $this->deskripsi = $post["deskripsi"];
        $this->deskripsi2 = $post["deskripsi2"];
        $this->deskripsi3 = $post["deskripsi3"];
        return $this->db->update($this->_table, $this, array('id_produk' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_produk" => $id));
    }

    public function hitung_jumlah_produk()
    {
        $query = $this->db->get('produk');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './assets/img/products/';
        $config['allowed_types']        = 'jpg|png';
        $config['file_name']            = $this->id_produk . '1';
        $config['overwrite']            = true;
        $config['max_size']             = 2048; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            return $this->upload->data("file_name");
        }
        //print_r($this->upload->display_errors());
        return "default.jpg";
    }

    private function _uploadImg()
    {
        $config['upload_path']          = './assets/img/products/';
        $config['allowed_types']        = 'jpg|png';
        $config['file_name']            = $this->id_produk . '2';
        $config['overwrite']            = true;
        $config['max_size']             = 2048; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            return $this->upload->data("file_name");
        }
        //print_r($this->upload->display_errors());
        return "default.jpg";
    }

    private function _uploadGbr()
    {
        $config['upload_path']          = './assets/img/products/';
        $config['allowed_types']        = 'jpg|png';
        $config['file_name']            = $this->id_produk . '3';
        $config['overwrite']            = true;
        $config['max_size']             = 2048; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gmbr')) {
            return $this->upload->data("file_name");
        }
        //print_r($this->upload->display_errors());
        return "default.jpg";
    }
}
