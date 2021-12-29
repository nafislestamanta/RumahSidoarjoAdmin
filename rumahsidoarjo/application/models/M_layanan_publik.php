<?php

class M_layanan_publik extends CI_model
{
    private $_table = "layanan_publik";
    private $_tables = "pengaduan_umum";
    private $_table1 = "kategori_layanan";

    public function tampil_informasi()
    {
        $this->db->select('*');
        $this->db->from('layanan_publik');
        $this->db->join('kategori_layanan', 'kategori_layanan.id_kategorilayanan=layanan_publik.id_kategorilayanan');
        $query = $this->db->get();
        return $query;
    }

    // public function tampil_lowongan()
    // {
    //     $this->db->select('*');
    //     $this->db->from('lowongan');
    //     $this->db->join('perusahaan', 'perusahaan.id=lowongan.id');
    //     $query = $this->db->get();
    //     return $query;
    // }

    public function delete($id)
    {
        return $this->db->where('id_layanan', $id)->delete('layanan_publik');
    }

    public function delete_lowongan($id)
    {
        return $this->db->where('id_lowongan', $id)->delete('lowongan');
    }

    public function save_informasii()
    {
        $post = $this->input->post();
        $this->id_kategorilayanan = $post["nama_kategori"];
        $this->nama = $post["nama"];
        $this->deskripsi = $post["deskripsi"];
        return $this->db->insert($this->_table, $this);
    }

    public function save_informasi($data)
    {
        return $this->db->insert('layanan_publik', $data);
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

    public function tampil_laporanpengaduan($id)
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

    public function tampil_kategori()
    {
        $this->db->select('*');
        $this->db->from('kategori_layanan');
        $query = $this->db->get();
        return $query;
    }

    public function delete_kategori($id)
    {
        $delete = $this->db->where('id_kategorilayanan', $id)->delete('layanan_publik');
        $delete = $this->db->where('id_kategorilayanan', $id)->delete('kategori_layanan');
        return $delete;
    }

    public function save_kategori()
    {
        $post = $this->input->post();
        $this->nama_kategori = $post["nama_kategori"];
        return $this->db->insert($this->_table1, $this);
    }

    public function edit_kategori($id)
    {
        $this->db->select('*');
        $this->db->from('kategori_layanan');
        $this->db->where('id_kategorilayanan', $id);
        $query = $this->db->get();
        return $query;
    }

    public function update_kategori($data, $id)
    {
        return $this->db->where('id_kategorilayanan', $id)->update('kategori_layanan', $data);
    }

    public function semua_status()
    {
        $this->db->select('*');
        $this->db->from('pengaduan_umum');
        $this->db->join('user_mobile', 'user_mobile.NIK=pengaduan_umum.NIK');
        $query = $this->db->get();
        return $query;
    }

    public function status_menunggu()
    {
        $this->db->select('*');
        $this->db->from('pengaduan_umum');
        $this->db->join('user_mobile', 'user_mobile.NIK=pengaduan_umum.NIK');
        $this->db->where('status_pengaduan="Menunggu"');
        $query = $this->db->get();
        return $query;
    }

    public function status_proses()
    {
        $this->db->select('*');
        $this->db->from('pengaduan_umum');
        $this->db->join('user_mobile', 'user_mobile.NIK=pengaduan_umum.NIK');
        $this->db->where('status_pengaduan="Sedang Diproses"');
        $query = $this->db->get();
        return $query;
    }

    public function status_selesai()
    {
        $this->db->select('*');
        $this->db->from('pengaduan_umum');
        $this->db->join('user_mobile', 'user_mobile.NIK=pengaduan_umum.NIK');
        $this->db->where('status_pengaduan="Selesai"');
        $query = $this->db->get();
        return $query;
    }

    public function status_ditolak()
    {
        $this->db->select('*');
        $this->db->from('pengaduan_umum');
        $this->db->join('user_mobile', 'user_mobile.NIK=pengaduan_umum.NIK');
        $this->db->where('status_pengaduan="Ditolak"');
        $query = $this->db->get();
        return $query;
    }
}