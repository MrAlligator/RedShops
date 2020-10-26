<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dropdown_model extends CI_Model
{
    public function get_jenis(){
        $query = $this->db->get('jenis')->result();
        return $query;
    }
}