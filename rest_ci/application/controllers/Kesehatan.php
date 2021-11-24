<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Kesehatan extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
        $this->load->model('m_kesehatan');
    }

    //Menampilkan data kesehatan
    function index_get()
    {
        $id = $this->get('id_kesehatan');
        if ($id == '') {
            $kesehatan = $this->m_kesehatan->getPKMU();
        } else {
            $kesehatan = $this->m_kesehatan->getPKMU($id);
        }
        $this->response($kesehatan, 200);
    }
}
