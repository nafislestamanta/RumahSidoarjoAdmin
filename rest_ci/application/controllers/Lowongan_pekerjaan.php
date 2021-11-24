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
    }

    //Menampilkan data Lowongan Pekerjaan
    function index_get()
    {
        $id = $this->get('id_lowongan');
        if ($id == '') {
            $job = $this->db->get('lowongan')->result();
        } else {
            $this->db->where('id_lowongan', $id);
            $job = $this->db->get('lowongan')->result();
        }
        $this->response($job, 200);
    }
}
