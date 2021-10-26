<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function index()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Dashboard';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('admin/templates/footer', $data);
    }
}