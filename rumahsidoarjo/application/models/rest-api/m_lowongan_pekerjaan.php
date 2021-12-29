<?php

class m_lowongan_pekerjaan extends CI_Model
{
    public function getLowonganPekerjaan($id = null)
    {
        $this->db->select('*');
        $this->db->from('lowongan');
        $this->db->join('perusahaan', 'perusahaan.id=lowongan.id');


        if ($id === null) {
            return $this->db->get()->result_array();
        } else {
            $this->db->where('id_lowongan', $id);
            return $this->db->get()->row_array();
        }
    }
}
