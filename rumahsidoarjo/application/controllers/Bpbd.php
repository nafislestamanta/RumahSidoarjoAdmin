<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bpbd extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_bpbd');
    }

    public function index()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        // $data['kantor'] = $this->M_polisi->jmlh_kantor()->row();
        // $data['pengaduan'] = $this->M_polisi->jmlh_pengaduan()->row();
        // $data['selesai'] = $this->M_polisi->jmlh_selesai()->row();
        // $data['tolak'] = $this->M_polisi->jmlh_tolak()->row();
        $data['tampil'] = $this->M_bpbd->tampil_kantor()->result();
        $data['title'] = 'Kantor';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('bpbd/kantor', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function detail_kantor($id)
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['detail'] = $this->M_bpbd->kantor_bpbd($id)->row();
        $data['kecamatan'] = $this->M_bpbd->kecamatan()->result();
        $data['title'] = 'Detail Kantor ';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('bpbd/detail_kantor', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function delete_kantor($id)
    {
        $delete = $this->M_bpbd->delete_kantor($id);
        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data yang anda pilih telah terhapus</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tidak bisa hapus data</div>');
        }
        redirect('Bpbd');
    }

    public function tambah_kantor()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['kecamatan'] = $this->M_bpbd->kecamatan()->result();
        $data['title'] = 'Tambah Kantor';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('bpbd/tambah_kantor', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function save()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('kecamatan', 'kecamatan', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('pj', 'Pj', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('notelp', 'Notelp', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == false) {
            $this->tambah_kantor();
        } else {
            $nama = $this->input->post('nama');
            $kecamatan = $this->input->post('kecamatan');
            $alamat = $this->input->post('alamat');
            $pj = $this->input->post('pj');
            $notelp = $this->input->post('notelp');

            $data = [
                'nama' => $nama,
                'id_kecamatan' => $kecamatan,
                'alamat' => $alamat,
                'penanggungjawab' => $pj,
                'no_tlp' => $notelp,
            ];

            $tambah = $this->M_bpbd->tambah_kantor($data);

            if ($tambah) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambah</div>');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data tidak berhasil ditambah</div>');
            }

            redirect('Bpbd', $data);
        }
    }

    public function edit_kantor($id)
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['edit'] = $this->M_bpbd->kantor_bpbd($id)->row();
        $data['kecamatan'] = $this->M_bpbd->kecamatan()->result();
        $data['title'] = 'Edit Kantor';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('bpbd/edit_kantor', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function update_kantor($id)
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('kecamatan', 'kecamatan', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('pj', 'Pj', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('notelp', 'Notelp', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == false) {
            $this->edit_kantor($id);
        } else {
            $nama = $this->input->post('nama');
            $kecamatan = $this->input->post('kecamatan');
            $alamat = $this->input->post('alamat');
            $pj = $this->input->post('pj');
            $notelp = $this->input->post('notelp');

            $data = [
                'nama' => $nama,
                'id_kecamatan' => $kecamatan,
                'alamat' => $alamat,
                'penanggungjawab' => $pj,
                'no_tlp' => $notelp,
            ];

            $update = $this->M_bpbd->update_kantor($data, $id);

            if ($update) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data tidak berhasil diupdate</div>');
            }
            redirect('Bpbd', $data);
        }
    }

    public function laporan()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['laporan'] = $this->M_bpbd->laporan()->result();
        $data['title'] = 'Laporan';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('bpbd/laporan_proses', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function edit_pengaduan($id)
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['edit'] = $this->M_bpbd->detail($id)->row();
        $data['title'] = 'Edit Pengaduan';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('bpbd/edit_pengaduan', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function updatepengaduan($id)
    {
        $status = $this->input->post('status');

        $data = [
            'status' => $status,
        ];

        $update = $this->M_bpbd->update_pengaduan($data, $id);

        if ($update) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data tidak berhasil diupdate</div>');
        }
        redirect('Bpbd/laporan', $data);
    }

    public function riwayat()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['riwayat'] = $this->M_bpbd->riwayat()->result();
        $data['title'] = 'Riwayat';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('bpbd/riwayat_pengaduan', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function riwayat_selesai()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['selesai'] = $this->M_bpbd->riwayat_selesai()->result();
        $data['title'] = 'Selesai';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('bpbd/riwayat_pengaduan', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function riwayat_tolak()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['tolak'] = $this->M_bpbd->riwayat_tolak()->result();
        $data['title'] = 'Tolak';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('bpbd/riwayat_pengaduan', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function detail_riwayat($id)
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['detail'] = $this->M_bpbd->detail_riwayat($id)->row();
        $data['title'] = 'Detail Riwayat';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('bpbd/detail_riwayat', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function delete_riwayat($id)
    {
        $delete_riwayat = $this->M_bpbd->delete_riwayat($id);
        if ($delete_riwayat) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data yang anda pilih telah terhapus</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tidak bisa hapus data</div>');
        }
        redirect('Bpbd/riwayat');
    }
}