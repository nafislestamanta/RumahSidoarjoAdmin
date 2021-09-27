<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kesehatan extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Pkm Pembantu';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('kesehatan/pkmpembantu', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function pkmutama()
    {
        $data['title'] = 'Pkm Utama';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('kesehatan/pkmutama', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function rs()
    {
        $data['title'] = 'Rumah Sakit';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('kesehatan/rs', $data);
        $this->load->view('admin/templates/footer', $data);
    }
}