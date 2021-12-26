<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Akun extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
        $this->load->model('rest-api/m_akun');
    }

    function login_post()
    {
        $email = $this->post('email');
        $password = md5($this->post('password'));

        $user_mobile = $this->m_akun->cekUser($email);
        if ($user_mobile) {
            $user_status = $user_mobile['status'];
            $user_password = $user_mobile['password'];

            if ($password == $user_password) {
                if ($user_status == 1) {
                    $this->response([
                        'status' => true,
                        'message' => 'User ditemukan',
                        'data' => $user_mobile,
                    ], REST_Controller::HTTP_OK);
                } else {
                    $this->response([
                        'status' => false,
                        'message' => 'User tidak aktif',
                        'data' => [],
                    ], REST_Controller::HTTP_OK);
                }
            } else {
                $this->response([
                    'status' => false,
                    'message' => 'Password Salah',
                    'data' => [],
                ], REST_Controller::HTTP_OK);
            }
        } else {
            $this->response([
                'status' => false,
                'message' => 'User tidak ditemukan',
                'data' => [],
            ], REST_Controller::HTTP_OK);
        }
    }


    //Mengirim atau menambah data akun baru
    function index_post()
    {
        $user = $this->db->get_where("user_mobile", ["NIK" => $this->post('NIK')])->row_array();
        $email = $this->db->get_where("user_mobile", ["email" => $this->post('email')])->row_array();
        if ($user) {
            $this->response(
                array(
                    'status' => false,
                    'message' => 'NIK telah terdaftar',
                    'data' => [],
                ),
                200
            );
            return;
        }

        if ($email) {
            $this->response(
                array(
                    'status' => false,
                    'message' => 'email telah terdaftar',
                    'data' => [],
                ),
                200
            );
            return;
        }

        $jk = $this->post('jenis_kelamin');
        if ($jk == 'male') {
            $jeniskelamin = 'Laki-Laki';
        } elseif ($jk == 'female') {
            $jeniskelamin = 'Perempuan';
        }
        $data = array(
            'NIK' => $this->post('NIK'),
            'nama' => $this->post('nama'),
            'alamat' => '',
            'email' => $this->post('email'),
            'tanggal_lahir' => '',
            'foto_profil' => 'no_imageakun.png',
            'jenis_kelamin' => $this->post('jenis_kelamin'),
            'no_telepon' => $this->post('no_telepon'),
            'password' => md5($this->post('password')),
            'status' => 0,
        );
        $insert = $this->m_akun->postAkun($data);
        if ($insert) {
            $this->response(
                array(
                    'status' => true,
                    'message' => 'berhasil registrasi',
                    'data' => $data,
                ),
                200
            );
        } else {
            $this->response(array(
                'status' => false,
                'message' => 'gagal registrasi',
                'data' => [],
            ), 200);
        }
    }

    function foto_post()
    {
        $config['upload_path']        =    './assets/img/';
        $config['allowed_types']    =    'jpg|jpeg|png|JPG|JPEG|PNG';
        $config['max_size']            =    10000;
        $config['overwrite']            =    true;
        $config['encrypt_name']            =    true;

        $foto = $_FILES['foto_profil']['name'];
        $this->load->library('upload');
        $this->upload->initialize($config);

        $id = $this->post('NIK');
        if ($this->upload->do_upload('foto_profil')) {
            $gbr = $this->upload->data();
            $data = array(
                'foto_profil' => $gbr['file_name'],
            );
            $update = $this->m_akun->putAkun($id, $data);

            if ($update) {
                $user = $this->db->get_where("user_mobile", ["NIK" => $this->post('NIK')])->row_array();
                $this->response(
                    array(
                        'status' => true,
                        'message' => 'Update foto profil berhasil',
                        'data' => $user,
                    ),
                    200
                );
            } else {
                $this->response(array(
                    'status' => false,
                    'message' => 'Gagal update foto profil',
                    'data' => [],
                ), 200);
            }
        } else {
            $error = array('error' => $this->upload->display_errors());
            $this->response(array(
                'status' => false,
                'message' => 'Gambar tidak sesuai format',
                'data' => $error,
            ), 200);
        }
    }


    //Memperbarui data Akun yang telah ada
    function edit_post()
    {
        $id = $this->post('NIK');

        $data = array(
            'nama' => $this->post('nama'),
            'alamat' => $this->post('alamat'),
            'tanggal_lahir' => $this->post('tanggal_lahir'),
            'jenis_kelamin' => $this->post('jenis_kelamin'),
            'no_telepon' => $this->post('no_telepon'),
        );

        if ($this->post('password')) {
            $data['password'] = md5($this->post('password'));
        }

        // var_dump($data);
        // die;

        $update = $this->m_akun->putAkun($id, $data);
        if ($update) {
            $this->response(
                array(
                    'status' => true,
                    'message' => 'Update akun berhasil',
                    'data' => $data,
                ),
                200
            );
        } else {
            $this->response(array(
                'status' => false,
                'message' => 'Gagal update akun',
                'data' => [],
            ), 200);
        }
    }

    private function _sendEmail_post($token, $type)
    {
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'nafislestamanta@gmail.com',
            'smtp_pass' => 'kembarlestamanta',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        ];

        $this->load->library('email', $config);

        $this->email->initialize($config);
        $this->email->from('nafislestamanta@gmail.com', 'Reset Password Rumah Sidoarjo');
        $this->email->to($this->post('email'));

        if ($type == 'forgot') {
            $this->email->subject('Reset Password');
            $this->email->message('Silahkan Click Link untuk melakukan Reset Password : <a href="' . base_url() . 'auth/resetpassworduser?email=' . $this->post('email') . '&token=' . urlencode($token) . '">Reset Password</a>');
        }

        if ($this->email->send()) {
            return true;
        } else {
            // echo $this->email->print_debugger();
            return false;
        }
    }

    public function forgotPassword_post()
    {
        $email = $this->post('email');
        $user = $this->db->get_where('user_mobile', ['email' => $email])->row_array();

        if ($user) {
            $token = base64_encode(random_bytes(32));
            $user_token = [
                'email' => $email,
                'token' => $token,
                'date_create' => time()
            ];

            $this->db->insert('user_token', $user_token);
            if ($this->_sendEmail_post($token, 'forgot')) {
                $this->response(
                    array(
                        'status' => true,
                        'message' => 'Silahkan cek Email anda Untuk Mereset Password',
                        'data' => $user_token,
                    ),
                    200
                );
            } else {
                $this->response(
                    array(
                        'status' => false,
                        'message' => 'Gagal mengirim email',
                        'data' => [],
                    ),
                    200
                );
            }
        } else {
            $this->response(
                array(
                    'status' => false,
                    'message' => 'Email Tidak Terdaftar',
                    'data' => [],
                ),
                200
            );
        }
    }
}
