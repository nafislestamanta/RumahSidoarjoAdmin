<?php

class m_pariwisata extends CI_Model
{
    public function post_ulasan($data)
    {
        return $this->db->insert('ulasan_wisata', $data);
    }

    public function getWisataPemancingan($id = null)
    {
        $this->db->select('*');
        $this->db->from('pariwisata');
        $this->db->join('kategori_wisata', 'kategori_wisata.id_kategori_wisata=pariwisata.id_kategori_wisata');
        $this->db->where('kategori= "pemancingan"');

        if ($id === null) {
            return $this->db->get()->result_array();
        } else {
            $this->db->where('id_wisata', $id);
            return $this->db->get()->result_array();
        }
    }

    public function getWisataSejarah($id = null)
    {
        $this->db->select('*');
        $this->db->from('pariwisata');
        $this->db->join('kategori_wisata', 'kategori_wisata.id_kategori_wisata=pariwisata.id_kategori_wisata');
        $this->db->where('kategori= "sejarah"');

        if ($id === null) {
            return $this->db->get()->result_array();
        } else {
            $this->db->where('id_wisata', $id);
            return $this->db->get()->result_array();
        }
    }

    public function getWisataKuliner($id = null)
    {
        $this->db->select('*');
        $this->db->from('pariwisata');
        $this->db->join('kategori_wisata', 'kategori_wisata.id_kategori_wisata=pariwisata.id_kategori_wisata');
        $this->db->where('kategori= "kuliner"');

        if ($id === null) {
            return $this->db->get()->result_array();
        } else {
            $this->db->where('id_wisata', $id);
            return $this->db->get()->result_array();
        }
    }
}
