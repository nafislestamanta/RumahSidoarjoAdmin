<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Api_Umkm extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
        $this->load->model('rest-api/m_umkm');
    }

    //Menampilkan data Umkm Kerajinan
    function index_get()
    {
        $id = $this->get('id_umkm');

        if ($id == '') {
            $umkm = $this->m_umkm->getKerajinan();


            $this->response(
                array(
                    'status' => true,
                    'message' => 'berhasil mengambil data',
                    'data' => $umkm,
                ),
                200
            );
        } else {
            $umkm = $this->m_umkm->getKerajinan($id);
            $this->db->join('user_mobile', 'user_mobile.NIK=ulasan_umkm.NIK');
            $this->db->limit(2);
            $this->db->order_by('id_ulasan', 'DESC');
            $ulasan = $this->db->get_where("ulasan_umkm", ["id_umkm" => $id])->result_array();

            $this->response(
                array(
                    'status' => true,
                    'message' => 'berhasil mengambil data',
                    'umkm' => $umkm,
                    'ulasan' => $ulasan,
                ),
                200
            );
        }
    }

    //Menampilkan data Umkm Makanan
    function makanan_get()
    {
        $id = $this->get('id_umkm');

        if ($id == '') {
            $umkm = $this->m_umkm->getMakanan();


            $this->response(
                array(
                    'status' => true,
                    'message' => 'berhasil mengambil data',
                    'data' => $umkm,
                ),
                200
            );
        } else {
            $umkm = $this->m_umkm->getMakanan($id);
            $this->db->join('user_mobile', 'user_mobile.NIK=ulasan_umkm.NIK');
            $this->db->limit(2);
            $this->db->order_by('id_ulasan', 'DESC');
            $ulasan = $this->db->get_where("ulasan_umkm", ["id_umkm" => $id])->result_array();

            $this->response(
                array(
                    'status' => true,
                    'message' => 'berhasil mengambil data',
                    'umkm' => $umkm,
                    'ulasan' => $ulasan,
                ),
                200
            );
        }
    }

    //Menampilkan data Umkm Makanan
    function pertanian_get()
    {
        $id = $this->get('id_umkm');

        if ($id == '') {
            $umkm = $this->m_umkm->getPertanian();


            $this->response(
                array(
                    'status' => true,
                    'message' => 'berhasil mengambil data',
                    'data' => $umkm,
                ),
                200
            );
        } else {
            $umkm = $this->m_umkm->getPertanian($id);
            $this->db->join('user_mobile', 'user_mobile.NIK=ulasan_umkm.NIK');
            $this->db->limit(2);
            $this->db->order_by('id_ulasan', 'DESC');
            $ulasan = $this->db->get_where("ulasan_umkm", ["id_umkm" => $id])->result_array();

            $this->response(
                array(
                    'status' => true,
                    'message' => 'berhasil mengambil data',
                    'umkm' => $umkm,
                    'ulasan' => $ulasan,
                ),
                200
            );
        }
    }

    function ulasan_get()
    {
        $id = $this->get('id_umkm');
        $this->db->join('user_mobile', 'user_mobile.NIK=ulasan_umkm.NIK');
        $this->db->order_by('id_ulasan', 'DESC');
        $ulasan = $this->db->get_where("ulasan_umkm", ["id_umkm" => $id])->result_array();

        $this->response(
            array(
                'status' => true,
                'message' => 'berhasil mengambil data',
                'data' => $ulasan,
            ),
            200
        );
    }

    // Menambah ulasan Umkm
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

        $id = $this->post('id_umkm');
        if ($flagStatus) {
            $data = array(
                'NIK' => $this->post('NIK'),
                'ulasan' => $this->post('ulasan'),
                'id_umkm' => $id,
                'tanggal_upload' => date("Y-m-d", time()),
                'foto1' => $foto1,
                'foto2' => $foto2,
                'foto3' => $foto3,
            );
            $post = $this->m_umkm->post_ulasanUmkm($data);

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
                'id_umkm' => $id,
                'tanggal_upload' => date("Y-m-d", time()),
            );
            $post = $this->m_umkm->post_ulasanUmkm($data);

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
