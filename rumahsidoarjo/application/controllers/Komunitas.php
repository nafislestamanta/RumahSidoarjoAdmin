<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Komunitas extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Pkm Pembantu';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('komunitas/komunitas', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function tambah_komunitas()
    {
        $data['title'] = 'Pkm Pembantu';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('komunitas/tambah_komunitas', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function edit_komunitas()
    {
        $data['title'] = 'Pkm Pembantu';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('komunitas/edit_komunitas', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function detail_komunitas()
    {
        $data['title'] = 'Pkm Pembantu';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('komunitas/detail_komunitas', $data);
        $this->load->view('admin/templates/footer', $data);
    }
}