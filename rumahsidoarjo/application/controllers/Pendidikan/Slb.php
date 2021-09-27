<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Slb extends CI_Controller
{

  public function index()
  {
    $data['title'] = 'Slb';
    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar', $data);
    $this->load->view('admin/templates/topbar', $data);
    $this->load->view('pendidikan/slb', $data);
    $this->load->view('admin/templates/footer', $data);
  }
}