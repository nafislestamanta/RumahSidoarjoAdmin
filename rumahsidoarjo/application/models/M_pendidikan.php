<?php
class M_pendidikan extends CI_Model
{
    public function tampilSD()
    {
        $this->db->select('*');
        $this->db->from('sekolah');
        $this->db->join('kelurahan', 'kelurahan.id_kelurahan=sekolah.id_kelurahan');
        $this->db->join('kecamatan', 'kecamatan.id_kecamatan=kelurahan.id_kecamatan');
        $this->db->where('jenjang="SD"');
        $query = $this->db->get();
        return $query;
    }

    public function tampilSLB()
    {
        $this->db->select('*');
        $this->db->from('sekolah');
        $this->db->join('kelurahan', 'kelurahan.id_kelurahan=sekolah.id_kelurahan');
        $this->db->join('kecamatan', 'kecamatan.id_kecamatan=kelurahan.id_kecamatan');
        $this->db->where('jenjang="SLB"');
        $query = $this->db->get();
        return $query;
    }

    public function tampilSMP()
    {
        $this->db->select('*');
        $this->db->from('sekolah');
        $this->db->join('kelurahan', 'kelurahan.id_kelurahan=sekolah.id_kelurahan');
        $this->db->join('kecamatan', 'kecamatan.id_kecamatan=kelurahan.id_kecamatan');
        $this->db->where('jenjang="SMP"');
        $query = $this->db->get();
        return $query;
    }

    public function editSD($id)
    {
        $this->db->select('*');
        $this->db->from('sekolah');
        $this->db->join('kelurahan', 'kelurahan.id_kelurahan=sekolah.id_kelurahan');
        $this->db->join('kecamatan', 'kecamatan.id_kecamatan=kelurahan.id_kecamatan');
        $this->db->where('sekolah.id_sekolah', $id);
        $query = $this->db->get();
        return $query;
    }

    public function tampil_sekolah_desc()
    {
        $this->db->select('*');
        $this->db->from('sekolah');
        $this->db->order_by('id_sekolah', 'desc');
        $query = $this->db->get();
        return $query;
    }

    public function fasilitas($id)
    {
        $this->db->select('*');
        $this->db->from('fasilitas_sekolah');
        $this->db->join('sekolah', 'sekolah.id_sekolah=fasilitas_sekolah.id_sekolah');
        $this->db->where('fasilitas_sekolah.id_sekolah', $id);
        $query = $this->db->get();
        return $query;
    }

    public function ekskul($id)
    {
        $this->db->select('*');
        $this->db->from('ekskul_sekolah');
        $this->db->join('sekolah', 'sekolah.id_sekolah=ekskul_sekolah.id_sekolah');
        $this->db->where('ekskul_sekolah.id_sekolah', $id);
        $query = $this->db->get();
        return $query;
    }

    public function getKecamatan()
    {
        $this->db->select('*');
        $this->db->from('kecamatan');
        $query = $this->db->get();
        return $query;
    }

    public function getKelurahan($id)
    {
        $this->db->select('*');
        $this->db->from('kelurahan');
        $this->db->where('id_kecamatan', $id);
        $query = $this->db->get();
        return $query;
    }

    public function tambahSD($data)
    {
        return $this->db->insert('sekolah', $data);
    }

    public function tambah_fasilitas($data)
    {
        return $this->db->insert('fasilitas_sekolah', $data);
    }

    public function tambah_ekskul($data)
    {
        return $this->db->insert('ekskul_sekolah', $data);
    }

    public function delete_sekolah($id)
    {
        $delete = $this->db->where('id_sekolah', $id)->delete('fasilitas_sekolah');
        $delete = $this->db->where('id_sekolah', $id)->delete('ekskul_sekolah');
        $delete = $this->db->where('id_sekolah', $id)->delete('sekolah');
        return $delete;
    }

    public function delete_slb($id)
    {
        $delete = $this->db->where('id_sekolah', $id)->delete('fasilitas_sekolah');
        $delete = $this->db->where('id_sekolah', $id)->delete('ekskul_sekolah');
        $delete = $this->db->where('id_sekolah', $id)->delete('sekolah');
        return $delete;
    }

    public function delete_fasilitas($id)
    {
        $delete = $this->db->where('id_fasilitas', $id)->delete('fasilitas_sekolah');
        return $delete;
    }

    public function delete_ekskul($id)
    {
        $delete = $this->db->where('id_ekskul', $id)->delete('ekskul_sekolah');
        return $delete;
    }

    public function update_fasilitas($id, $data)
    {
        return $this->db->where('id_fasilitas', $id)->update('fasilitas_sekolah', $data);
    }

    public function update_ekskul($id, $data)
    {
        return $this->db->where('id_ekskul', $id)->update('ekskul_sekolah', $data);
    }

    public function updateSD($id, $data)
    {
        return $this->db->where('id_sekolah', $id)->update('sekolah', $data);
    }

    function jmlh_sd()
    {
        $this->db->select('*, COUNT(id_sekolah) as total');
        $this->db->from('sekolah');
        $this->db->where('jenjang="SD"');
        $hasil = $this->db->get();
        return $hasil;
    }
    function jmlh_smp()
    {
        $this->db->select('*, COUNT(id_sekolah) as total');
        $this->db->from('sekolah');
        $this->db->where('jenjang="SMP"');
        $hasil = $this->db->get();
        return $hasil;
    }
    function jmlh_slb()
    {
        $this->db->select('*, COUNT(id_sekolah) as total');
        $this->db->from('sekolah');
        $this->db->where('jenjang="SLB"');
        $hasil = $this->db->get();
        return $hasil;
    }
}