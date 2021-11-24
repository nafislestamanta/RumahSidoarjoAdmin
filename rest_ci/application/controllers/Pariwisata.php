<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Pariwisata extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
        $this->load->model('m_pariwisata');
    }


    //Menampilkan data pariwisata
    function index_get()
    {
        $id = $this->get('id_wisata');
        if ($id == '') {
            $pariwisata = $this->m_pariwisata->getPariwisata();
        } else {
            $pariwisata = $this->m_pariwisata->getPariwisata($id);
        }
        $this->response($pariwisata, 200);
    }
}
