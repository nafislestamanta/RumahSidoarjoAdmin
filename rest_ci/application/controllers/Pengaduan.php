<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Pengaduan extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data Pengaduan Umum
    function index_get()
    {
        $id = $this->get('id_pengaduan');
        if ($id == '') {
            $akun = $this->db->get('pengaduan_umum')->result();
        } else {
            $this->db->where('id_pengaduan', $id);
            $akun = $this->db->get('pengaduan_umum')->result();
        }
        $this->response($akun, 200);
    }

    //Mengirim atau menambah data Pengaduan Umum
    function index_post()
    {
        $data = array(
            'NIK' => $this->post('NIK'),
            'kategori' => $this->post('kategori'),
            'lokasi_kejadian' => $this->post('lokasi_kejadian'),
            'waktu_kejadian' => $this->post('waktu_kejadian'),
            'deskripsi' => $this->post('deskripsi'),
            'status_pengaduan' => "Menunggu",
        );
        $insert = $this->db->insert('user_mobile', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
