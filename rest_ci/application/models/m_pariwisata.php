<?php

class m_pariwisata extends CI_Model
{
    public function getPariwisata($id = null)
    {
        $this->db->select('*');
        $this->db->from('pariwisata');
        $this->db->join('kategori_wisata', 'kategori_wisata.id_kategori_wisata=pariwisata.id_kategori_wisata');

        if ($id === null) {
            return $this->db->get()->result_array();
        } else {
            return $this->db->get_where('pariwisata', ['id_wisata' => $id])->result_array();
        }
    }
}
