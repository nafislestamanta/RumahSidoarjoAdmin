<?php

class m_sekolah extends CI_Model
{
    // public function post_ulasan($data)
    // {
    //     return $this->db->insert('ulasan_wisata', $data);
    // }


    public function getSekolahSD($id = null)
    {
        $this->db->select('*');
        $this->db->from('sekolah');
        $this->db->join('kelurahan', 'kelurahan.id_kelurahan=sekolah.id_kelurahan');

        if ($id === null) {
            $this->db->where('jenjang="SD"');
            return $this->db->get()->result_array();
        } else {
            $this->db->where('id_sekolah', $id);
            return $this->db->get()->result_array();
        }
    }

    public function getSekolahSMP($id = null)
    {
        $this->db->select('*');
        $this->db->from('sekolah');
        $this->db->join('kelurahan', 'kelurahan.id_kelurahan=sekolah.id_kelurahan');

        if ($id === null) {
            $this->db->where('jenjang="SMP"');
            return $this->db->get()->result_array();
        } else {
            $this->db->where('id_sekolah', $id);
            return $this->db->get()->result_array();
        }
    }

    public function getSekolahSLB($id = null)
    {
        $this->db->select('*');
        $this->db->from('sekolah');
        $this->db->join('kelurahan', 'kelurahan.id_kelurahan=sekolah.id_kelurahan');

        if ($id === null) {
            $this->db->where('jenjang="SLB"');
            return $this->db->get()->result_array();
        } else {
            $this->db->where('id_sekolah', $id);
            return $this->db->get()->result_array();
        }
    }
}