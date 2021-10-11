<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('auth/login');
        } else {
            //validasi sukses
            $this->login();
        }
    }

    private function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $nama = $this->input->post('nama');

        $user_admin = $this->db->get_where('user_admin', ['username' => $username])->row_array();
        // Jika user ada
        if ($user_admin) {
            if (md5($password, $user_admin['password'])) {
                $data = [
                    'username' => $user_admin['username'],
                    'nama' => $nama['nama'],
                    'id_role' => $user_admin['id_role']
                ];

                $this->session->set_userdata($data);
                if ($user_admin['id_role'] == 1) {
                    redirect('dashboard');
                } elseif ($user_admin['id_role'] == 2) {
                    redirect('dashboard');
                } elseif ($user_admin) {
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password anda salah!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda tidak memiliki akses!</div>');
            redirect('auth');
        }
    }
    // public function logout()
    // {
    //     $this->session->unset_userdata('username');
    //     $this->session->unset_userdata('id_role');

    //     $this->session->set_flashdata('message', '<div class="alert alert-succes" role="alert">Anda berhasil Logout</div>');
    //     redirect('auth');
    // }
}
