<?php

class m_berita_informasi extends CI_Model
{
    public function getBerita($id = null)
    {

        if ($id === null) {
            return $this->db->get('berita_informasi')->result_array();
        } else {
            return $this->db->get_where('berita_informasi', ['kode' => $id])->result_array();
        }
    }

    public function postAkun($data)
    {
        return $this->db->insert('user_mobile', $data);
    }

    public function putAkun($id, $data)
    {
        return $this->db->where('NIK', $id)->update('user_mobile', $data);
    }
}
