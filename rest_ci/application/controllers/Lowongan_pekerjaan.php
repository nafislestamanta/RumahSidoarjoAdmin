<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Lowongan_pekerjaan extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
        $this->load->model('m_lowongan');
    }

    //Menampilkan data Lowongan Pekerjaan semua dan berdasarkan ID
    function index_get()
    {
        $id = $this->get('id_lowongan');
        if ($id == '') {
            $lowongan = $this->m_lowongan->getLowonganId();
        } else {
            $lowongan = $this->m_lowongan->getLowonganId($id);
        }
        $this->response($lowongan, 200);
    }
}