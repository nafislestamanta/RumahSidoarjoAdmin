<?php

class m_cctv extends CI_Model
{
    public function getCctv($id = null)
    {

        if ($id === null) {
            return $this->db->get('cctv')->result_array();
        } else {
            return $this->db->get_where('cctv', ['id_cctv' => $id])->result_array();
        }
    }
}
