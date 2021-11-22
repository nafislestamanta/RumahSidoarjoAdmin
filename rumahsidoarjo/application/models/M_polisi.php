<?php
class M_polisi extends CI_Model
{
    public function dashboard()
    {
        $this->db->select('*');
        $this->db->from('panik_button');
        $this->db->join('user_mobile', 'user_mobile.NIK=panik_button.NIK');
        $this->db->where('panik_button.status="Proses" or  panik_button.status="Selesai"');
        $query = $this->db->get();
        return $query;
    }

    function tampil_kantor()
    {
        $this->db->select('*');
        $this->db->from('kantor_polisi');
        $this->db->join('kecamatan', 'kecamatan.id_kecamatan=kantor_polisi.id_kecamatan');

        $hasil = $this->db->get();
        return $hasil;
    }
    public function delete_kantorpolisi($id)
    {
        return $this->db->where('id_kantor_polisi', $id)->delete('kantor_polisi');
    }

    public function kantor_polisi($id)
    {
        $this->db->select('*');
        $this->db->from('kantor_polisi');
        $this->db->join('kecamatan', 'kecamatan.id_kecamatan=kantor_polisi.id_kecamatan');
        $this->db->where('kantor_polisi.id_kantor_polisi', $id);
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

    public function update_kantorpolisi($data, $id)
    {
        return $this->db->where('id_kantor_polisi', $id)->update('kantor_polisi', $data);
    }

    public function tambah_kantor($data)
    {
        return $this->db->insert('kantor_polisi', $data);
    }

    public function laporan()
    {
        $this->db->select('*, panik_button.status');
        $this->db->from('panik_button');
        $this->db->join('user_mobile', 'user_mobile.NIK=panik_button.NIK');
        $this->db->where('panik_button.petugas="Kantor Polisi" and panik_button.status="Proses"');
        $query = $this->db->get();
        return $query;
    }

    public function laporan_kriminal()
    {
        $this->db->select('*, panik_button.status');
        $this->db->from('panik_button');
        $this->db->join('user_mobile', 'user_mobile.NIK=panik_button.NIK');
        $this->db->where('panik_button.petugas="Kantor Polisi" and panik_button.status="Proses" and panik_button.kategori="Kriminal"');
        // $this->db->where('panik_button.kategori="Kriminal" and panik_button.status="Proses"');
        $query = $this->db->get();
        return $query;
    }

    public function laporan_kecelakaan()
    {
        $this->db->select('*, panik_button.status');
        $this->db->from('panik_button');
        $this->db->join('user_mobile', 'user_mobile.NIK=panik_button.NIK');
        $this->db->where('panik_button.petugas="Kantor Polisi" and panik_button.status="Proses" and panik_button.kategori="Kecelakaan"');
        //$this->db->where('panik_button.kategori="Kecelakaan" and panik_button.status="Proses" or panik_button.kategori="Kecelakaan" and panik_button.status="Selesai"');
        $query = $this->db->get();
        return $query;
    }

    public function laporan_bencana()
    {
        $this->db->select('*, panik_button.status');
        $this->db->from('panik_button');
        $this->db->join('user_mobile', 'user_mobile.NIK=panik_button.NIK');
        $this->db->where('panik_button.petugas="Kantor Polisi" and panik_button.status="Proses" and panik_button.kategori="Bencana"');
        //$this->db->where('panik_button.kategori="Bencana" and panik_button.status="Proses" or panik_button.kategori="Bencana" and panik_button.status="Selesai"');
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
        $this->db->where('panik_button.petugas="Kantor Polisi" and panik_button.status="Selesai" or panik_button.petugas="Kantor Polisi" and panik_button.status="Tolak"');
        $query = $this->db->get();
        return $query;
    }

    public function riwayat_selesai()
    {
        $this->db->select('*, panik_button.status');
        $this->db->from('panik_button');
        $this->db->join('user_mobile', 'user_mobile.NIK=panik_button.NIK');
        $this->db->where('panik_button.petugas="Kantor Polisi" and panik_button.status="Selesai"');
        $query = $this->db->get();
        return $query;
    }

    public function riwayat_tolak()
    {
        $this->db->select('*, panik_button.status');
        $this->db->from('panik_button');
        $this->db->join('user_mobile', 'user_mobile.NIK=panik_button.NIK');
        $this->db->where('panik_button.petugas="Kantor Polisi" and panik_button.status="Tolak"');
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

    function jmlh_kantor()
    {
        $this->db->select('*, COUNT(id_kantor_polisi) as total');
        $this->db->from('kantor_polisi');
        //$this->db->where('kategori="PKM UTAMA"');
        $hasil = $this->db->get();
        return $hasil;
    }

    function jmlh_pengaduan()
    {
        $this->db->select('*, COUNT(id_laporan) as total');
        $this->db->from('panik_button');
        $this->db->where('panik_button.petugas="Kantor Polisi" and panik_button.status="Proses"');
        $hasil = $this->db->get();
        return $hasil;
    }
    function jmlh_selesai()
    {
        $this->db->select('*, COUNT(id_laporan) as total');
        $this->db->from('panik_button');
        $this->db->where('panik_button.petugas="Kantor Polisi" and panik_button.status="Selesai"');
        $hasil = $this->db->get();
        return $hasil;
    }
    function jmlh_tolak()
    {
        $this->db->select('*, COUNT(id_laporan) as total');
        $this->db->from('panik_button');
        $this->db->where('panik_button.petugas="Kantor Polisi" and panik_button.status="Tolak"');
        $hasil = $this->db->get();
        return $hasil;
    }
    public function delete_riwayat($id)
    {
        return $this->db->where('id_laporan', $id)->delete('panik_button');
    }
}