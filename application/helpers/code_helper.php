<?php

function is_logged_in()
{
    $help = get_instance();
    if(!$help->session->userdata('username')) {
        redirect('admin/auth');
    } 
    // else {
    //     $role_id = $ci->session->userdata('role_id');
    //     $menu = $help->uri->segment(2);


    // }

}