<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cctv extends CI_Controller
{

  public function index()
  {
    $data['title'] = 'Cctv';
    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar', $data);
    $this->load->view('admin/templates/topbar', $data);
    $this->load->view('dishub/cctv', $data);
    $this->load->view('admin/templates/footer', $data);
  }
}