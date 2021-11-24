<?php

class m_kesehatan extends CI_Model
{
    public function getPKMU($id = null)
    {
        $this->db->select('*');
        $this->db->from('kesehatan');
        $this->db->join('kecamatan', 'kecamatan.id_kecamatan=kesehatan.id_kesehatan');
        $this->db->where('kategori = "PKM UTAMA"');

        if ($id === null) {
            return $this->db->get()->result_array();
        } else {
            $this->db->where('id_kesehatan', $id);
            return $this->db->get()->result_array();
        }
    }

    public function getPKMP($id = null)
    {
        $this->db->select('*');
        $this->db->from('kesehatan');
        $this->db->join('kecamatan', 'kecamatan.id_kecamatan=kesehatan.id_kesehatan');
        $this->db->where('kategori = "PKM PEMBANTU"');

        if ($id === null) {
            return $this->db->get()->result_array();
        } else {
            $this->db->where('id_kesehatan', $id);
            return $this->db->get()->result_array();
        }
    }

    public function getRSU($id = null)
    {
        $this->db->select('*');
        $this->db->from('kesehatan');
        $this->db->join('kecamatan', 'kecamatan.id_kecamatan=kesehatan.id_kesehatan');
        $this->db->where('kategori = "RSU"');

        if ($id === null) {
            return $this->db->get()->result_array();
        } else {
            $this->db->where('id_kesehatan', $id);
            return $this->db->get()->result_array();
        }
    }
}
