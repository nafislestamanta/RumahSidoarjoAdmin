<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ManagemenAdmin extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'ManagemenAdmin';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('managemenuser/managemenadmin', $data);
        $this->load->view('admin/templates/footer', $data);
    }
}