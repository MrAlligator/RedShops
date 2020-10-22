<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model
{
    private $_table = "produk";

    public $product_id;
    public $name;
    public $kind;
    public $price;
    public $image = "default.jpg";
    public $description;

    public function rules()
    {
        return [
            ['field' => 'name',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'kind',
            'label' => 'Jenis',
            'rules' => 'required'],

            ['field' => 'price',
            'label' => 'Harga',
            'rules' => 'numeric', 'required'],
            
            ['field' => 'description',
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
        $this->product_id = uniqid();
        $this->name = $post["nama_produk"];
        $this->kind = $post["jenis_produk"];
        $this->price = $post["harga_produk"];
        $this->description = $post["deskripsi"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->product_id = $post["id_produk"];
        $this->name = $post["nama_produk"];
        $this->kind = $post["jenis_produk"];
        $this->price = $post["harga_produk"];
        $this->description = $post["deskripsi"];
        return $this->db->update($this->_table, $this, array('product_id' => $post['id_produk']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("product_id" => $id));
    }
}