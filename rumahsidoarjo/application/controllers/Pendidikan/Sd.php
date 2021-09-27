<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sd extends CI_Controller
{

  public function index()
  {
    $data['title'] = 'Sd';
    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar', $data);
    $this->load->view('admin/templates/topbar', $data);
    $this->load->view('pendidikan/sd', $data);
    $this->load->view('admin/templates/footer', $data);
  }
}