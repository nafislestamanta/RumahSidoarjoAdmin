<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kepegawaian extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Kepegawaian';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('managemenuser/kepegawaian', $data);
        $this->load->view('admin/templates/footer', $data);
    }
}