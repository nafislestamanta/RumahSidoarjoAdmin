<?php

class m_layanan_publik extends CI_Model
{
    public function getKategori($id = null)
    {
        $this->db->select('*');
        $this->db->from('kategori_layanan');


        if ($id === null) {
            return $this->db->get()->result_array();
        } else {
            $this->db->where('id_kategorilayanan', $id);
            return $this->db->get()->row_array();
        }
    }

    public function getLayananPublikKategori($id = null)
    {
        $this->db->select('*');
        $this->db->from('layanan_publik');
        $this->db->join('kategori_layanan', 'kategori_layanan.id_kategorilayanan=layanan_publik.id_kategorilayanan');



        if ($id === null) {
            return $this->db->get()->result_array();
        } else {
            $this->db->where('layanan_publik.id_kategorilayanan', $id);
            return $this->db->get()->result_array();
        }
    }

    public function getLayananPublik($id = null)
    {
        $this->db->select('*');
        $this->db->from('layanan_publik');
        $this->db->join('kategori_layanan', 'kategori_layanan.id_kategorilayanan=layanan_publik.id_kategorilayanan');



        if ($id === null) {
            return $this->db->get()->result_array();
        } else {
            $this->db->where('id_layanan', $id);
            return $this->db->get()->result_array();
        }
    }
}
