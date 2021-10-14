<?php
class M_lombadanbudaya extends CI_Model
{
    private $_table = "lomba_budaya";


    public function tampil()
    {
        $this->db->select('*');
        $this->db->from('lomba_budaya');
        $query = $this->db->get();
        return $query;
    }


    public function detail_lomba($id)
    {
        $this->db->select('*');
        $this->db->from('lomba_budaya');
        $this->db->where('id_lomba', $id);
        $query = $this->db->get();
        return $query;
    }

    public function tambah($data)
    {
        return $this->db->insert('lomba_budaya', $data);
    }

    public function delete($id)
    {
        $delete = $this->db->where('id_lomba', $id)->delete('lomba_budaya');
        return $delete;
    }

    public function update_lomba($data, $id)
    {
        return $this->db->where('id_lomba', $id)->update('lomba_budaya', $data);
    }


    public function save()
    {
        $post = $this->input->post();
        $this->nama_lomba = $post["nama_lomba"];
        $this->tgl_publish = $post["tgl_publish"];
        $this->deskripsi = $post["deskripsi"];
        $this->foto = $_FILES["foto"]['name'];
        $this->link = $post["link"];
        return $this->db->insert($this->_table, $this);
    }

    public function detail_edit($id)
    {
        $this->db->select('*');
        $this->db->from('lomba_budaya');
        $this->db->where('id_lomba', $id);
        $query = $this->db->get();
        return $query;
    }
}