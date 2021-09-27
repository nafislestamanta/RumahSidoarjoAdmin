<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PanikMenu extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Managemen Data';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('panikmenu/managemendata', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function laporanpanik()
    {
        $data['title'] = 'Laporan';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('panikmenu/laporanpanik', $data);
        $this->load->view('admin/templates/footer', $data);
    }
}