<?php
class m_panikmenu extends CI_Model
{
    public function laporan()
    {
        $this->db->select('*');
        $this->db->from('panik_button');
        $this->db->join('user_mobile', 'user_mobile.NIK=panik_button.NIK');
        $this->db->where('panik_button.status="Proses" or  panik_button.status="Selesai"');
        $query = $this->db->get();
        return $query;
    }

    public function status()
    {
        $this->db->select('*');
        $this->db->from('panik_button');
        $query = $this->db->get();
        return $query;
    }


    public function konfirmasi()
    {
        $this->db->select('*');
        $this->db->from('panik_button');
        $this->db->join('user_mobile', 'user_mobile.NIK=panik_button.NIK');
        $this->db->where('panik_button.status="Menunggu Konfirmasi"');
        $query = $this->db->get();
        return $query;
    }

    public function konfirmasi_Kriminal()
    {
        $this->db->select('*');
        $this->db->from('panik_button');
        $this->db->join('user_mobile', 'user_mobile.NIK=panik_button.NIK');
        $this->db->where('panik_button.status="Menunggu Konfirmasi" and panik_button.kategori="Kriminal"');
        $query = $this->db->get();
        return $query;
    }

    public function konfirmasi_kecelakaan()
    {
        $this->db->select('*');
        $this->db->from('panik_button');
        $this->db->join('user_mobile', 'user_mobile.NIK=panik_button.NIK');
        $this->db->where('panik_button.status="Menunggu Konfirmasi" and panik_button.kategori="Kecelakaan"');
        $query = $this->db->get();
        return $query;
    }

    public function konfirmasi_bencana()
    {
        $this->db->select('*');
        $this->db->from('panik_button');
        $this->db->join('user_mobile', 'user_mobile.NIK=panik_button.NIK');
        $this->db->where('panik_button.status="Menunggu Konfirmasi" and panik_button.kategori="Bencana"');
        $query = $this->db->get();
        return $query;
    }

    public function laporan_kriminal()
    {
        $this->db->select('*');
        $this->db->from('panik_button');
        $this->db->join('user_mobile', 'user_mobile.NIK=panik_button.NIK');
        $this->db->where('panik_button.kategori="Kriminal" and panik_button.status="Proses" or panik_button.kategori="Kriminal" and panik_button.status="Selesai"');
        $query = $this->db->get();
        return $query;
    }

    public function laporan_kecelakaan()
    {
        $this->db->select('*');
        $this->db->from('panik_button');
        $this->db->join('user_mobile', 'user_mobile.NIK=panik_button.NIK');
        $this->db->where('panik_button.kategori="Kecelakaan" and panik_button.status="Proses" or panik_button.kategori="Kecelakaan" and panik_button.status="Selesai"');
        $query = $this->db->get();
        return $query;
    }

    public function laporan_bencana()
    {
        $this->db->select('*');
        $this->db->from('panik_button');
        $this->db->join('user_mobile', 'user_mobile.NIK=panik_button.NIK');
        $this->db->where('panik_button.kategori="Bencana" and panik_button.status="Proses" or panik_button.kategori="Bencana" and panik_button.status="Selesai"');
        $query = $this->db->get();
        return $query;
    }

    public function delete_laporan($id)
    {
        return $this->db->where('id_laporan', $id)->delete('panik_button');
    }

    public function kantorpolisi()
    {
        $this->db->select('*');
        $this->db->from('kantor_polisi');
        $this->db->join('kecamatan', 'kecamatan.id_kecamatan=kantor_polisi.id_kecamatan');
        $query = $this->db->get();
        return $query;
    }

    public function detail_kantorpolisi($id)
    {
        $this->db->select('*');
        $this->db->from('kantor_polisi');
        $this->db->join('kecamatan', 'kecamatan.id_kecamatan=kantor_polisi.id_kecamatan');
        $this->db->where('kantor_polisi.id_kantor_polisi', $id);
        $query = $this->db->get();
        return $query;
    }

    public function detail_konfirmasi($id)
    {
        $this->db->select('*');
        $this->db->from('panik_button');
        $this->db->join('user_mobile', 'user_mobile.NIK=panik_button.NIK');
        $this->db->where('id_laporan', $id);
        $query = $this->db->get();
        return $query;
    }

    public function rumahsakit()
    {
        $this->db->select('*');
        $this->db->from('kesehatan');
        $this->db->join('kecamatan', 'kecamatan.id_kecamatan=kesehatan.id_kecamatan');
        $this->db->where('kesehatan.kategori="RSU"');
        $query = $this->db->get();
        return $query;
    }

    public function bpbd()
    {
        $this->db->select('*');
        $this->db->from('bpbd');
        $this->db->join('kecamatan', 'kecamatan.id_kecamatan=bpbd.id_kecamatan');
        $query = $this->db->get();
        return $query;
    }

    public function detail_bpbd($id)
    {
        $this->db->select('*');
        $this->db->from('bpbd');
        $this->db->join('kecamatan', 'kecamatan.id_kecamatan=bpbd.id_kecamatan');
        $this->db->where('bpbd.id_bpbd', $id);
        $query = $this->db->get();
        return $query;
    }

    public function delete_kantorpolisi($id)
    {
        return $this->db->where('id_kantor_polisi', $id)->delete('kantor_polisi');
    }

    public function delete_rumahsakit($id)
    {
        return $this->db->where('id_kesehatan', $id)->delete('kesehatan');
    }

    public function delete_bpbd($id)
    {
        return $this->db->where('id_bpbd', $id)->delete('bpbd');
    }

    public function kecamatan()
    {
        $this->db->select('*');
        $this->db->from('kecamatan');
        $query = $this->db->get();
        return $query;
    }

    public function tambah_kantorpolisi($data)
    {
        return $this->db->insert('kantor_polisi', $data);
    }

    public function tambah_bpbd($data)
    {
        return $this->db->insert('bpbd', $data);
    }

    public function tambahkonfirmasi($data)
    {
        return $this->db->insert('panik_button', $data);
    }

    public function updatekonfirmasi($id, $data)
    {
        return $this->db->where('id_laporan', $id)->update('panik_button', $data);
    }

    public function update_kantorpolisi($data, $id)
    {
        return $this->db->where('id_kantor_polisi', $id)->update('kantor_polisi', $data);
    }

    public function update_rumahsakit($data, $id)
    {
        return $this->db->where('id_kesehatan', $id)->update('kesehatan', $data);
    }

    public function update_bpbd($data, $id)
    {
        return $this->db->where('id_bpbd', $id)->update('bpbd', $data);
    }

    function jmlh_pkmp()
    {
        $this->db->select('*, COUNT(id_kesehatan) as total');
        $this->db->from('kesehatan');
        $this->db->where('kategori="PKM PEMBANTU"');
        $hasil = $this->db->get();
        return $hasil;
    }
}