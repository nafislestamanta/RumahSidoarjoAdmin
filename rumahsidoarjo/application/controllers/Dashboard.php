<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
        $this->load->model('M_dashboard');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['hasil'] = $this->M_dashboard->diagram_panik();
        $data['admin'] = $this->M_dashboard->jmlh_admin()->row();
        $data['user'] = $this->M_dashboard->jmlh_user()->row();
        $data['user2'] = $this->M_dashboard->validasi()->row();
        $data['panik'] = $this->M_dashboard->laporan_panik()->row();
        $data['pengaduan'] = $this->M_dashboard->pengaduan_umum()->row();
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();

        $data['title'] = 'Dashboard';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('admin/templates/footer', $data);
    }
}