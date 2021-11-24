<?php

class m_komunitas extends CI_Model
{
    public function getKomunitas($id = null)
    {

        if ($id === null) {
            return $this->db->get('komunitas')->result_array();
        } else {
            return $this->db->get_where('komunitas', ['id_komunitas' => $id])->result_array();
        }
    }
}
