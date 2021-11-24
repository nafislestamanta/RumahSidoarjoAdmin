<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Berita_informasi extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
        $this->load->model('m_berita_informasi');
    }

    //Menampilkan data Berita Informasi
    function index_get()
    {
        $id = $this->get('kode');
        if ($id == '') {
            $job = $this->m_berita_informasi->getBerita();
        } else {
            $job = $this->m_berita_informasi->getBerita($id);
        }
        $this->response($job, 200);
    }
}
