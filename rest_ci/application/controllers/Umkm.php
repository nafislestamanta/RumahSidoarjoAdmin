<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Umkm extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data Umkm
    function index_get()
    {
        $id = $this->get('id_umkm');
        if ($id == '') {
            $umkm = $this->db->get('umkm')->result();
        } else {
            $this->db->where('id_umkm', $id);
            $umkm = $this->db->get('umkm')->result();
        }
        $this->response($umkm, 200);
    }
}
