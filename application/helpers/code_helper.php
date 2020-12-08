<?php

function is_logged_in()
{
    $help = get_instance();
    if(!$help->session->userdata('username')) {
        redirect('admin/auth');
    } 
    else {
        $role_id = $help->session->userdata('role_id');
        $menu = $help->uri->segment(2);

        $queryMenu = $help->db->get_where('user_menu', ['menu' => $menu])->row_array();
        $menu_id = $queryMenu['id'];

        $userAccess = $help->db->get_where('user_access_menu', [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ]);

        // var_dump($userAccess);
        // die;

        if($userAccess->num_rows() < 1) {
            redirect('admin/auth/blocked');
        }
    }

}