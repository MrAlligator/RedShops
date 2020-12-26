<?php

class Cart extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("product_model");
    }

    public function index()
    {
        $data['title'] = 'Keranjang';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view("user/keranjang", $data);
    }

    public function add()
    {
        $redirect_page = $this->input->post('redirect_page');
        $data = array(
            'id'      => $this->input->post('id'),
            'qty'     => $this->input->post('qty'),
            'price'   => $this->input->post('price'),
            'name'    => $this->input->post('name'),
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
        foreach ($this->cart->contents() as $items) {
            $data = array(
                'rowid' => $items['rowid'],
                'qty'   => $this->input->post($i . '[qty]')
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
        $data = array(
            'title' => 'Checkout',
            'isi' => 'checkout',
        );

        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('user/checkout', $data, FALSE);
    }
}
