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
}