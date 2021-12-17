<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Api_Pariwisata extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
        $this->load->model('rest-api/api_m_pariwisata');
    }

    //Menampilkan data pariwisata semua dan berdasarkan id
    function index_get()
    {
        $id = $this->get('id_wisata');

        if ($id == '') {
            $pariwisata = $this->api_m_pariwisata->getWisataPemancingan();


            $this->response(
                array(
                    'status' => true,
                    'message' => 'berhasil mengambil data',
                    'data' => $pariwisata,
                ),
                200
            );
        } else {
            $pariwisata = $this->api_m_pariwisata->getWisataPemancingan($id);
            $tarif = $this->db->get_where("tarif_wisata", ["id_wisata" => $id])->result_array();
            $this->db->join('user_mobile', 'user_mobile.NIK=ulasan_wisata.NIK');
            $ulasan = $this->db->get_where("ulasan_wisata", ["id_wisata" => $id])->result_array();

            $this->response(
                array(
                    'status' => true,
                    'message' => 'berhasil mengambil data',
                    'pariwisata' => $pariwisata,
                    'tarif' => $tarif,
                    'ulasan' => $ulasan,
                ),
                200
            );
        }
    }

    // Menambah ulasan Pariwisata
    function index_post()
    {
        $flagStatus = false;

        $config['upload_path']        =    './assets/img/';
        $config['allowed_types']    =    'jpg|jpeg|png|JPG|JPEG|PNG';
        $config['max_size']            =    5000;
        $config['overwrite']            =    true;
        $config['encrypt_name']            =    true;
        $this->load->library('upload');
        $this->upload->initialize($config);

        $foto1 = '';
        $foto2 = '';
        $foto3 = '';

        if ($_FILES['foto1']['error'] != 4) {
            // do upload
            if ($this->upload->do_upload('foto1')) {
                $foto1 = $this->upload->data()['file_name'];
                $flagStatus = true;
            } else {
                $flagStatus = false;
            }
            // apakah upload berhasil
        }
        if ($_FILES['foto2']['error'] != 4) {
            // do upload
            if ($this->upload->do_upload('foto2')) {
                $foto2 = $this->upload->data()['file_name'];
                $flagStatus = true;
            } else {
                $flagStatus = false;
            }
            // apakah upload berhasil
        }
        if ($_FILES['foto3']['error'] != 4) {
            // do upload
            if ($this->upload->do_upload('foto3')) {
                $foto3 =  $this->upload->data()['file_name'];
                $flagStatus = true;
            } else {
                $flagStatus = false;
            }
            // apakah upload berhasil
        }

        $id = $this->post('id_wisata');
        if ($flagStatus) {
            $data = array(
                'ulasan' => $this->post('ulasan'),
                'id_wisata' => $id,
                'foto1' => $foto1,
                'foto2' => $foto2,
                'foto3' => $foto3,
            );
            $post = $this->api_m_pariwisata->post_ulasan($data);

            if ($post) {
                $this->response(
                    array(
                        'status' => true,
                        'message' => 'Ulasan berhasil ditambah',
                        'data' => $data,
                    ),
                    200
                );
            } else {
                $this->response(array(
                    'status' => false,
                    'message' => 'Gagal menambahkan ulasan',
                    'data' => [],
                ), 200);
            }
        } else {
            $this->response(array(
                'status' => false,
                'message' => 'Gambar tidak sesuai format',
                'data' => [],
            ), 200);
        }
    }
}
