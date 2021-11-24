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
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $nama = $this->input->post('nama');

        $user_admin = $this->db->get_where('user_admin', ['username' => $username])->row_array();
        // Jika user ada
        if ($user_admin) {
            if (md5($password) == $user_admin['password']) {
                $data = [
                    'username' => $user_admin['username'],
                    'nama' => $nama['nama'],
                    'id_role' => $user_admin['id_role']
                ];

                $this->session->set_userdata($data);
                if ($user_admin['id_role'] == 1) {
                    redirect('dashboard');
                } elseif ($user_admin['id_role'] == 2) {
                    redirect('dishub');
                } elseif ($user_admin['id_role'] == 3) {
                    redirect('Umkm/dashboard');
                } elseif ($user_admin['id_role'] == 4) {
                    redirect('LowonganKerja/dashboard');
                } elseif ($user_admin['id_role'] == 5) {
                    redirect('Pendidikan/dashboard');
                } elseif ($user_admin['id_role'] == 6) {
                    redirect('Kesehatan/dashboard');
                } elseif ($user_admin['id_role'] == 7) {
                    redirect('pariwisata/dashboard');
                } elseif ($user_admin['id_role'] == 8) {
                    redirect('Polisi');
                } elseif ($user_admin['id_role'] == 9) {
                    redirect('Bpbd');
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
    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('id_role');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda berhasil Logout</div>');
        redirect('auth');
    }

    public function forgotPassword()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        if ($this->form_validation->run() == false) {
            $this->load->view('auth/forgot-password');
        } else {
            $email = $this->input->post('email');
            $user_admin = $this->db->get_where('user_admin', ['email' => $email])->row_array();

            if ($user_admin) {
            } else {
                $this->session->set_flashdata('message', '<div class ="alert alert-danger" role="alerts">Email belum terdaftar</div>');
                redirect('auth');
            }
        }
    }
}