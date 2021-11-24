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
            return $this->db->get_where('kesehatan', ['id_kesehatan' => $id])->result_array();
        }
    }
}
