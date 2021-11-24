<?php

class m_layananPublik extends CI_Model
{
    public function getKategori($id = null)
    {
        $this->db->select('*');
        $this->db->from('layanan_publik');
        $this->db->join('kategori_layanan', 'kategori_layanan.id_kategorilayanan=layanan_publik.id_kategorilayanan');
        $this->db->where('layanan_publik.id_kategorilayanan', $id);
        $query = $this->db->get()->result_array();

        if ($id === null) {
            return $this->db->get('kategori_layanan')->result_array();
        } else {
            return $query;
        }
    }

    public function getLayanan($id_layanan)
    {
        $this->db->select('*');
        $this->db->from('layanan_publik');
        $this->db->join('kategori_layanan', 'kategori_layanan.id_kategorilayanan=layanan_publik.id_kategorilayanan');
        $this->db->where('layanan_publik.id_layanan', $id_layanan);

        return $this->db->get()->result_array();
    }
}
