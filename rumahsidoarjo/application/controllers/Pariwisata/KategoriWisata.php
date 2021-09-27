<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KategoriWisata extends CI_Controller
{

  public function index()
  {
    $data['title'] = 'KategoriWisata';
    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar', $data);
    $this->load->view('admin/templates/topbar', $data);
    $this->load->view('pariwisata/kategoriwisata', $data);
    $this->load->view('admin/templates/footer', $data);
  }
}