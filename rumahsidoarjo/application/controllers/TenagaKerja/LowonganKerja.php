<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LowonganKerja extends CI_Controller
{

  public function index()
  {
    $data['title'] = 'LowonganKerja';
    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar', $data);
    $this->load->view('admin/templates/topbar', $data);
    $this->load->view('tenagakerja/lowongankerja', $data);
    $this->load->view('admin/templates/footer', $data);
  }
}