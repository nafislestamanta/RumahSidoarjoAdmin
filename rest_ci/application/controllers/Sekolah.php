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
    }

    //Menampilkan data Sekolah
    function index_get()
    {
        $id = $this->get('id_sekolah');
        if ($id == '') {
            $sekolah = $this->db->get('sekolah')->result();
        } else {
            $this->db->where('id_sekolah', $id);
            $sekolah = $this->db->get('sekolah')->result();
        }
        $this->response($sekolah, 200);
    }
}
