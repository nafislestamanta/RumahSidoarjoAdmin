<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Polisi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_polisi');
    }

    public function index()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['kantor'] = $this->M_polisi->jmlh_kantor()->row();
        $data['pengaduan'] = $this->M_polisi->jmlh_pengaduan()->row();
        $data['selesai'] = $this->M_polisi->jmlh_selesai()->row();
        $data['tolak'] = $this->M_polisi->jmlh_tolak()->row();
        $data['title'] = 'dashboard';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('polisi/dashboard_polisi', $data);
        $this->load->view('admin/templates/footer', $data);
    }
    public function tampil_kantor()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['tampil'] = $this->M_polisi->tampil_kantor()->result();
        $data['title'] = 'Kantor';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('polisi/kantor_polisi', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function delete_kantorpolisi($id)
    {
        $delete = $this->M_polisi->delete_kantorpolisi($id);
        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data yang anda pilih telah terhapus</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tidak bisa hapus data</div>');
        }
        redirect('Polisi/tampil_kantor');
    }

    public function edit_kantorpolisi($id)
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['edit'] = $this->M_polisi->kantor_polisi($id)->row();
        $data['kecamatan'] = $this->M_polisi->kecamatan()->result();
        $data['title'] = 'Edit Kantor Polisi';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('polisi/edit_kantor', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function detail_kantorpolisi($id)
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['detail'] = $this->M_polisi->kantor_polisi($id)->row();
        $data['kecamatan'] = $this->M_polisi->kecamatan()->result();
        $data['title'] = 'Detail Kantor Polisi';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('polisi/detail_kantor', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function update_kantor($id)
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('notelp', 'Notelp', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('pj', 'Pj', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == false) {
            $this->edit_kantorpolisi($id);
        } else {
            $nama = $this->input->post('nama');
            $pj = $this->input->post('pj');
            $kecamatan = $this->input->post('kecamatan');
            $alamat = $this->input->post('alamat');
            $notelp = $this->input->post('notelp');


            $data = [
                'id_kantor_polisi' => $id,
                'nama_kantor_polisi' => $nama,
                'penanggungjawab' => $pj,
                'id_kecamatan' => $kecamatan,
                'alamat' => $alamat,
                'no_tlp' => $notelp,

            ];

            $update = $this->M_polisi->update_kantorpolisi($data, $id);

            if ($update) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data tidak berhasil diupdate</div>');
            }
            redirect('Polisi/tampil_kantor', $data);
        }
    }

    public function tambah_kantorpolisi()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['kecamatan'] = $this->M_polisi->kecamatan()->result();
        $data['title'] = 'Tambah Kantor Polisi';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('polisi/tambah_kantor', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function tambahKantorPolisi()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('notelp', 'Notelp', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('pj', 'Pj', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == false) {
            $this->tambah_kantorpolisi();
        } else {
            $nama = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $kecamatan = $this->input->post('kecamatan');
            $notelp = $this->input->post('notelp');
            $pj = $this->input->post('pj');

            $data = [
                'nama_kantor_polisi' => $nama,
                'alamat' => $alamat,
                'id_kecamatan' => $kecamatan,
                'no_tlp' => $notelp,
                'penanggungjawab' => $pj,
            ];

            $tambah = $this->M_polisi->tambah_kantor($data);

            if ($tambah) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambah</div>');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data tidak berhasil ditambah</div>');
            }

            redirect('Polisi/tampil_kantor', $data);
        }
    }

    public function laporan()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['laporan'] = $this->M_polisi->laporan()->result();
        $data['title'] = 'Laporan';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('polisi/laporan_proses', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    // public function laporanpanik()
    // {
    //     $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
    //     $data['laporan'] = $this->m_panikmenu->laporan()->result();
    //     $data['title'] = 'Laporan Panik';
    //     $this->load->view('admin/templates/header', $data);
    //     $this->load->view('admin/templates/sidebar', $data);
    //     $this->load->view('admin/templates/topbar', $data);
    //     $this->load->view('panikmenu/laporanpanik', $data);
    //     $this->load->view('admin/templates/footer', $data);
    // }

    public function laporankriminal()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['kriminal'] = $this->M_polisi->laporan_kriminal()->result();
        $data['title'] = 'Laporan Kriminal';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('polisi/laporan_proses', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function laporankecelakaan()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['kecelakaan'] = $this->M_polisi->laporan_kecelakaan()->result();
        $data['title'] = 'Laporan Kecelakaan';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('polisi/laporan_proses', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function laporanbencana()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['bencana'] = $this->M_polisi->laporan_bencana()->result();
        $data['title'] = 'Laporan Bencana';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('polisi/laporan_proses', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function edit_pengaduan($id)
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['edit'] = $this->M_polisi->detail($id)->row();
        $data['title'] = 'Edit Pengaduan';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('polisi/edit_pengaduan', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function updatepengaduan($id)
    {
        $status = $this->input->post('status');

        $data = [
            'status' => $status,
        ];

        $update = $this->M_polisi->update_pengaduan($data, $id);

        if ($update) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data tidak berhasil diupdate</div>');
        }
        redirect('Polisi/laporan', $data);
    }

    public function riwayat()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['riwayat'] = $this->M_polisi->riwayat()->result();
        $data['title'] = 'Riwayat';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('polisi/riwayat_pengaduan', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function riwayat_selesai()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['selesai'] = $this->M_polisi->riwayat_selesai()->result();
        $data['title'] = 'Selesai';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('Polisi/riwayat_pengaduan', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function riwayat_tolak()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['tolak'] = $this->M_polisi->riwayat_tolak()->result();
        $data['title'] = 'Tolak';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('Polisi/riwayat_pengaduan', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function detail_riwayat($id)
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['detail'] = $this->M_polisi->detail_riwayat($id)->row();
        $data['title'] = 'Detail Riwayat';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('polisi/detail_riwayat', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function delete_riwayat($id)
    {
        $delete_riwayat = $this->M_polisi->delete_riwayat($id);
        if ($delete_riwayat) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data yang anda pilih telah terhapus</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tidak bisa hapus data</div>');
        }
        redirect('Polisi/riwayat');
    }
}