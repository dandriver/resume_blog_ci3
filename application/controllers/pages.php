<?php

class Pages extends CI_Controller
{
    function contact()
    {
        $class_name = array(
            'main_class' => '',
            'home_class' => '',
            'login_class' => '',
            'register_class' => '',
            'upload_class' => '',
            'contact_class' => 'current');

        $this->load->view('header', $class_name);
        $this->load->view('v_contact');
        $this->load->view('footer');
    }

    function main()
    {
        $class_name = array(
            'main_class' => 'current',
            'home_class' => '',
            'login_class' => '',
            'register_class' => '',
            'upload_class' => '',
            'contact_class' => '');

        $this->load->view('header', $class_name);
        $this->load->view('v_main');
        $this->load->view('footer');
    }
}
