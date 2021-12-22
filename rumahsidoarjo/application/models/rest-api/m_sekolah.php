<?php

class m_sekolah extends CI_Model
{

    public function getJenjangSD($id = null)
    {
        $this->db->select('*');
        $this->db->from('sekolah');
        $this->db->join('kelurahan', 'kelurahan.id_kelurahan=sekolah.id_kelurahan');
        $this->db->join('kecamatan', 'kecamatan.id_kecamatan=kelurahan.id_kecamatan');
        $this->db->where('jenjang = "SD"');

        if ($id === null) {
            return $this->db->get()->result_array();
        } else {
            $this->db->where('id_sekolah', $id);
            return $this->db->get()->row_array();
        }
    }

    public function getJenjangSLB($id = null)
    {
        $this->db->select('*');
        $this->db->from('sekolah');
        $this->db->join('kelurahan', 'kelurahan.id_kelurahan=sekolah.id_kelurahan');
        $this->db->join('kecamatan', 'kecamatan.id_kecamatan=kelurahan.id_kecamatan');
        $this->db->where('jenjang = "SLB"');

        if ($id === null) {
            return $this->db->get()->result_array();
        } else {
            $this->db->where('id_sekolah', $id);
            return $this->db->get()->row_array();
        }
    }

    public function getJenjangSMP($id = null)
    {
        $this->db->select('*');
        $this->db->from('sekolah');
        $this->db->join('kelurahan', 'kelurahan.id_kelurahan=sekolah.id_kelurahan');
        $this->db->join('kecamatan', 'kecamatan.id_kecamatan=kelurahan.id_kecamatan');
        $this->db->where('jenjang = "SMP"');

        if ($id === null) {
            return $this->db->get()->result_array();
        } else {
            $this->db->where('id_sekolah', $id);
            return $this->db->get()->row_array();
        }
    }
}
