<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LayananPublik extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_layanan_publik');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['tampil'] = $this->M_layanan_publik->tampil_informasi()->result();
        $data['title'] = 'Informasi Umum';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('layananpublik/informasi_umum', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function delete($id)
    {
        $delete = $this->M_layanan_publik->delete($id);
        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data yang anda pilih telah terhapus</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tidak bisa hapus data</div>');
        }
        redirect('LayananPublik');
    }

    public function tambah_informasi()
    {
        $data['kategori_layanan'] = $this->M_layanan_publik->tampil_kategori()->result();
        $data['title'] = ' Tambah Informasi';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('layananpublik/tambah_informasi', $data);
        $this->load->view('admin/templates/footer', $data);
    }


    public function save_informasii()
    {
        $model = $this->M_layanan_publik;

        if ($model->save_informasii()) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Tidak Berhasil Ditambah</div>');
        }
        redirect(site_url('LayananPublik'));
    }

    public function edit_informasi($id)
    {
        $data['edit'] = $this->M_layanan_publik->edit_informasi($id)->row();
        $data['kategori_layanan'] = $this->M_layanan_publik->tampil_kategori($id)->result();
        $data['title'] = 'Edit Informasi';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('layananpublik/edit_informasi', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function update_informasi($id)
    {
        $this->form_validation->set_rules('nama_kategori', 'nama_kategori', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('nama', 'nama', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == false) {
            $this->edit_informasi($id);
        } else {
            $nama_kategori = $this->input->post('nama_kategori');
            $nama = $this->input->post('nama');
            $deskripsi = $this->input->post('deskripsi');

            if ($nama) {
                $data = [
                    'id_kategorilayanan' => $nama_kategori,
                    'nama' => $nama,
                    'deskripsi' => $deskripsi,
                ];

                $update = $this->M_layanan_publik->update_informasi($data, $id);

                if ($update) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data tidak berhasil diupdate</div>');
                }
                redirect('LayananPublik', $data);
            } else {
                $data = [
                    'id_kategorilayanan' => $nama_kategori,
                    'nama' => $nama,
                    'deskripsi' => $deskripsi,
                ];

                $update = $this->M_kerja->update_informasi($data, $id);

                if ($update) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data tidak berhasil diupdate</div>');
                }
                redirect('LayananPublik', $data);
            }
        }
    }

    public function pengaduan()
    {
        $data['tampil'] = $this->M_layanan_publik->tampil_pengaduan()->result();
        $data['title'] = 'Pengaduan';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('layananpublik/pengaduan_umum', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function tampil_pelayanan()
    {
        $data['tampil'] = $this->M_layanan_publik->tampil_pelayanan()->result();
        $data['title'] = 'Pelayanan';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('layananpublik/pengaduan_umum', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function tampil_fasilitas_publik()
    {
        $data['tampil'] = $this->M_layanan_publik->tampil_fasilitas_publik()->result();
        $data['title'] = 'Fasilitas Publik';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('layananpublik/pengaduan_umum', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function tampil_kesehatan()
    {
        $data['tampil'] = $this->M_layanan_publik->tampil_kesehatan()->result();
        $data['title'] = 'Kesehatan';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('layananpublik/pengaduan_umum', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function delete_pengaduan($id)
    {
        $delete = $this->M_layanan_publik->delete_pengaduan($id);
        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data yang anda pilih telah terhapus</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tidak bisa hapus data</div>');
        }
        redirect('LayananPublik/pengaduan');
    }

    public function edit_pengaduan($id)
    {
        $data['edit'] = $this->M_layanan_publik->detail($id)->row();
        $data['title'] = 'Edit Pengaduan';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('layananpublik/edit_pengaduan', $data);
        $this->load->view('admin/templates/footer', $data);
    }


    public function updatepengaduan($id)
    {
        $status_pengaduan = $this->input->post('status_pengaduan');

        $data = [
            'status_pengaduan' => $status_pengaduan,
        ];

        $update = $this->M_layanan_publik->update_pengaduan($data, $id);

        if ($update) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data tidak berhasil diupdate</div>');
        }
        redirect('LayananPublik/pengaduan', $data);
    }

    public function kategori()
    {
        $data['tampil'] = $this->M_layanan_publik->tampil_kategori()->result();
        $data['title'] = 'Kategori';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('layananpublik/kategori', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function delete_kategori($id)
    {
        $delete = $this->M_layanan_publik->delete_kategori($id);
        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data yang anda pilih telah terhapus</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tidak bisa hapus data</div>');
        }
        redirect('LayananPublik/kategori');
    }

    public function tambah_kategori()
    {
        $data['title'] = ' Tambah Kategori';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('layananpublik/tambah_kategori', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function save_kategori()
    {
        $model = $this->M_layanan_publik;

        if ($model->save_kategori()) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Tidak Berhasil Ditambah</div>');
        }
        redirect(site_url('LayananPublik/kategori'));
    }

    public function edit_kategori($id)
    {
        $data['edit'] = $this->M_layanan_publik->edit_kategori($id)->row();
        $data['title'] = 'Edit Kategori';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('layananpublik/edit_kategori', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function update_kategori($id)
    {
        $this->form_validation->set_rules('nama_kategori', 'nama_kategori', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        if ($this->form_validation->run() == false) {
            $this->edit_kategori($id);
        } else {
            $nama_kategori = $this->input->post('nama_kategori');

            if ($nama_kategori) {
                $data = [
                    'nama_kategori' => $nama_kategori,
                ];
                $update = $this->M_layanan_publik->update_kategori($data, $id);

                if ($update) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data tidak berhasil diupdate</div>');
                }
                redirect('LayananPublik/kategori', $data);
            } else {
                $data = [
                    'nama_kategori' => $nama_kategori,
                ];

                $update = $this->M_kerja->update_kategori($data, $id);

                if ($update) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data tidak berhasil diupdate</div>');
                }
                redirect('LayananPublik/kategori', $data);
            }
        }
    }
}