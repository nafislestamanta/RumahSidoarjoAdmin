<?php

class M_layanan_publik extends CI_model
{
    private $_table = "layanan_publik";
    private $_tables = "pengaduan_umum";

    public $id_layanan;
    public $nama;
    public $deskripsi;

    public function tampil_informasi()
    {
        $this->db->select('*');
        $this->db->from('layanan_publik');
        $query = $this->db->get();
        return $query;
    }

    public function delete($id)
    {
        return $this->db->where('id_layanan', $id)->delete('layanan_publik');
    }

    public function delete_lowongan($id)
    {
        return $this->db->where('id_lowongan', $id)->delete('lowongan');
    }

    public function save_informasi()
    {
        $post = $this->input->post();
        $this->nama = $post["nama"];
        $this->deskripsi = $post["deskripsi"];
        return $this->db->insert($this->_table, $this);
    }

    public function edit_informasi($id)
    {
        $this->db->select('*');
        $this->db->from('layanan_publik');
        $this->db->where('id_layanan', $id);
        $query = $this->db->get();
        return $query;
    }

    public function update_informasi($data, $id)
    {
        return $this->db->where('id_layanan', $id)->update('layanan_publik', $data);
    }

    public function tampil_pengaduan()
    {
        $this->db->select('*');
        $this->db->from('pengaduan_umum');
        $this->db->join('user_mobile', 'user_mobile.NIK=pengaduan_umum.NIK');
        $query = $this->db->get();
        return $query;
    }

    public function tampil_pelayanan()
    {
        $this->db->select('*');
        $this->db->from('pengaduan_umum');
        $this->db->join('user_mobile', 'user_mobile.NIK=pengaduan_umum.NIK');
        $this->db->where('kategori="Pelayanan"');
        $query = $this->db->get();
        return $query;
    }

    public function tampil_fasilitas_publik()
    {
        $this->db->select('*');
        $this->db->from('pengaduan_umum');
        $this->db->join('user_mobile', 'user_mobile.NIK=pengaduan_umum.NIK');
        $this->db->where('kategori="Fasilitas Publik"');
        $query = $this->db->get();
        return $query;
    }

    public function tampil_kesehatan()
    {
        $this->db->select('*');
        $this->db->from('pengaduan_umum');
        $this->db->join('user_mobile', 'user_mobile.NIK=pengaduan_umum.NIK');
        $this->db->where('kategori="Kesehatan"');
        $query = $this->db->get();
        return $query;
    }

    public function delete_pengaduan($id)
    {
        return $this->db->where('id_pengaduan', $id)->delete('pengaduan_umum');
    }

    public function detail($id)
    {
        $this->db->select('*');
        $this->db->from('pengaduan_umum');
        $this->db->join('user_mobile', 'user_mobile.NIK=pengaduan_umum.NIK');
        $this->db->where('id_pengaduan', $id);
        $query = $this->db->get();
        return $query;
    }

    public function update_pengaduan($data, $id)
    {
        return $this->db->where('id_pengaduan', $id)->update('pengaduan_umum', $data);
    }
}