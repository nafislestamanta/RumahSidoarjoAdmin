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

    public function getLayanan($id)
    {
        $this->db->select('*');
        $this->db->from('layanan_publik');
        $this->db->join('kategori_layanan', 'kategori_layanan.id_kategorilayanan=layanan_publik.id_kategorilayanan');
        $this->db->where('layanan_publik.id_layanan', $id);

        return $this->db->get();
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
