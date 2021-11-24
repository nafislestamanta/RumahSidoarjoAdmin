<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Sekolah extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
        $this->load->model('m_sekolah');
    }

    //Menampilkan data Sekolah Jenjang SD
    function index_get()
    {
        $id = $this->get('id_sekolah');
        if ($id == '') {
            $jenjang = $this->m_sekolah->getSekolahSD();
        } else {
            $jenjang = $this->m_sekolah->getSekolahSD($id);
        }
        $this->response($jenjang, 200);
    }

    //Menampilkan data Sekolah Jenjang SMP
    function index_getSMP()
    {
        $id = $this->get('id_sekolah');
        if ($id == '') {
            $jenjang = $this->m_sekolah->getSekolahSMP();
        } else {
            $jenjang = $this->m_sekolah->getSekolahSMP($id);
        }
        $this->response($jenjang, 200);
    }

    //Menampilkan data Sekolah Jenjang SLB
    function index_getSLB()
    {
        $id = $this->get('id_sekolah');
        if ($id == '') {
            $jenjang = $this->m_sekolah->getSekolahSLB();
        } else {
            $jenjang = $this->m_sekolah->getSekolahSLB($id);
        }
        $this->response($jenjang, 200);
    }
}