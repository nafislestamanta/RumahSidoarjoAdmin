<?php

class m_pariwisata extends CI_Model
{
    public function post_ulasan($data)
    {
        return $this->db->insert('ulasan_wisata', $data);
    }

    public function getWisataId($id = null)
    {
        $this->db->select('*');
        $this->db->from('pariwisata');
        $this->db->join('kategori_wisata', 'kategori_wisata.id_kategori_wisata=pariwisata.id_kategori_wisata');

        if ($id === null) {
            return $this->db->get()->result_array();
        } else {
            $this->db->where('id_wisata', $id);
            return $this->db->get()->result_array();
        }
    }
}