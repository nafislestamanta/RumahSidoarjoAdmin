<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Api_Lowongan_Pekerjaan extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
        $this->load->model('rest-api/m_lowongan_pekerjaan');
    }

    //Menampilkan data Lowongan Pekerjaan
    function index_get()
    {
        $id = $this->get('id_lowongan');
        if ($id == '') {
            $lowongan = $this->m_lowongan_pekerjaan->getLowonganPekerjaan();
        } else {
            $lowongan = $this->m_lowongan_pekerjaan->getLowonganPekerjaan($id);
        }
        $this->response(
            array(
                'status' => true,
                'message' => 'berhasil mengambil data',
                'data' => $lowongan,
            ),
            200
        );
    }
}
