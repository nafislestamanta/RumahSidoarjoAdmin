<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kesehatan extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Pkm Pembantu';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('kesehatan/pkmpembantu', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function pkmutama()
    {
        $data['title'] = 'Pkm Utama';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('kesehatan/pkmutama', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function tambahpkmu()
    {
        $data['title'] = 'Pkm Utama';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('kesehatan/tambahpkmu', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function editpkmu()
    {
        $data['title'] = 'Pkm Utama';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('kesehatan/editpkmu', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function pkmp()
    {
        $data['title'] = 'Pkm Utama';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('kesehatan/pkmp', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function tambahpkmp()
    {
        $data['title'] = 'Pkm Utama';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('kesehatan/tambahpkmp', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function editpkmp()
    {
        $data['title'] = 'Pkm Utama';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('kesehatan/editpkmp', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function rs()
    {
        $data['title'] = 'Rumah Sakit';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('kesehatan/rsu', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function tambahrsu()
    {
        $data['title'] = 'Rumah Sakit';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('kesehatan/tambahrsu', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function editrsu()
    {
        $data['title'] = 'Rumah Sakit';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('kesehatan/editrsu', $data);
        $this->load->view('admin/templates/footer', $data);
    }
}