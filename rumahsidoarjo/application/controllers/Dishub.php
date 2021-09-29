<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dishub extends CI_Controller
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

  public function addcctv()
  {
    $data['title'] = 'Tambah CCTV';
    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar', $data);
    $this->load->view('admin/templates/topbar', $data);
    $this->load->view('dishub/addcctv', $data);
    $this->load->view('admin/templates/footer', $data);
  }

  public function edit()
  {
    $data['title'] = 'Tambah CCTV';
    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar', $data);
    $this->load->view('admin/templates/topbar', $data);
    $this->load->view('dishub/edit', $data);
    $this->load->view('admin/templates/footer', $data);
  }
}