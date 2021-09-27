<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BeritaInformasi extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'BeritaInformasi';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('beritainformasi/beritainformasi', $data);
        $this->load->view('admin/templates/footer', $data);
    }
}