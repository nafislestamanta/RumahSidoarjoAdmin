<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LowonganKerja extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Perusahaan';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('tenagakerja/perusahaan', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function lowongan()
    {
        $data['title'] = 'Lowongan Kerja';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('tenagakerja/lowongankerja', $data);
        $this->load->view('admin/templates/footer', $data);
    }
}