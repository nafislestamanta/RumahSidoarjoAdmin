<?php

class m_umkm extends CI_Model
{
    public function getUmkm($id = null)
    {

        if ($id === null) {
            return $this->db->get_where('umkm', ['kategori' => 'Kerajinan'])->result_array();
        } else {
            return $this->db->get_where('umkm', ['id_umkm' => $id])->result_array();
        }
    }

    public function getPertanian($id = null)
    {

        if ($id === null) {
            return $this->db->get_where('umkm', ['kategori' => 'Pertanian'])->result_array();
        } else {
            return $this->db->get_where('umkm', ['id_umkm' => $id])->result_array();
        }
    }

    public function getMakanan($id = null)
    {

        if ($id === null) {
            return $this->db->get_where('umkm', ['kategori' => 'Makanan'])->result_array();
        } else {
            return $this->db->get_where('umkm', ['id_umkm' => $id])->result_array();
        }
    }
}
