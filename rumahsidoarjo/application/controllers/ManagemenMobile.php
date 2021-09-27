<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ManagemenMobile extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'User Mobile';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('managemenmobile/usermobile', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function validasi()
    {
        $data['title'] = 'Validasi Akun';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('managemenmobile/validasiakun', $data);
        $this->load->view('admin/templates/footer', $data);
    }
}