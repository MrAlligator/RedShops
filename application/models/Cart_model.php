<?php
class Cart_model extends CI_Model{
    private $_table = "produk";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
}