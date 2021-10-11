<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LombaDanBudaya extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Pkm Pembantu';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('lombadanbudaya/lombadanbudaya', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function tambah_lomba()
    {
        $data['title'] = 'Pkm Pembantu';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('lombadanbudaya/tambah_lomba', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function edit_lomba()
    {
        $data['title'] = 'Pkm Pembantu';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('lombadanbudaya/edit_lomba', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function detail_lomba()
    {
        $data['title'] = 'Pkm Pembantu';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('lombadanbudaya/detail_lomba', $data);
        $this->load->view('admin/templates/footer', $data);
    }
}