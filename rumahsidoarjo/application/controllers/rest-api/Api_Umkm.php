<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Api_Umkm extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
        $this->load->model('rest-api/m_umkm');
    }

    //Menampilkan data Umkm
    function index_get()
    {
        $id = $this->get('id_umkm');
        if ($id == '') {
            $umkm = $this->m_umkm->getUmkm();
        } else {
            $umkm = $this->m_umkm->getUmkm($id);
        }
        $this->response($umkm, 200);
    }

    //Menampilkan data Umkm
    function get_umkmPertanian()
    {
        $id = $this->get('id_umkm');
        if ($id == '') {
            $umkm = $this->m_umkm->getPertanian();
        } else {
            $umkm = $this->m_umkm->getPertanian($id);
        }
        $this->response($umkm, 200);
    }

    //Menampilkan data Umkm
    function get_umkmMakanan()
    {
        $id = $this->get('id_umkm');
        if ($id == '') {
            $umkm = $this->m_umkm->getMakanan();
        } else {
            $umkm = $this->m_umkm->getMakanan($id);
        }
        $this->response($umkm, 200);
    }
}
