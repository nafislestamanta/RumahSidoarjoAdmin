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

    private function _sendEmail($token, $type)
    {
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'rumahsidoarjo50@gmail.com',
            'smtp_pass' => 'rumahsidoarjo',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        ];

        $this->load->library('email', $config);

        $this->email->initialize($config);
        $this->email->from('rumahsidoarjo50@gmail.com', 'Reset Password Rumah Sidoarjo');
        $this->email->to($this->input->post('email'));

        if ($type == 'forgot') {
            $this->email->subject('Reset Password');
            $this->email->message('Silahkan Click Link untuk melakukan Reset Password : <a href="' . base_url() . 'auth/resetpassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Reset Password</a>');
        }

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }


    public function forgotPassword()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Forgot Paswword';
            $this->load->view('auth/forgot-password');
        } else {
            $email = $this->input->post('email');
            $user = $this->db->get_where('user_admin', ['email' => $email])->row_array();

            if ($user) {
                $token = base64_encode(random_bytes(32));
                $user_token = [
                    'email' => $email,
                    'token' => $token,
                    'date_create' => time()
                ];

                $this->db->insert('user_token', $user_token);
                $this->_sendEmail($token, 'forgot');

                $this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Silahkan cek Email anda Untuk Mereset Password</div>');
                redirect('auth/forgotPassword');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email Tidak Terdaftar</div>');
                redirect('auth/forgotPassword');
            }
        }
    }

    public function resetPassword()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user_admin', ['email' => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

            if ($user_token) {
                $this->session->set_userdata('reset_email', $email);
                $this->ubahPassword();
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Token Tidak Tersedia</div>');
                redirect('auth/forgotPassword');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Email Tidak Tersedia</div>');
            redirect('auth/forgotPassword');
        }
    }

    public function resetPasswordUser()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user_mobile', ['email' => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

            if ($user_token) {
                $this->session->set_userdata('reset_email', $email);
                $this->ubahPasswordUser();
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Token Tidak Tersedia</div>');
                redirect('auth/forgotPassword');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Email Tidak Tersedia</div>');
            redirect('auth/forgotPassword');
        }
    }

    public function ubahPassword()
    {
        if (!$this->session->userdata('reset_email')) {
            redirect('Auth');
        }

        $this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[5]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Repeat Password', 'trim|required|min_length[5]|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Ubah Paswword';
            $this->load->view('auth/ubahPasswordAdmin');
        } else {
            // $password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
            // $password = md5($this->input->post('password'));
            $password = $this->input->post('password1');
            $email = $this->session->userdata('reset_email');


            $this->db->set('password', md5($password));
            $this->db->where('email', $email);
            $this->db->update('user_admin');

            $this->session->unset_userdata('reset_email');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Password Berhasil Di Reset, Silahkan Login Kembali!</div>');
            redirect('Auth');
        }
    }

    public function ubahPasswordUser()
    {
        if (!$this->session->userdata('reset_email')) {
            redirect('Auth');
        }

        $this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[5]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Repeat Password', 'trim|required|min_length[5]|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Ubah Paswword';
            $this->load->view('auth/ubahPassword');
        } else {
            // $password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
            // $password = md5($this->input->post('password'));
            $password = $this->input->post('password1');
            $email = $this->session->userdata('reset_email');


            $this->db->set('password', md5($password));
            $this->db->where('email', $email);
            $this->db->update('user_mobile');

            $this->session->unset_userdata('reset_email');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Password Berhasil Di Reset, Silahkan Login Kembali!</div>');
            redirect('Auth/notif');
        }
    }
    public function notif()
    {
        $this->load->view('auth/notif');
    }
}
