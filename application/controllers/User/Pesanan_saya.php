<?php

class Pesanan_saya extends CI_Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Pesanan Saya',
            'isi' => 'pesanan_saya',
        );
        $this->load->view('user/myorder', $data, FALSE);
    }
}
