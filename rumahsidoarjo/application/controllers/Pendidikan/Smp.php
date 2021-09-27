<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Smp extends CI_Controller
{

  public function index()
  {
    $data['title'] = 'Smp';
    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar', $data);
    $this->load->view('admin/templates/topbar', $data);
    $this->load->view('pendidikan/smp', $data);
    $this->load->view('admin/templates/footer', $data);
  }
}