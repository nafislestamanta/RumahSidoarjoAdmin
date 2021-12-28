<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Api_Layanan_Publik extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
        $this->load->model('rest-api/m_layanan_publik');
    }

    //Menampilkan data kategori layanan publik
    function index_get()
    {
        $id = $this->get('id_kategorilayanan');
        if ($id == '') {
            $kategori = $this->m_layanan_publik->getKategori();
        } else {
            $kategori = $this->m_layanan_publik->getKategori($id);
        }
        $this->response(
            array(
                'status' => true,
                'message' => 'berhasil mengambil data',
                'data' => $kategori,
            ),
            200
        );
    }

    //Menampilkan data kategori layanan publik
    function layananpublikkategori_get()
    {
        $id = $this->get('id_kategorilayanan');
        if ($id == '') {
            $kategori = $this->m_layanan_publik->getLayananPublikKategori();
        } else {
            $kategori = $this->m_layanan_publik->getLayananPublikKategori($id);
        }
        $this->response(
            array(
                'status' => true,
                'message' => 'berhasil mengambil data',
                'data' => $kategori,
            ),
            200
        );
    }

    //Menampilkan data kategori layanan publik
    function layananpublik_get()
    {
        $id = $this->get('id_layanan');
        if ($id == '') {
            $layanan = $this->m_layanan_publik->getLayananPublik();
        } else {
            $layanan = $this->m_layanan_publik->getLayananPublik($id);
        }
        $this->response(
            array(
                'status' => true,
                'message' => 'berhasil mengambil data',
                'data' => $layanan,
            ),
            200
        );
    }
}
