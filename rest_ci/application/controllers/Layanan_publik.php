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

    //Menampilkan data Layanan Publik
    function index_get()
    {
        $id = $this->get('id_kategorilayanan');
        if ($id == '') {
            $layanan = $this->db->get('kategori_layanan')->result();
        } else {
            $this->db->where('id_kategorilayanan', $id);
            $layanan = $this->db->get('kategori_layanan')->result();
        }
        $this->response($layanan, 200);
    }
}
