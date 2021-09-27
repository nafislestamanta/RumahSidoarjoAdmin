<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LaporanPanik extends CI_Controller
{

  public function index()
  {
    $data['title'] = 'LaporanPanik';
    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar', $data);
    $this->load->view('admin/templates/topbar', $data);
    $this->load->view('panikmenu/laporanpanik', $data);
    $this->load->view('admin/templates/footer', $data);
  }
}