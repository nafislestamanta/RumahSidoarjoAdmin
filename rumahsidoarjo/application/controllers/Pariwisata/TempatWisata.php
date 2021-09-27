<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TempatWisata extends CI_Controller
{

  public function index()
  {
    $data['title'] = 'TempatWisata';
    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar', $data);
    $this->load->view('admin/templates/topbar', $data);
    $this->load->view('pariwisata/tempatwisata', $data);
    $this->load->view('admin/templates/footer', $data);
  }
}