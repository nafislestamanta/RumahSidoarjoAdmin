<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Api_Kesehatan extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
        $this->load->model('rest-api/m_kesehatan');
    }

    //Menampilkan data Kesehatan PKMU
    function index_get()
    {
        $id = $this->get('id_kesehatan');
        if ($id == '') {
            $kesehatan = $this->m_kesehatan->getKesehatan();
        } else {
            $kesehatan = $this->m_kesehatan->getKesehatan($id);
        }
        $this->response(
            array(
                'status' => true,
                'message' => 'berhasil mengambil data',
                'data' => $kesehatan,
            ),
            200
        );
    }

    //Menampilkan data Kesehatan PKMPembantu
    function pkmpembantu_get()
    {
        $id = $this->get('id_kesehatan');
        if ($id == '') {
            $kesehatan = $this->m_kesehatan->getPKMPembantu();
        } else {
            $kesehatan = $this->m_kesehatan->getPKMPembantu($id);
        }
        $this->response(
            array(
                'status' => true,
                'message' => 'berhasil mengambil data',
                'data' => $kesehatan,
            ),
            200
        );
    }

    //Menampilkan data Umkm
    function rsu_get()
    {
        $id = $this->get('id_kesehatan');
        if ($id == '') {
            $kesehatan = $this->m_kesehatan->getRSU();
        } else {
            $kesehatan = $this->m_kesehatan->getRSU($id);
        }
        $this->response(
            array(
                'status' => true,
                'message' => 'berhasil mengambil data',
                'data' => $kesehatan,
            ),
            200
        );
    }
}
