<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserMobile extends CI_Controller
{

  public function index()
  {
    $data['title'] = 'UserMobile';
    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar', $data);
    $this->load->view('admin/templates/topbar', $data);
    $this->load->view('managemenmobile/usermobile', $data);
    $this->load->view('admin/templates/footer', $data);
  }
}