<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ManagemenData extends CI_Controller
{

  public function index()
  {
    $data['title'] = 'ManagemenData';
    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar', $data);
    $this->load->view('admin/templates/topbar', $data);
    $this->load->view('panikmenu/managemendata', $data);
    $this->load->view('admin/templates/footer', $data);
  }
}