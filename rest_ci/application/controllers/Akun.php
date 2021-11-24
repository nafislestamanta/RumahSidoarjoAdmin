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
        $this->load->model('m_akun');
    }

    //Menampilkan data akun
    function index_get()
    {
        $id = $this->get('NIK');
        if ($id == '') {
            $akun = $this->m_akun->getAkun();
        } else {
            $akun = $this->m_akun->getAkun($id);
        }
        $this->response($akun, 200);
    }

    //Mengirim atau menambah data akun baru
    function index_post()
    {
        $data = array(
            'NIK' => $this->post('NIK'),
            'nama' => $this->post('nama'),
            'alamat' => $this->post('alamat'),
            'email' => $this->post('email'),
            'tanggal_lahir' => $this->post('tanggal_lahir'),
            'jenis_kelamin' => $this->post('jenis_kelamin'),
            'no_telepon' => $this->post('no_telepon'),
            'password' => md5($this->post('password')),
            'status' => 0,
        );
        $insert = $this->m_akun->postAkun($data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //Memperbarui data Akun yang telah ada
    function index_put()
    {
        $id = $this->put('NIK');
        $data = array(
            'nama' => $this->put('nama'),
            'alamat' => $this->put('alamat'),
            'email' => $this->put('email'),
            'tanggal_lahir' => $this->put('tanggal_lahir'),
            'jenis_kelamin' => $this->put('jenis_kelamin'),
            'no_telepon' => $this->put('no_telepon'),
            'password' => $this->put('password')
        );
        $update = $this->m_akun->putAkun($id, $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    // //Menghapus salah satu data akun
    // function index_delete()
    // {
    //     $id = $this->delete('NIK');
    //     $delete = $this->db->where('NIK', $id)->delete('panik_button');
    //     $delete = $this->db->where('NIK', $id)->delete('pengaduan_umum');
    //     $delete = $this->db->where('NIK', $id)->delete('user_mobile');
    //     // $delete = $this->db->delete('panik_button');
    //     // $delete = $this->db->delete('pengaduan_umum');
    //     // $delete = $this->db->delete('user_mobile');
    //     if ($delete) {
    //         $this->response(array('status' => 'success'), 201);
    //     } else {
    //         $this->response(array('status' => 'fail', 502));
    //     }
    // }
}
