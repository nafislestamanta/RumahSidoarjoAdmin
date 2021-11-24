<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Cctv extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
        $this->load->model('m_cctv');
    }

    //Menampilkan data Cctv
    function index_get()
    {
        $id = $this->get('id_cctv');
        if ($id == '') {
            $cctv = $this->m_cctv->getCctv();
        } else {
            $cctv = $this->m_cctv->getCctv($id);
        }
        $this->response($cctv, 200);
    }
}
