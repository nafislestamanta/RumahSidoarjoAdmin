<?php

class M_dashboard extends CI_model
{

    function jmlh_admin()
    {
        $this->db->select('*, COUNT(id_admin) as total');
        $this->db->from('user_admin');
        $hasil = $this->db->get();
        return $hasil;
    }

    function jmlh_user()
    {
        $this->db->select('*, COUNT(NIK) as total');
        $this->db->from('user_mobile');
        $this->db->where('status="1"');
        $hasil = $this->db->get();
        return $hasil;
    }

    function validasi()
    {
        $this->db->select('*, COUNT(NIK) as total');
        $this->db->from('user_mobile');
        $this->db->where('status="0"');
        $hasil = $this->db->get();
        return $hasil;
    }

    function laporan_panik()
    {
        $this->db->select('*, COUNT(id_laporan) as total');
        $this->db->from('panik_button');
        $this->db->where('status="Menunggu Konfirmasi"');
        $hasil = $this->db->get();
        return $hasil;
    }

    function pengaduan_umum()
    {
        $this->db->select('*, COUNT(id_pengaduan) as total');
        $this->db->from('pengaduan_umum');
        $this->db->where('status_pengaduan="Menunggu"');
        $hasil = $this->db->get();
        return $hasil;
    }




    function diagram_panik()
    {
        $this->db->group_by('kategori');
        $this->db->select('kategori');
        $this->db->select("count(*) as total");
        return $this->db->from('panik_button')
            ->get()
            ->result();
    }
}