<?php

class m_layananPublik extends CI_Model
{
    public function getLayananpublik($id = null)
    {

        if ($id === null) {
            return $this->db->get('layanan_publik')->result_array();
        } else {
            return $this->db->get_where('layanan_publik', ['id_layanan_publik' => $id])->result_array();
        }
    }
}
