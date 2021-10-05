<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LayananPublik extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Tempat Wisata';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('layananpublik/layananpublik', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function edit_layanan()
    {
        $data['title'] = 'Tempat Wisata';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('layananpublik/edit_layanan', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function tambah_layanan()
    {
        $data['title'] = 'Tempat Wisata';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('layananpublik/tambah_layanan', $data);
        $this->load->view('admin/templates/footer', $data);
    }
}