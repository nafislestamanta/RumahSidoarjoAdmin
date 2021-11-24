<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Komunitas extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
        $this->load->model('m_komunitas');
    }

    //Menampilkan data Komunitas
    function index_get()
    {
        $id = $this->get('id_komunitas');
        if ($id == '') {
            $job = $this->m_komunitas->getKomunitas();
        } else {
            $job = $this->m_komunitas->getKomunitas($id);
        }
        $this->response($job, 200);
    }
}
