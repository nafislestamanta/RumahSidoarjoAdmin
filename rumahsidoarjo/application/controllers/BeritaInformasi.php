<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BeritaInformasi extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_berita_informasi');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['tampil'] = $this->M_berita_informasi->tampil()->result();
        $data['title'] = 'BeritaInformasi';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('beritainformasi/beritainformasi', $data);
        $this->load->view('admin/templates/footer', $data);
    }
    //tambah berita dan informasi
    public function tambah()
    {
        $data['title'] = 'Tambah Berita Informasi';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('beritainformasi/tambahdata', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function save()
    {
        $model = $this->M_berita_informasi;

        if ($model->save()) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Tidak Berhasil Ditambah</div>');
        }
        redirect(site_url('BeritaInformasi/index'));
    }

    public function delete($id)
    {
        $delete = $this->M_berita_informasi->delete($id);
        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data yang anda pilih telah terhapus</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tidak bisa hapus data</div>');
        }
        redirect('BeritaInformasi');
    }

    public function tampilberita()
    {
        $data['tampil'] = $this->M_berita_informasi->tampilberita()->result();
        $data['title'] = 'Berita';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('beritainformasi/beritainformasi', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function tampilinformasi()
    {
        $data['tampil'] = $this->M_berita_informasi->tampilinformasi()->result();
        $data['title'] = 'Informasi';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('beritainformasi/beritainformasi', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function tampilpengumuman()
    {
        $data['tampil'] = $this->M_berita_informasi->tampilpengumuman()->result();
        $data['title'] = 'Pengumuman';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('beritainformasi/beritainformasi', $data);
        $this->load->view('admin/templates/footer', $data);
    }


    public function editberita($id)
    {
        $data['edit'] = $this->M_berita_informasi->detail($id)->row();
        $data['title'] = 'Berita';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('beritainformasi/editdata', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function updateberita($id)
    {
        $this->form_validation->set_rules('kategori', 'Kategori', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('judul', 'Judul Postingan', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('tanggal_publish', 'Tanggal Publish', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('link', 'Link', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == false) {
            $this->editberita($id);
        } else {
            $kategori = $this->input->post('kategori');
            $judul = $this->input->post('judul');
            $tanggal_publish = $this->input->post('tanggal_publish');
            $deskripsi = $this->input->post('deskripsi');
            $gambar = $_FILES['gambar']['name'];
            $link = $this->input->post('link');

            if ($gambar) {
                $data = [
                    'kategori' => $kategori,
                    'judul' => $judul,
                    'tanggal_publish' => $tanggal_publish,
                    'deskripsi' => $deskripsi,
                    'gambar' => $gambar,
                    'link' => $link,
                ];

                $update = $this->M_berita_informasi->update_berita($data, $id);

                if ($update) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data tidak berhasil diupdate</div>');
                }
                redirect('BeritaInformasi', $data);
            } else {
                $data = [
                    'kategori' => $kategori,
                    'judul' => $judul,
                    'tanggal_publish' => $tanggal_publish,
                    'deskripsi' => $deskripsi,
                    'link' => $link,
                ];

                $update = $this->M_berita_informasi->update_berita($data, $id);

                if ($update) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data tidak berhasil diupdate</div>');
                }
                redirect('BeritaInformasi', $data);
            }
        }
    }

    public function detailberita($id)
    {
        $data['detail'] = $this->M_berita_informasi->detail($id)->row();
        $data['title'] = 'Detail Berita';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('beritainformasi/detaildata', $data);
        $this->load->view('admin/templates/footer', $data);
    }
}