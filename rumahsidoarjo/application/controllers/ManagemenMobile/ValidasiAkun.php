<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ValidasiAkun extends CI_Controller
{

  public function index()
  {
    $data['title'] = 'ValidasiAkun';
    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar', $data);
    $this->load->view('admin/templates/topbar', $data);
    $this->load->view('managemenmobile/validasiakun', $data);
    $this->load->view('admin/templates/footer', $data);
  }
}