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

    public function Slb()
    {
        $data['title'] = 'Sekolah Luar Biasa';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('pendidikan/slb', $data);
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
}