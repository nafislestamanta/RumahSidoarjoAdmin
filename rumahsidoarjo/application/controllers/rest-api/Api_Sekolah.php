<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Api_Sekolah extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
        $this->load->model('rest-api/m_sekolah');
    }

    //Menampilkan data sekolah semua dan berdasarkan id
    function index_get()
    {
        $id = $this->get('id_sekolah');

        if ($id == '') {
            $sekolah = $this->m_sekolah->getJenjangSD();


            $this->response(
                array(
                    'status' => true,
                    'message' => 'berhasil mengambil data',
                    'data' => $sekolah,
                ),
                200
            );
        } else {
            $sekolah = $this->m_sekolah->getJenjangSD($id);
            $ekskul = $this->db->get_where("ekskul_sekolah", ["id_sekolah" => $id])->result_array();
            $fasilitas = $this->db->get_where("fasilitas_sekolah", ["id_sekolah" => $id])->result_array();

            $this->response(
                array(
                    'status' => true,
                    'message' => 'berhasil mengambil data',
                    'sekolah' => $sekolah,
                    'ekskul' => $ekskul,
                    'fasilitas' => $fasilitas,
                ),
                200
            );
        }
    }

    //Menampilkan data sekolah semua dan berdasarkan id
    function slb_get()
    {
        $id = $this->get('id_sekolah');

        if ($id == '') {
            $sekolah = $this->m_sekolah->getJenjangSLB();


            $this->response(
                array(
                    'status' => true,
                    'message' => 'berhasil mengambil data',
                    'data' => $sekolah,
                ),
                200
            );
        } else {
            $sekolah = $this->m_sekolah->getJenjangSLB($id);
            $ekskul = $this->db->get_where("ekskul_sekolah", ["id_sekolah" => $id])->result_array();
            $fasilitas = $this->db->get_where("fasilitas_sekolah", ["id_sekolah" => $id])->result_array();

            $this->response(
                array(
                    'status' => true,
                    'message' => 'berhasil mengambil data',
                    'sekolah' => $sekolah,
                    'ekskul' => $ekskul,
                    'fasilitas' => $fasilitas,
                ),
                200
            );
        }
    }

    //Menampilkan data sekolah semua dan berdasarkan id
    function smp_get()
    {
        $id = $this->get('id_sekolah');

        if ($id == '') {
            $sekolah = $this->m_sekolah->getJenjangSMP();


            $this->response(
                array(
                    'status' => true,
                    'message' => 'berhasil mengambil data',
                    'data' => $sekolah,
                ),
                200
            );
        } else {
            $sekolah = $this->m_sekolah->getJenjangSMP($id);
            $ekskul = $this->db->get_where("ekskul_sekolah", ["id_sekolah" => $id])->result_array();
            $fasilitas = $this->db->get_where("fasilitas_sekolah", ["id_sekolah" => $id])->result_array();

            $this->response(
                array(
                    'status' => true,
                    'message' => 'berhasil mengambil data',
                    'sekolah' => $sekolah,
                    'ekskul' => $ekskul,
                    'fasilitas' => $fasilitas,
                ),
                200
            );
        }
    }
}
