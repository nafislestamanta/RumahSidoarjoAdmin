<?php

class M_komunitas extends CI_model
{
    private $_table = "komunitas";
    private $_table1 = "event";

    public $id_komunitas;
    public $nama_komunitas;
    public $ketua;
    public $alamat;
    public $deskripsi;
    public $no_tlp;
    public $sosialmedia;
    public $foto1 = 'default.jpg';
    public $foto2 = 'default.jpg';
    public $foto_profil = 'default.jpg';



    public function tampil_komunitas()
    {
        $this->db->select('*');
        $this->db->from('komunitas');
        $query = $this->db->get();
        return $query;
    }

    public function detail_komunitas($id)
    {
        $this->db->select('*');
        $this->db->from('komunitas');
        $this->db->where('id_komunitas', $id);
        $query = $this->db->get();
        return $query;
    }

    public function delete($id)
    {
        return $this->db->where('id_komunitas', $id)->delete('komunitas');
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nama_komunitas = $post["nama_komunitas"];
        $this->ketua = $post["ketua"];
        $this->alamat = $post["alamat"];
        $this->no_tlp = $post["no_tlp"];
        $this->deskripsi = $post["deskripsi"];
        $this->sosialmedia = $post["sosialmedia"];
        $this->foto1 = $_FILES["foto1"]['name'];
        $this->foto2 = $_FILES["foto2"]['name'];
        $this->foto_profil = $_FILES["foto_profil"]['name'];
        return $this->db->insert($this->_table, $this);
    }

    public function edit_komunitas($id)
    {
        $this->db->select('*');
        $this->db->from('komunitas');
        $this->db->where('id_komunitas', $id);
        $query = $this->db->get();
        return $query;
    }

    public function update_komunitas($data, $id)
    {
        return $this->db->where('id_komunitas', $id)->update('komunitas', $data);
    }

    public function tampil_event()
    {
        $this->db->select('*');
        $this->db->from('event_komunitas');
        $this->db->join('komunitas', 'komunitas.id_komunitas=event_komunitas.id_komunitas');
        $query = $this->db->get();
        return $query;
    }

    public function tampil_event_segera()
    {
        $this->db->select('*');
        $this->db->from('event_komunitas');
        $this->db->join('komunitas', 'komunitas.id_komunitas=event_komunitas.id_komunitas');
        $this->db->where('status="Akan Datang"');
        $query = $this->db->get();
        return $query;
    }

    public function tampil_event_selesai()
    {
        $this->db->select('*');
        $this->db->from('event_komunitas');
        $this->db->join('komunitas', 'komunitas.id_komunitas=event_komunitas.id_komunitas');
        $this->db->where('status="Event Selesai"');
        $query = $this->db->get();
        return $query;
    }

    public function detail_event($id)
    {
        $this->db->select('*');
        $this->db->from('event_komunitas');
        $this->db->join('komunitas', 'komunitas.id_komunitas=event_komunitas.id_komunitas');
        $this->db->where('id_event', $id);
        $query = $this->db->get();
        return $query;
    }

    public function delete_event($id)
    {
        return $this->db->where('id_event', $id)->delete('event_komunitas');
    }

    public function save_event()
    {
        $post = $this->input->post();
        $this->nama_event = $post["nama_event"];
        $this->kepemilikan = $post["kepemilikan"];
        $this->alamat = $post["alamat"];
        $this->no_tlp = $post["no_tlp"];
        $this->email = $post["email"];
        $this->penanggung_jawab = $post["penanggung_jawab"];
        $this->deskripsi = $post["deskripsi"];
        $this->foto = $_FILES["foto"]['name'];
        return $this->db->insert($this->_table, $this);
    }

    public function tambah_event($data)
    {
        return $this->db->insert('event_komunitas', $data);
    }

    public function komunitas()
    {
        return $this->db->get('komunitas');
    }

    public function edit_event($id)
    {
        $this->db->select('*');
        $this->db->from('event_komunitas');
        $this->db->where('id_event', $id);
        $query = $this->db->get();
        return $query;
    }

    public function update_event($data, $id)
    {
        return $this->db->where('id_event', $id)->update('event_komunitas', $data);
    }

    // public function edit_lowongan($id)
    // {
    //     $this->db->select('*');
    //     $this->db->from('lowongan');
    //     $this->db->where('id_lowongan', $id);
    //     $query = $this->db->get();
    //     return $query;
    // }

}