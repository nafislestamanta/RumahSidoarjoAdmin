<?php
class m_kesehatan extends CI_Model
{
    public function pkmu()
    {
        $this->db->select('*');
        $this->db->from('kesehatan');
        $this->db->join('kecamatan', 'kecamatan.id_kecamatan=kesehatan.id_kecamatan');
        $this->db->where('kategori="PKM UTAMA"');
        $query = $this->db->get();
        return $query;
    }

    public function pkm_u($id)
    {
        $this->db->select('*');
        $this->db->from('kesehatan');
        $this->db->join('kecamatan', 'kecamatan.id_kecamatan=kesehatan.id_kecamatan');
        $this->db->where('id_kesehatan', $id);
        $query = $this->db->get();
        return $query;
    }

    public function rumahsakit()
    {
        $this->db->select('*');
        $this->db->from('kesehatan');
        $this->db->join('kecamatan', 'kecamatan.id_kecamatan=kesehatan.id_kecamatan');
        $this->db->where('kategori="RSU"');
        $query = $this->db->get();
        return $query;
    }

    public function rsu($id)
    {
        $this->db->select('*');
        $this->db->from('kesehatan');
        $this->db->join('kecamatan', 'kecamatan.id_kecamatan=kesehatan.id_kecamatan');
        $this->db->where('id_kesehatan', $id);
        $query = $this->db->get();
        return $query;
    }

    public function pkmp()
    {
        $this->db->select('*');
        $this->db->from('kesehatan');
        $this->db->join('kecamatan', 'kecamatan.id_kecamatan=kesehatan.id_kecamatan');
        $this->db->where('kategori="PKM PEMBANTU"');
        $query = $this->db->get();
        return $query;
    }

    public function pkm_p($id)
    {
        $this->db->select('*');
        $this->db->from('kesehatan');
        $this->db->join('kecamatan', 'kecamatan.id_kecamatan=kesehatan.id_kecamatan');
        $this->db->where('id_kesehatan', $id);
        $query = $this->db->get();
        return $query;
    }

    public function kecamatan()
    {
        return $this->db->get('kecamatan');
    }

    public function delete($id)
    {
        return $this->db->where('id_kesehatan', $id)->delete('kesehatan');
    }

    public function tambah($data)
    {
        return $this->db->insert('kesehatan', $data);
    }

    public function update($data, $id)
    {
        return $this->db->where('id_kesehatan', $id)->update('kesehatan', $data);
    }

    function jmlh_pkmp()
    {
        $this->db->select('*, COUNT(id_kesehatan) as total');
        $this->db->from('kesehatan');
        $this->db->where('kategori="PKM PEMBANTU"');
        $hasil = $this->db->get();
        return $hasil;
    }
    function jmlh_pkmu()
    {
        $this->db->select('*, COUNT(id_kesehatan) as total');
        $this->db->from('kesehatan');
        $this->db->where('kategori="PKM UTAMA"');
        $hasil = $this->db->get();
        return $hasil;
    }
    function jmlh_rs()
    {
        $this->db->select('*, COUNT(id_kesehatan) as total');
        $this->db->from('kesehatan');
        $this->db->where('kategori="RSU"');
        $hasil = $this->db->get();
        return $hasil;
    }

    public function laporan()
    {
        $this->db->select('*');
        $this->db->from('panik_button');
        $this->db->join('user_mobile', 'user_mobile.NIK=panik_button.NIK');
        $this->db->where('panik_button.petugas="Rumah Sakit" and panik_button.status="Proses"');
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
        $this->db->where('panik_button.petugas="Rumah Sakit" and panik_button.status="Selesai" or panik_button.petugas="Rumah Sakit" and panik_button.status="Tolak"');
        $query = $this->db->get();
        return $query;
    }

    public function riwayat_selesai()
    {
        $this->db->select('*, panik_button.status');
        $this->db->from('panik_button');
        $this->db->join('user_mobile', 'user_mobile.NIK=panik_button.NIK');
        $this->db->where('panik_button.status="Selesai"');
        $query = $this->db->get();
        return $query;
    }

    public function riwayat_tolak()
    {
        $this->db->select('*, panik_button.status');
        $this->db->from('panik_button');
        $this->db->join('user_mobile', 'user_mobile.NIK=panik_button.NIK');
        $this->db->where('panik_button.status="Tolak"');
        $query = $this->db->get();
        return $query;
    }

    public function delete_riwayat($id)
    {
        return $this->db->where('id_laporan', $id)->delete('panik_button');
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

    public function update_gambar($id, $data)
    {
        return $this->db->where('id_kesehatan', $id)->update('kesehatan', $data);
    }
}