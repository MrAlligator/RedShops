<?php

class Cart extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("product_model");
        $this->load->model("editalamat_model");
        $this->load->model("transaksi_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Keranjang';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view("user/keranjang", $data);
    }

    public function add()
    {
        $x = 'options';
        $redirect_page = $this->input->post('redirect_page');
        $data = array(
            'id'      => $this->input->post('id'),
            'qty'     => $this->input->post('qty'),
            'price'   => $this->input->post('price'),
            'berat'   => $this->input->post('berat'),
            'name'    => $this->input->post('name'),
            'options' => $this->input->post(array($x . '[size]')),
            'produk'  => $this->product_model->getAll(),
        );

        $this->cart->insert($data);
        redirect($redirect_page, 'refresh');
    }

    public function addin()
    {
        $x = 'options';
        $redirect_page = $this->input->post('redirect_page');
        $data = array(
            'id'      => $this->input->post('id'),
            'qty'     => $this->input->post('qty'),
            'price'   => $this->input->post('price'),
            'berat'   => $this->input->post('berat'),
            'name'    => $this->input->post('name'),
            'options' => $this->input->post(array('ukuran')),
            'produk'  => $this->product_model->getAll(),
        );

        $this->cart->insert($data);
        redirect($redirect_page, 'refresh');
    }

    public function delete($rowid)
    {
        $redirect_page = $this->input->post('redirect_page');

        $this->cart->remove($rowid);
        redirect($redirect_page);
    }

    public function deletein($rowid)
    {
        $this->cart->remove($rowid);
        redirect('user/cart');
    }

    public function updatein()
    {
        $i = 1;
        $x = 'options';
        foreach ($this->cart->contents() as $items) {
            $data = array(
                'rowid' => $items['rowid'],
                'qty'   => $this->input->post($i . '[qty]'),
                'options' => $this->input->post(array($i . '[size]'))
            );
            $this->cart->update($data);
            $i++;
        }
        redirect('user/cart');
    }

    public function update()
    {
        $redirect_page = $this->input->post('redirect_page');
        $i = 1;
        foreach ($this->cart->contents() as $items) {
            $data = array(
                'rowid' => $items['rowid'],
                'qty'   => $this->input->post($i . '[qty]')
            );
            $this->cart->update($data);
            $i++;
        }
        redirect($redirect_page);
    }

    public function clear()
    {
        $this->cart->destroy();
        redirect('user/cart');
    }

    public function checkout()
    {
        $this->form_validation->set_rules('provinsi', 'Provinsi', 'required', array(
            'required' => '%s Harus Diisi !!'
        ));
        $this->form_validation->set_rules('kabupaten', 'Kabupaten', 'required', array(
            'required' => '%s Harus Diisi !!'
        ));
        $this->form_validation->set_rules('ekspedisi', 'Ekspedisi', 'required', array(
            'required' => '%s Harus Diisi !!'
        ));
        $this->form_validation->set_rules('paket', 'Paket', 'required', array(
            'required' => '%s Harus Diisi !!'
        ));

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Checkout',
                'isi' => 'checkout',
                'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
                'alamattoko' => $this->editalamat_model->data_setting()
            );
            $this->load->view('user/checkout', $data, FALSE);
        } else {
            //simpan ke transaksi
            $data = array(
                'id_user' => $this->session->userdata('id_user'),
                'no_order' => $this->input->post('no_order'),
                'tgl_transaksi' => date('Y-m-d'),
                'nama_penerima' => $this->input->post('nama_penerima'),
                'provinsi' => $this->input->post('provinsi'),
                'kabupaten' => $this->input->post('kabupaten'),
                'alamat' => $this->input->post('alamat'),
                'kode_pos' => $this->input->post('kode_pos'),
                'no_telepon' => $this->input->post('no_telepon'),
                'ekspedisi' => $this->input->post('ekspedisi'),
                'paket' => $this->input->post('paket'),
                'estimasi' => $this->input->post('estimasi'),
                'ongkir' => $this->input->post('ongkir'),
                'berat' => $this->input->post('berat'),
                'grand_total' => $this->input->post('grand_total'),
                'total_bayar' => $this->input->post('total_bayar'),
                'status_bayar' => '0',
                'status_order' => '0',
            );
            $this->transaksi_model->simpan_transaksi($data);
            //simpan ke detail transaksi
            $i = 1;
            foreach ($this->cart->contents() as $items) {
                $data_detail = array(
                    'no_order' => $this->input->post('no_order'),
                    'id_produk' => $items['id'],
                    'qty' => $this->input->post('qty' . $i++),
                );
                $this->transaksi_model->simpan_detail_transaksi($data_detail);
            }
            $this->session->flashdata('message', 'Pesanan berhasil di proses!');
            $this->cart->destroy();
            redirect('user/pesanan_saya');
        }
    }
}
