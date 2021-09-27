<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Event extends CI_Controller
{

  public function index()
  {
    $data['title'] = 'Event';
    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar', $data);
    $this->load->view('admin/templates/topbar', $data);
    $this->load->view('pariwisata/event', $data);
    $this->load->view('admin/templates/footer', $data);
  }
}