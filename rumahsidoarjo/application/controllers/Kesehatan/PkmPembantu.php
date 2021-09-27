<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PkmPembantu extends CI_Controller
{

  public function index()
  {
    $data['title'] = 'PkmPembantu';
    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar', $data);
    $this->load->view('admin/templates/topbar', $data);
    $this->load->view('kesehatan/pkmpembantu', $data);
    $this->load->view('admin/templates/footer', $data);
  }
}