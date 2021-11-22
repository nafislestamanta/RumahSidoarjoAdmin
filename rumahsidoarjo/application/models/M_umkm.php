<?php

class M_umkm extends CI_model
{
    private $_table = "umkm";

    public $id_umkm;
    public $kategori;
    public $nama;
    public $alamat;
    public $penanggung_jawab;
    public $foto1 = 'default.jpg';
    public $foto2 = 'default.jpg';
    public $foto3 = 'default.jpg';
    public $deskripsi;
    public $lat;
    public $long;
    public $no_telp;
    public $website;

    // save tambah berita dan informasi

    //tampil semua kategori
    public function tampil()
    {
        $this->db->select('*');
        $this->db->from('umkm');
        $query = $this->db->get();
        return $query;
    }

    public function tampil_kerajinan()
    {
        $this->db->select('*');
        $this->db->from('umkm');
        $this->db->where('kategori="Kerajinan"');
        $query = $this->db->get();
        return $query;
    }

    public function tampil_makanan()
    {
        $this->db->select('*');
        $this->db->from('umkm');
        $this->db->where('kategori="Makanan"');
        $query = $this->db->get();
        return $query;
    }

    public function tampil_pertanian()
    {
        $this->db->select('*');
        $this->db->from('umkm');
        $this->db->where('kategori="Pertanian"');
        $query = $this->db->get();
        return $query;
    }

    public function delete($id)
    {
        return $this->db->where('id_umkm', $id)->delete('umkm');
    }

    public function detail($id)
    {
        $this->db->select('*');
        $this->db->from('umkm');
        $this->db->where('id_umkm', $id);
        $query = $this->db->get();
        return $query;
    }

    public function save()
    {
        $post = $this->input->post();
        $this->kategori = $post["kategori"];
        $this->nama = $post["nama"];
        $this->alamat = $post["alamat"];
        $this->penanggung_jawab = $post["penanggung_jawab"];
        $this->foto1 = $_FILES["foto1"]['name'];
        $this->foto2 = $_FILES["foto2"]['name'];
        $this->foto3 = $_FILES["foto3"]['name'];
        $this->deskripsi = $post["deskripsi"];
        $this->lat = $post["lat"];
        $this->long = $post["long"];
        $this->no_telp = $post["no_telp"];
        $this->website = $post["website"];
        return $this->db->insert($this->_table, $this);
    }

    public function update_umkm($data, $id)
    {
        return $this->db->where('id_umkm', $id)->update('umkm', $data);
    }


    function jmlh_kerajinan()
    {
        $this->db->select('*, COUNT(kategori) as total');
        $this->db->from('umkm');
        $this->db->where('kategori="Kerajinan"');
        $hasil = $this->db->get();
        return $hasil;
    }
    function jmlh_makanan()
    {
        $this->db->select('*, COUNT(kategori) as total');
        $this->db->from('umkm');
        $this->db->where('kategori="Makanan"');
        $hasil = $this->db->get();
        return $hasil;
    }
    function jmlh_pertanian()
    {
        $this->db->select('*, COUNT(kategori) as total');
        $this->db->from('umkm');
        $this->db->where('kategori="Pertanian"');
        $hasil = $this->db->get();
        return $hasil;
    }
}