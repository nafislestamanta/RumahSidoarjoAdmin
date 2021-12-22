<?php

class m_umkm extends CI_Model
{
    public function post_ulasanUmkm($data)
    {
        return $this->db->insert('ulasan_umkm', $data);
    }

    public function getKerajinan($id = null)
    {
        $this->db->select('*');
        $this->db->from('umkm');
        $this->db->where('kategori = "Kerajinan"');

        if ($id === null) {
            return $this->db->get()->result_array();
        } else {
            $this->db->where('id_umkm', $id);
            return $this->db->get()->row_array();
        }
    }

    public function getMakanan($id = null)
    {
        $this->db->select('*');
        $this->db->from('umkm');
        $this->db->where('kategori = "Makanan"');

        if ($id === null) {
            return $this->db->get()->result_array();
        } else {
            $this->db->where('id_umkm', $id);
            return $this->db->get()->row_array();
        }
    }

    public function getPertanian($id = null)
    {
        $this->db->select('*');
        $this->db->from('umkm');
        $this->db->where('kategori = "Pertanian"');

        if ($id === null) {
            return $this->db->get()->result_array();
        } else {
            $this->db->where('id_umkm', $id);
            return $this->db->get()->row_array();
        }
    }
}
