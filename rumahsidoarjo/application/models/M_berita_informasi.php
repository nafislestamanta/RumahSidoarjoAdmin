<?php

class M_berita_informasi extends CI_model
{
    private $_table = "berita_informasi";

    public $kode;
    public $kategori;
    public $judul;
    public $tanggal_publish;
    public $deskripsi;
    public $gambar = 'default.jpg';
    public $link;

    // save tambah berita dan informasi
    public function save()
    {
        $post = $this->input->post();
        $this->kategori = $post["kategori"];
        $this->judul = $post["judul"];
        $this->tanggal_publish = $post["tanggal_publish"];
        $this->deskripsi = $post["deskripsi"];
        $this->gambar = $_FILES["gambar"]['name'];
        $this->link = $post["link"];
        return $this->db->insert($this->_table, $this);
    }
    //tampil semua kategori
    public function tampil()
    {
        $this->db->select('*');
        $this->db->from('berita_informasi');
        $query = $this->db->get();
        return $query;
    }

    public function delete($id)
    {
        return $this->db->where('kode', $id)->delete('berita_informasi');
    }

    public function tampilberita()
    {
        $this->db->select('*');
        $this->db->from('berita_informasi');
        $this->db->where('kategori="berita"');
        $query = $this->db->get();
        return $query;
    }

    public function tampilinformasi()
    {
        $this->db->select('*');
        $this->db->from('berita_informasi');
        $this->db->where('kategori="informasi"');
        $query = $this->db->get();
        return $query;
    }
 
    public function tampilpengumuman()
    {
        $this->db->select('*');
        $this->db->from('berita_informasi');
        $this->db->where('kategori="pengumuman"');
        $query = $this->db->get();
        return $query;
    }

    public function detail($id)
    {
        $this->db->select('*');
        $this->db->from('berita_informasi');
        $this->db->where('kode', $id);
        $query = $this->db->get();
        return $query;
    }

    public function update_berita($data, $id)
    {
        return $this->db->where('kode', $id)->update('berita_informasi', $data);
    }
}