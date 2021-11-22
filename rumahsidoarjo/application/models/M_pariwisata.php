<?php
class M_pariwisata extends CI_Model
{
    public function tampil()
    {
        $this->db->select('*');
        $this->db->from('kategori_wisata');
        $query = $this->db->get();
        return $query;
    }

    public function tampil_wisata()
    {
        $this->db->select('*');
        $this->db->from('pariwisata');
        $this->db->join('kategori_wisata', 'kategori_wisata.id_kategori_wisata=pariwisata.id_kategori_wisata');
        $query = $this->db->get();
        return $query;
    }

    public function tampil_wisata_desc()
    {
        $this->db->select('*');
        $this->db->from('pariwisata');
        $this->db->join('kategori_wisata', 'kategori_wisata.id_kategori_wisata=pariwisata.id_kategori_wisata');
        $this->db->order_by('id_wisata', 'desc');
        $query = $this->db->get();
        return $query;
    }

    public function tampilwisataid($id)
    {
        $this->db->select('*');
        $this->db->from('pariwisata');
        $this->db->join('kategori_wisata', 'kategori_wisata.id_kategori_wisata=pariwisata.id_kategori_wisata');
        $this->db->where('id_wisata', $id);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_tarif($id)
    {
        $this->db->select('*');
        $this->db->from('tarif_wisata');
        $this->db->join('pariwisata', 'pariwisata.id_wisata=tarif_wisata.id_wisata');
        $this->db->where('tarif_wisata.id_wisata', $id);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_kuliner($id)
    {
        $this->db->select('*');
        $this->db->from('menu_kuliner');
        $this->db->join('pariwisata', 'pariwisata.id_wisata=menu_kuliner.id_wisata');
        $this->db->where('menu_kuliner.id_wisata', $id);
        $query = $this->db->get();
        return $query;
    }

    function tampilCount($id)
    {
        $this->db->select('*, COUNT(id_wisata) as total');
        $this->db->from('tarif_wisata');
        $this->db->where('id_wisata', $id);
        $hasil = $this->db->get();
        return $hasil;
    }

    function tampilCountKuliner($id)
    {
        $this->db->select('*, COUNT(id_wisata) as total');
        $this->db->from('menu_kuliner');
        $this->db->where('id_wisata', $id);
        $hasil = $this->db->get();
        return $hasil;
    }

    public function menu_kuliner($id)
    {
        $this->db->select('*');
        $this->db->from('menu_kuliner');
        $this->db->join('pariwisata', 'pariwisata.id_wisata=menu_kuliner.id_wisata');
        $this->db->where('menu_kuliner.id_wisata', $id);
        $query = $this->db->get();
        return $query;
    }

    public function edit($id)
    {
        $this->db->select('*');
        $this->db->from('kategori_wisata');
        $this->db->where('id_kategori_wisata', $id);
        $query = $this->db->get();
        return $query;
    }

    public function tambah($data)
    {
        return $this->db->insert('kategori_wisata', $data);
    }

    public function tambah_wisata($data)
    {
        return $this->db->insert('pariwisata', $data);
    }

    public function tambah_tarif($data)
    {
        return $this->db->insert('tarif_wisata', $data);
    }

    public function tambah_kuliner($data)
    {
        return $this->db->insert('menu_kuliner', $data);
    }

    public function delete($id)
    {
        return $this->db->where('id_kategori_wisata', $id)->delete('kategori_wisata');
    }

    public function delete_wisata($id_tarif)
    {
        return $this->db->where('id_tarif', $id_tarif)->delete('tarif_wisata');
    }

    public function delete_pariwisata($id)
    {
        $delete = $this->db->where('id_wisata', $id)->delete('tarif_wisata');
        $delete = $this->db->where('id_wisata', $id)->delete('pariwisata');
        return $delete;
    }

    public function delete_kuliner($id_kuliner)
    {
        return $this->db->where('id_kuliner', $id_kuliner)->delete('menu_kuliner');
    }

    public function delete_tarif($id)
    {
        return $this->db->where('id_tarif', $id)->delete('tarif_wisata');
    }

    public function update($id, $data)
    {
        return $this->db->where('id_kategori_wisata', $id)->update('kategori_wisata', $data);
    }

    public function update_gambar1($id, $data)
    {
        return $this->db->where('id_wisata', $id)->update('pariwisata', $data);
    }

    public function update_wisata($id_tarif, $data)
    {
        return $this->db->where('id_tarif', $id_tarif)->update('tarif_wisata', $data);
    }

    public function update_kuliner($id_kuliner, $data)
    {
        return $this->db->where('id_kuliner', $id_kuliner)->update('menu_kuliner', $data);
    }
    function jmlh_kategori()
    {
        $this->db->select('*, COUNT(kategori) as total');
        $this->db->from('kategori_wisata');
        $hasil = $this->db->get();
        return $hasil;
    }
    function jmlh_wisata()
    {
        $this->db->select('*, COUNT(id_wisata) as total');
        $this->db->from('pariwisata');
        $hasil = $this->db->get();
        return $hasil;
    }
}