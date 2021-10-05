<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Umkm extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Tempat Wisata';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('umkm/umkm', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function edit_umkm()
    {
        $data['title'] = 'Tempat Wisata';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('umkm/edit_umkm', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function tambah_umkm()
    {
        $data['title'] = 'Tempat Wisata';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('umkm/tambah_umkm', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function detail_umkm()
    {
        $data['title'] = 'Tempat Wisata';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('umkm/detail_umkm', $data);
        $this->load->view('admin/templates/footer', $data);
    }
}