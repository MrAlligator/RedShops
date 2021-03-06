<?php

class Pesanan_saya extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("transaksi_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data = array(
            'title' => 'Pesanan Saya',
            'isi' => 'pesanan_saya',
            'belum_bayar' => $this->transaksi_model->belum_bayar(),
            'diproses' => $this->transaksi_model->diproses(),
            'dikirim' => $this->transaksi_model->dikirim(),
            'diterima' => $this->transaksi_model->diterima(),
            'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array()
        );
        $this->load->view('user/myorder', $data, FALSE);
    }

    public function bayar($id_transaksi)
    {
        $this->form_validation->set_rules('atas_nama', 'Atas Nama', 'required', array(
            'required' => '%s Harus Diisi!!'
        ));

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './assets/img/buktipembayaran/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = '2048';
            $this->upload->initialize($config);
            $field_name = 'bukti_bayar';
            if (!$this->upload->do_upload($field_name)) {
                $data = array(
                    'title' => 'Pembayaran',
                    'pesanan' => $this->transaksi_model->detail_pesanan($id_transaksi),
                    'rekening' => $this->transaksi_model->rekening(),
                    'error_upload' => $this->upload->display_errors(),
                    'isi' => 'bayar',
                    'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
                );
                $this->load->view('user/bayar', $data, FALSE);
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/img/buktipembayaran/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                $data = array(
                    'id_transaksi' => $id_transaksi,
                    'atas_nama' => $this->input->post('atas_nama'),
                    'nama_bank' => $this->input->post('nama_bank'),
                    'no_rekening' => $this->input->post('no_rekening'),
                    'status_bayar' => '1',
                    'bukti_bayar' => $upload_data['uploads']['file_name'],
                );
                $this->transaksi_model->upload_buktibayar($data);
                $this->session->set_flashdata('message', 'Bukti Pembayaran Berhasil di Upload !!');
                redirect('user/pesanan_saya');
            }
        }

        $data = array(
            'title' => 'Pembayaran',
            'pesanan' => $this->transaksi_model->detail_pesanan($id_transaksi),
            'rekening' => $this->transaksi_model->rekening(),
            'isi' => 'bayar',
        );
        $this->load->view('user/bayar', $data, FALSE);
    }

    public function diterima($id_transaksi)
    {
        $data = array(
            'id_transaksi' => $id_transaksi,
            'status_order' => '3'
        );
        $this->transaksi_model->update_order($data);
        $this->session->set_flashdata('message', 'Pesanan Telah Diterima !!');
        redirect('user/pesanan_saya');
    }
}
