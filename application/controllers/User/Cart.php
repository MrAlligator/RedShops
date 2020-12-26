<?php
 
class Cart extends CI_Controller{
     
    public function __construct(){
        parent::__construct();
        $this->load->model("product_model");
    }

    public function add(){
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

}