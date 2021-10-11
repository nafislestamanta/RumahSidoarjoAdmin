<?php

class M_kerja extends CI_model
{
    private $_table = "perusahaan";

    public $id;
    public $nama_perusahaan;
    public $kepemilikan;
    public $alamat;
    public $no_tlp;
    public $email;
    public $penanggung_jawab;
    public $deskripsi;
    public $foto = 'default.jpg';


    public function tampilperusahaan()
    {
        $this->db->select('*');
        $this->db->from('perusahaan');
        $query = $this->db->get();
        return $query;
    }

    public function editperusahaan($id)
    {
        $this->db->select('*');
        $this->db->from('perusahaan');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query;
    }

    public function delete($id)
    {
        return $this->db->where('id', $id)->delete('perusahaan');
    }

    public function delete_lowongan($id)
    {
        return $this->db->where('id_lowongan', $id)->delete('lowongan');
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nama_perusahaan = $post["nama_perusahaan"];
        $this->kepemilikan = $post["kepemilikan"];
        $this->alamat = $post["alamat"];
        $this->no_tlp = $post["no_tlp"];
        $this->email = $post["email"];
        $this->penanggung_jawab = $post["penanggung_jawab"];
        $this->deskripsi = $post["deskripsi"];
        $this->foto = $_FILES["foto"]['name'];
        return $this->db->insert($this->_table, $this);
    }

    public function update_perusahaan($data, $id)
    {
        return $this->db->where('id', $id)->update('perusahaan', $data);
    }

    public function tampil_lowongan()
    {
        $this->db->select('*');
        $this->db->from('lowongan');
        $this->db->join('perusahaan', 'perusahaan.id=lowongan.id');
        $query = $this->db->get();
        return $query;
    }

    public function detail_lowongan($id)
    {
        $this->db->select('*');
        $this->db->from('lowongan');
        $this->db->join('perusahaan', 'perusahaan.id=lowongan.id');
        $this->db->where('id_lowongan', $id);
        $query = $this->db->get();
        return $query;
    }

    public function perusahaan()
    {
        return $this->db->get('perusahaan');
    }

    public function tambah_lowongan($data)
    {
        return $this->db->insert('lowongan', $data);
    }

    public function edit_lowongan($id)
    {
        $this->db->select('*');
        $this->db->from('lowongan');
        $this->db->where('id_lowongan', $id);
        $query = $this->db->get();
        return $query;
    }

    public function update_lowongan($data, $id)
    {
        return $this->db->where('id_lowongan', $id)->update('lowongan', $data);
    }
}