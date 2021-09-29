<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendidikan extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Sekolah Dasar';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('pendidikan/sd', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function tambah_sd()
    {
        $data['title'] = 'Sekolah Dasar';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('pendidikan/tambah_sd', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function edit_sd()
    {
        $data['title'] = 'Sekolah Dasar';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('pendidikan/edit_sd', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function Slb()
    {
        $data['title'] = 'Sekolah Luar Biasa';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('pendidikan/slb', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function tambah_slb()
    {
        $data['title'] = 'Sekolah Dasar';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('pendidikan/tambah_slb', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function edit_slb()
    {
        $data['title'] = 'Sekolah Dasar';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('pendidikan/edit_slb', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function Smp()
    {
        $data['title'] = 'Sekolah Menengah Pertama';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('pendidikan/smp', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function tambah_smp()
    {
        $data['title'] = 'Sekolah Dasar';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('pendidikan/tambah_smp', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function edit_smp()
    {
        $data['title'] = 'Sekolah Dasar';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('pendidikan/edit_smp', $data);
        $this->load->view('admin/templates/footer', $data);
    }
}