<?php
class M_event extends CI_Model
{
    private $_table = "event";


    public function tampil()
    {
        $this->db->select('*');
        $this->db->from('event');
        $query = $this->db->get();
        return $query;
    }

    public function tampilagenda()
    {
        $this->db->select('*');
        $this->db->from('event');
        $this->db->where('kategori="Agenda Kota"');
        $query = $this->db->get();
        return $query;
    }

    public function tampillombadanbudaya()
    {
        $this->db->select('*');
        $this->db->from('event');
        $this->db->where('kategori="Lomba Budaya"');
        $query = $this->db->get();
        return $query;
    }


    public function detail_event($id)
    {
        $this->db->select('*');
        $this->db->from('event');
        $this->db->where('id_event', $id);
        $query = $this->db->get();
        return $query;
    }

    public function tambah($data)
    {
        return $this->db->insert('event', $data);
    }

    public function delete($id)
    {
        $delete = $this->db->where('id_event', $id)->delete('event');
        return $delete;
    }

    public function update_event($data, $id)
    {
        return $this->db->where('id_event', $id)->update('event', $data);
    }


    public function save()
    {
        $post = $this->input->post();
        $this->kategori = $post["kategori"];
        $this->nama_event = $post["nama_event"];
        $this->tgl_posting = $post["tgl_posting"];
        $this->penyelenggara = $post["penyelenggara"];
        $this->tempat_kegiatan = $post["tempat_kegiatan"];
        $this->deskripsi = $post["deskripsi"];
        $this->foto1 = $_FILES["foto1"]['name'];
        $this->foto2 = $_FILES["foto2"]['name'];
        $this->foto3 = $_FILES["foto3"]['name'];
        return $this->db->insert($this->_table, $this);
    }

    public function detail_edit($id)
    {
        $this->db->select('*');
        $this->db->from('event');
        $this->db->where('id_event', $id);
        $query = $this->db->get();
        return $query;
    }

    public function update_gambar($id, $data)
    {
        return $this->db->where('id_event', $id)->update('event', $data);
    }
}