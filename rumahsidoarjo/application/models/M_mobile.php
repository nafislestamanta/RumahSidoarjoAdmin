<?php
class M_mobile extends CI_Model
{
    public function tampil()
    {
        $this->db->select('*');
        $this->db->from('user_mobile');
        $this->db->where('status=1');
        $query = $this->db->get();
        return $query;
    }

    public function tampil_validasi()
    {
        $this->db->select('*');
        $this->db->from('user_mobile');
        $this->db->where('status=0');
        $query = $this->db->get();
        return $query;
    }

    public function detail($id)
    {
        $this->db->select('*');
        $this->db->from('user_mobile');
        $this->db->where('NIK', $id);
        $query = $this->db->get();
        return $query;
    }

    public function delete($id)
    {
        $delete = $this->db->where('NIK', $id)->delete('panik_button');
        $delete = $this->db->where('NIK', $id)->delete('user_mobile');
        return $delete;
    }

    public function update($data, $id)
    {
        return $this->db->where('NIK', $id)->update('user_mobile', $data);
    }
}
