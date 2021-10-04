<?php

class M_dishub extends CI_model
{
    private $_table = "cctv";

    public $id_cctv;
    public $nama;
    public $alamat;
    public $status;
    public $link;

    // // save tambah berita dan informasi
    // public function save()
    // {
    //     $post = $this->input->post();
    //     $this->kategori = $post["kategori"];
    //     $this->judul = $post["judul"];
    //     $this->tanggal_publish = $post["tanggal_publish"];
    //     $this->deskripsi = $post["deskripsi"];
    //     $this->gambar = $_FILES["gambar"]['name'];
    //     $this->link = $post["link"];
    //     return $this->db->insert($this->_table, $this);
    // }
    //tampil semua kategori
    public function tampil()
    {
        $this->db->select('*');
        $this->db->from('cctv');
        $query = $this->db->get();
        return $query;
    }

    public function delete($id)
    {
        return $this->db->where('id_cctv', $id)->delete('cctv');
    }

    public function savecctv()
    {
        $post = $this->input->post();
        $this->nama = $post["nama"];
        $this->alamat = $post["alamat"];
        $this->status = $post["status"];
        $this->link = $post["link"];
        return $this->db->insert($this->_table, $this);
    }

    public function detail($id)
    {
        $this->db->select('*');
        $this->db->from('cctv');
        $this->db->where('id_cctv', $id);
        $query = $this->db->get();
        return $query;
    }

    public function update_cctv($data, $id)
    {
        return $this->db->where('id_cctv', $id)->update('cctv', $data);
    }
}