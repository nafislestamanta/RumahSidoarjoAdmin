<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pariwisata extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Tempat Wisata';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('pariwisata/tempatwisata', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function tambah_wisata()
    {
        $data['title'] = 'Tempat Wisata';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('pariwisata/tambah_wisata', $data);
        $this->load->view('admin/templates/footer', $data);
    }


    public function edit_wisata()
    {
        $data['title'] = 'Tempat Wisata';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('pariwisata/edit_wisata', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function detail_wisata()
    {
        $data['title'] = 'Tempat Wisata';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('pariwisata/detail_wisata', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function kategoriwisata()
    {
        $data['title'] = 'Kategori Wisata';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('pariwisata/kategoriwisata', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function tambah_kategori()
    {
        $data['title'] = 'Kategori Wisata';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('pariwisata/tambah_kategori', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function edit_kategori()
    {
        $data['title'] = 'Kategori Wisata';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('pariwisata/edit_kategori', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function event()
    {
        $data['title'] = 'Event';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('pariwisata/event', $data);
        $this->load->view('admin/templates/footer', $data);
    }
}