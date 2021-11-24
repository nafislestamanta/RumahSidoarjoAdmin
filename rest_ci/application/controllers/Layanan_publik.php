<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Layanan_publik extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
        $this->load->model('m_layananPublik');
    }

    //Menampilkan data Layanan Publik Kategori
    function index_get()
    {
        $id = $this->get('id_kategorilayanan');
        if ($id == '') {
            $kategori = $this->m_layananPublik->getKategori();
        } else {
            $kategori = $this->m_layananPublik->getKategori($id);
        }
        $this->response($kategori, 200);
    }

    //Menampilkan data Layanan Publik
    function index_getLayanan()
    {
        $id = $this->get('id_layanan');
        $layanan = $this->m_layananPublik->getLayanan($id);
        $this->response($layanan, 200);
    }
}
