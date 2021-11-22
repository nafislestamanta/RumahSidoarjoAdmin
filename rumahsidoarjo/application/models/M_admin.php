<?php
class M_admin extends CI_Model
{
    public function tampil()
    {
        $this->db->select('*');
        $this->db->from('user_admin');
        $this->db->join('rule_admin', 'rule_admin.id_role=user_admin.id_role');
        $query = $this->db->get();
        return $query;
    }

    public function edit($id)
    {
        $this->db->select('*');
        $this->db->from('user_admin');
        $this->db->join('rule_admin', 'rule_admin.id_role=user_admin.id_role');
        $this->db->where('id_admin', $id);
        $query = $this->db->get();
        return $query;
    }

    public function role()
    {
        $this->db->select('*');
        $this->db->from('rule_admin');
        $query = $this->db->get();
        return $query;
    }

    public function tambah($data)
    {
        return $this->db->insert('user_admin', $data);
    }

    public function delete($id)
    {
        return $this->db->where('id_admin', $id)->delete('user_admin');
    }

    public function update($data, $id)
    {
        return $this->db->where('id_admin', $id)->update('user_admin', $data);
    }

    public function update_password($data, $id)
    {
        return $this->db->where('id_admin', $id)->update('user_admin', $data);
    }

    public function tampil_profile($id)
    {
        $this->db->select('*');
        $this->db->from('user_admin');
        $this->db->where('id_admin', $id);
        $query = $this->db->get();
        return $query;
    }
}
