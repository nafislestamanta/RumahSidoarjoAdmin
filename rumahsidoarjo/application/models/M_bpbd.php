<?php
class M_bpbd extends CI_Model
{

    function tampil_kantor()
    {
        $this->db->select('*');
        $this->db->from('bpbd');
        $this->db->join('kecamatan', 'kecamatan.id_kecamatan=bpbd.id_kecamatan');
        $hasil = $this->db->get();
        return $hasil;
    }

    public function kantor_bpbd($id)
    {
        $this->db->select('*');
        $this->db->from('bpbd');
        $this->db->join('kecamatan', 'kecamatan.id_kecamatan=bpbd.id_kecamatan');
        $this->db->where('bpbd.id_bpbd', $id);
        $query = $this->db->get();
        return $query;
    }

    public function kecamatan()
    {
        $this->db->select('*');
        $this->db->from('kecamatan');
        $query = $this->db->get();
        return $query;
    }

    public function delete_kantor($id)
    {
        return $this->db->where('id_bpbd', $id)->delete('bpbd');
    }

    public function tambah_kantor($data)
    {
        return $this->db->insert('bpbd', $data);
    }

    public function update_kantor($data, $id)
    {
        return $this->db->where('id_bpbd', $id)->update('bpbd', $data);
    }

    public function laporan()
    {
        $this->db->select('*, panik_button.status');
        $this->db->from('panik_button');
        $this->db->join('user_mobile', 'user_mobile.NIK=panik_button.NIK');
        $this->db->where('panik_button.petugas="BPBD" and panik_button.status="Proses"');
        $query = $this->db->get();
        return $query;
    }

    public function detail($id)
    {
        $this->db->select('*');
        $this->db->from('panik_button');
        $this->db->join('user_mobile', 'user_mobile.NIK=panik_button.NIK');
        $this->db->where('id_laporan', $id);
        $query = $this->db->get();
        return $query;
    }

    public function update_pengaduan($data, $id)
    {
        return $this->db->where('id_laporan', $id)->update('panik_button', $data);
    }

    public function riwayat()
    {
        $this->db->select('*, panik_button.status');
        $this->db->from('panik_button');
        $this->db->join('user_mobile', 'user_mobile.NIK=panik_button.NIK');
        $this->db->where('panik_button.petugas="BPBD" and panik_button.status="Selesai" or panik_button.petugas="BPBD" and panik_button.status="Tolak"');
        $query = $this->db->get();
        return $query;
    }

    public function riwayat_selesai()
    {
        $this->db->select('*, panik_button.status');
        $this->db->from('panik_button');
        $this->db->join('user_mobile', 'user_mobile.NIK=panik_button.NIK');
        $this->db->where('panik_button.petugas="BPBD" and panik_button.status="Selesai"');
        $query = $this->db->get();
        return $query;
    }

    public function riwayat_tolak()
    {
        $this->db->select('*, panik_button.status');
        $this->db->from('panik_button');
        $this->db->join('user_mobile', 'user_mobile.NIK=panik_button.NIK');
        $this->db->where('panik_button.petugas="BPBD" and panik_button.status="Tolak"');
        $query = $this->db->get();
        return $query;
    }

    public function detail_riwayat($id)
    {
        $this->db->select('*, panik_button.status');
        $this->db->from('panik_button');
        $this->db->join('user_mobile', 'user_mobile.NIK=panik_button.NIK');
        $this->db->where('id_laporan', $id);
        $query = $this->db->get();
        return $query;
    }

    public function delete_riwayat($id)
    {
        return $this->db->where('id_laporan', $id)->delete('panik_button');
    }
}