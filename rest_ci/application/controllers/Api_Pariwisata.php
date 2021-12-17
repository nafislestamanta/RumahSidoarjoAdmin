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

    //Menampilkan data pariwisata semua dan berdasarkan id
    function index_get()
    {
        $id = $this->get('id_wisata');
        if ($id == '') {
            $pariwisata = $this->m_pariwisata->getWisataPemancingan();
        } else {
            $pariwisata = $this->m_pariwisata->getWisataPemancingan($id);
        }
        $this->response($pariwisata, 200);
    }

    // Menambah ulasan Pariwisata
    function index_post()
    {
        // id wisata masih belum bisa ditambah
        $id = $this->get('id_wisata');
        $data = array(
            'ulasan' => $this->post('ulasan'),
            'id_wisata' => $id,
            'foto1' => $this->post('foto1'),
            'foto2' => $this->post('foto2'),
            'foto3' => $this->post('foto3')
        );
        $tambah = $this->m_pariwisata->post_ulasan($data);
        if ($tambah) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
