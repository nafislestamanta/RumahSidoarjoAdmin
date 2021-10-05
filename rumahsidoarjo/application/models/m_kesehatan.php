<?php
class m_kesehatan extends CI_Model
{
    public function pkmu()
    {
        $this->db->select('*');
        $this->db->from('kesehatan');
        $this->db->join('kecamatan', 'kecamatan.id_kecamatan=kesehatan.id_kecamatan');
        $this->db->where('kategori="PKM UTAMA"');
        $query = $this->db->get();
        return $query;
    }

    public function pkm_u($id)
    {
        $this->db->select('*');
        $this->db->from('kesehatan');
        $this->db->join('kecamatan', 'kecamatan.id_kecamatan=kesehatan.id_kecamatan');
        $this->db->where('id_kesehatan', $id);
        $query = $this->db->get();
        return $query;
    }

    public function rumahsakit()
    {
        $this->db->select('*');
        $this->db->from('kesehatan');
        $this->db->join('kecamatan', 'kecamatan.id_kecamatan=kesehatan.id_kecamatan');
        $this->db->where('kategori="RSU"');
        $query = $this->db->get();
        return $query;
    }

    public function rsu($id)
    {
        $this->db->select('*');
        $this->db->from('kesehatan');
        $this->db->join('kecamatan', 'kecamatan.id_kecamatan=kesehatan.id_kecamatan');
        $this->db->where('id_kesehatan', $id);
        $query = $this->db->get();
        return $query;
    }

    public function pkmp()
    {
        $this->db->select('*');
        $this->db->from('kesehatan');
        $this->db->join('kecamatan', 'kecamatan.id_kecamatan=kesehatan.id_kecamatan');
        $this->db->where('kategori="PKM PEMBANTU"');
        $query = $this->db->get();
        return $query;
    }

    public function pkm_p($id)
    {
        $this->db->select('*');
        $this->db->from('kesehatan');
        $this->db->join('kecamatan', 'kecamatan.id_kecamatan=kesehatan.id_kecamatan');
        $this->db->where('id_kesehatan', $id);
        $query = $this->db->get();
        return $query;
    }

    public function kecamatan()
    {
        return $this->db->get('kecamatan');
    }

    public function delete($id)
    {
        return $this->db->where('id_kesehatan', $id)->delete('kesehatan');
    }

    public function tambah($data)
    {
        return $this->db->insert('kesehatan', $data);
    }

    public function update($data, $id)
    {
        return $this->db->where('id_kesehatan', $id)->update('kesehatan', $data);
    }
}