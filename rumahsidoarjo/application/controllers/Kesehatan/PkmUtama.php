<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PkmUtama extends CI_Controller
{

  public function index()
  {
    $data['title'] = 'PkmUtama';
    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar', $data);
    $this->load->view('admin/templates/topbar', $data);
    $this->load->view('kesehatan/pkmutama', $data);
    $this->load->view('admin/templates/footer', $data);
  }
}