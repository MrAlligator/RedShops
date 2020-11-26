<?php

class Profile extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Profile';
        $this->load->view("user/profile", $data);
    }
}
