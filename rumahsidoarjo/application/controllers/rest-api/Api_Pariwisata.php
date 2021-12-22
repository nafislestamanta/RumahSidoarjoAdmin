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

    function ulasan_get()
    {
        $id = $this->get('id_wisata');
        $this->db->join('user_mobile', 'user_mobile.NIK=ulasan_wisata.NIK');
        $this->db->order_by('id_ulasan', 'DESC');
        $ulasan = $this->db->get_where("ulasan_wisata", ["id_wisata" => $id])->result_array();

        $this->response(
            array(
                'status' => true,
                'message' => 'berhasil mengambil data',
                'data' => $ulasan,
            ),
            200
        );
    }

    function sejarah_get()
    {
        $id = $this->get('id_wisata');

        if ($id == '') {
            $pariwisata = $this->api_m_pariwisata->getWisataSejarah();


            $this->response(
                array(
                    'status' => true,
                    'message' => 'berhasil mengambil data',
                    'data' => $pariwisata,
                ),
                200
            );
        } else {
            $pariwisata = $this->api_m_pariwisata->getWisataSejarah($id);
            $tarif = $this->db->get_where("tarif_wisata", ["id_wisata" => $id])->result_array();
            $menu = $this->db->get_where("menu_kuliner", ["id_wisata" => $id])->result_array();
            $this->db->join('user_mobile', 'user_mobile.NIK=ulasan_wisata.NIK');
            $this->db->limit(2);
            $this->db->order_by('id_ulasan', 'DESC');
            $ulasan = $this->db->get_where("ulasan_wisata", ["id_wisata" => $id])->result_array();

            $this->response(
                array(
                    'status' => true,
                    'message' => 'berhasil mengambil data',
                    'pariwisata' => $pariwisata,
                    'tarif' => $tarif,
                    'ulasan' => $ulasan,
                    'menu' => $menu,
                ),
                200
            );
        }
    }

    function kuliner_get()
    {
        $id = $this->get('id_wisata');

        if ($id == '') {
            $pariwisata = $this->api_m_pariwisata->getWisataKuliner();


            $this->response(
                array(
                    'status' => true,
                    'message' => 'berhasil mengambil data',
                    'data' => $pariwisata,
                ),
                200
            );
        } else {
            $pariwisata = $this->api_m_pariwisata->getWisataKuliner($id);
            $tarif = $this->db->get_where("tarif_wisata", ["id_wisata" => $id])->result_array();
            $menu = $this->db->get_where("menu_kuliner", ["id_wisata" => $id])->result_array();
            $this->db->join('user_mobile', 'user_mobile.NIK=ulasan_wisata.NIK');
            $this->db->limit(2);
            $this->db->order_by('id_ulasan', 'DESC');
            $ulasan = $this->db->get_where("ulasan_wisata", ["id_wisata" => $id])->result_array();

            $this->response(
                array(
                    'status' => true,
                    'message' => 'berhasil mengambil data',
                    'pariwisata' => $pariwisata,
                    'tarif' => $tarif,
                    'ulasan' => $ulasan,
                    'menu' => $menu,
                ),
                200
            );
        }
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
            $menu = $this->db->get_where("menu_kuliner", ["id_wisata" => $id])->result_array();
            $this->db->join('user_mobile', 'user_mobile.NIK=ulasan_wisata.NIK');
            $this->db->limit(2);
            $this->db->order_by('id_ulasan', 'DESC');
            $ulasan = $this->db->get_where("ulasan_wisata", ["id_wisata" => $id])->result_array();

            $this->response(
                array(
                    'status' => true,
                    'message' => 'berhasil mengambil data',
                    'pariwisata' => $pariwisata,
                    'tarif' => $tarif,
                    'ulasan' => $ulasan,
                    'menu' => $menu,
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

        if (isset($_FILES['foto1']) && $_FILES['foto1']['error'] != 4) {
            // do upload
            if ($this->upload->do_upload('foto1')) {
                $foto1 = $this->upload->data()['file_name'];
                $flagStatus = true;
            } else {
                $flagStatus = false;
            }
            // apakah upload berhasil
        }
        if (isset($_FILES['foto2']) && $_FILES['foto2']['error'] != 4) {
            // do upload
            if ($this->upload->do_upload('foto2')) {
                $foto2 = $this->upload->data()['file_name'];
                $flagStatus = true;
            } else {
                $flagStatus = false;
            }
            // apakah upload berhasil
        }
        if (isset($_FILES['foto3']) && $_FILES['foto3']['error'] != 4) {
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
                'NIK' => $this->post('NIK'),
                'ulasan' => $this->post('ulasan'),
                'id_wisata' => $id,
                'tanggal_upload' => date("Y-m-d", time()),
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
            $data = array(
                'NIK' => $this->post('NIK'),
                'ulasan' => $this->post('ulasan'),
                'id_wisata' => $id,
                'tanggal_upload' => date("Y-m-d", time()),
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
        }
    }
}
