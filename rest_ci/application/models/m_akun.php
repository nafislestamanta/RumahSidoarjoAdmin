<?php

class m_akun extends CI_Model
{
    public function getAkun($id = null)
    {

        if ($id === null) {
            return $this->db->get('user_mobile')->result_array();
        } else {
            return $this->db->get_where('user_mobile', ['NIK' => $id])->result_array();
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