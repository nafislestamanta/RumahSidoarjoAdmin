<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PanikMenu extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_panikmenu');
    }

    public function index()
    {
        $data['kantorpolisi'] = $this->m_panikmenu->kantorpolisi()->result();
        $data['title'] = 'Kantor Polisi';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('panikmenu/managemendata', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function laporanpanik()
    {
        $data['laporan'] = $this->m_panikmenu->laporan()->result();
        $data['title'] = 'Laporan Panik';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('panikmenu/laporanpanik', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function laporankriminal()
    {
        $data['kriminal'] = $this->m_panikmenu->laporan_kriminal()->result();
        $data['title'] = 'Laporan Kriminal';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('panikmenu/laporanpanik', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function laporankecelakaan()
    {
        $data['kecelakaan'] = $this->m_panikmenu->laporan_kecelakaan()->result();
        $data['title'] = 'Laporan Kecelakaan';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('panikmenu/laporanpanik', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function laporanbencana()
    {
        $data['bencana'] = $this->m_panikmenu->laporan_bencana()->result();
        $data['title'] = 'Laporan Bencana';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('panikmenu/laporanpanik', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function konfirmasi()
    {
        $data['konfirmasi'] = $this->m_panikmenu->konfirmasi()->result();
        $data['title'] = 'Konfirmasi Laporan';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('panikmenu/konfirmasi_laporan', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function konfirmasiKriminal()
    {
        $data['kriminal'] = $this->m_panikmenu->konfirmasi_Kriminal()->result();
        $data['title'] = 'Konfirmasi Laporan Kriminal';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('panikmenu/konfirmasi_laporan', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function konfirmasiKecelakaan()
    {
        $data['kecelakaan'] = $this->m_panikmenu->konfirmasi_kecelakaan()->result();
        $data['title'] = 'Konfirmasi Laporan Kecelakaan';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('panikmenu/konfirmasi_laporan', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function konfirmasiBencana()
    {
        $data['bencana'] = $this->m_panikmenu->konfirmasi_bencana()->result();
        $data['title'] = 'Konfirmasi Laporan Bencana';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('panikmenu/konfirmasi_laporan', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function updateKonfirmasi($id)
    {
        $nik = $this->input->post('nik');
        $kategori = $this->input->post('kategori');
        $lokasi = $this->input->post('lokasi');
        $waktu = $this->input->post('waktu');
        $bukti = $this->input->post('bukti');
        $deskripsi = $this->input->post('deskripsi');
        $petugas = $this->input->post('petugas');
        $status = $this->input->post('status');
        $checkbox = implode(',', $this->input->post('nama', TRUE));

        $data = [
            'NIK' => $nik,
            'kategori' => $kategori,
            'lokasi_kejadian' => $lokasi,
            'waktu_kejadian' => $waktu,
            'bukti_kejadian' => $bukti,
            'deskripsi' => $deskripsi,
            'petugas' => $checkbox,
            'status' => "Proses",
        ];

        $datas = [
            'status' => "Proses"
        ];

        $tambah = $this->m_panikmenu->updatekonfirmasi($id, $datas);
        $tambah = $this->m_panikmenu->tambahkonfirmasi($data);

        if ($tambah) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambah</div>');
            redirect('PanikMenu/konfirmasi', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data tidak berhasil ditambah</div>');
            redirect('PanikMenu/konfirmasi', $data);
        }
        // }
    }

    public function detail_konfirmasi($id)
    {
        $data['edit'] = $this->m_panikmenu->detail_konfirmasi($id)->row();
        $data['title'] = 'Detail Konfirmasi Laporan';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('panikmenu/detail_konfirmasi', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function delete_Kriminal($id)
    {
        $delete = $this->m_panikmenu->delete_laporan($id);
        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data yang anda pilih telah terhapus</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tidak bisa hapus data</div>');
        }
        redirect('PanikMenu/konfirmasiKriminal');
    }

    public function delete_Kecelakaan($id)
    {
        $delete = $this->m_panikmenu->delete_laporan($id);
        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data yang anda pilih telah terhapus</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tidak bisa hapus data</div>');
        }
        redirect('PanikMenu/konfirmasiKecelakaan');
    }

    public function delete_Bencanaa($id)
    {
        $delete = $this->m_panikmenu->delete_laporan($id);
        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data yang anda pilih telah terhapus</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tidak bisa hapus data</div>');
        }
        redirect('PanikMenu/konfirmasiBencana');
    }

    public function delete_laporan($id)
    {
        $delete = $this->m_panikmenu->delete_laporan($id);
        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data yang anda pilih telah terhapus</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tidak bisa hapus data</div>');
        }
        redirect('PanikMenu/konfirmasi');
    }

    public function delete_laporanKriminal($id)
    {
        $delete = $this->m_panikmenu->delete_laporan($id);
        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data yang anda pilih telah terhapus</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tidak bisa hapus data</div>');
        }
        redirect('PanikMenu/laporanKriminal');
    }

    public function delete_laporankecelakaan($id)
    {
        $delete = $this->m_panikmenu->delete_laporan($id);
        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data yang anda pilih telah terhapus</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tidak bisa hapus data</div>');
        }
        redirect('PanikMenu/laporankecelakaan');
    }

    public function delete_laporanBencana($id)
    {
        $delete = $this->m_panikmenu->delete_laporan($id);
        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data yang anda pilih telah terhapus</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tidak bisa hapus data</div>');
        }
        redirect('PanikMenu/laporanBencana');
    }

    public function rumahsakit()
    {
        $data['rumahsakit'] = $this->m_panikmenu->rumahsakit()->result();
        $data['title'] = 'Rumah Sakit';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('panikmenu/managemendata', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function bencana()
    {
        $data['Bencana'] = $this->m_panikmenu->bpbd()->result();
        $data['title'] = 'Bencana';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('panikmenu/managemendata', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function delete_kantorpolisi($id)
    {
        $delete = $this->m_panikmenu->delete_kantorpolisi($id);
        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data yang anda pilih telah terhapus</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tidak bisa hapus data</div>');
        }
        redirect('PanikMenu');
    }

    public function delete_rumahsakit($id)
    {
        $delete = $this->m_panikmenu->delete_rumahsakit($id);
        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data yang anda pilih telah terhapus</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tidak bisa hapus data</div>');
        }
        redirect('PanikMenu/rumahsakit');
    }

    public function delete_Bencana($id)
    {
        $delete = $this->m_panikmenu->delete_bpbd($id);
        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data yang anda pilih telah terhapus</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tidak bisa hapus data</div>');
        }
        redirect('PanikMenu/Bencana');
    }

    public function tambah_kantorpolisi()
    {
        $data['kecamatan'] = $this->m_panikmenu->kecamatan()->result();
        $data['title'] = 'Tambah Kantor Polisi';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('panikmenu/tambah_managemendata', $data);
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

            $tambah = $this->m_panikmenu->tambah_kantorpolisi($data);

            if ($tambah) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambah</div>');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data tidak berhasil ditambah</div>');
            }

            redirect('PanikMenu', $data);
        }
    }

    public function tambah_Bencana()
    {
        $data['kecamatan'] = $this->m_panikmenu->kecamatan()->result();
        $data['title'] = 'Tambah BPBD';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('panikmenu/tambah_managemendata', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function tambahBencana()
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
            $this->tambah_Bencana();
        } else {
            $nama = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $kecamatan = $this->input->post('kecamatan');
            $notelp = $this->input->post('notelp');
            $pj = $this->input->post('pj');

            $data = [
                'nama' => $nama,
                'alamat' => $alamat,
                'id_kecamatan' => $kecamatan,
                'no_tlp' => $notelp,
                'penanggungjawab' => $pj,
            ];

            $tambah = $this->m_panikmenu->tambah_bpbd($data);

            if ($tambah) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambah</div>');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data tidak berhasil ditambah</div>');
            }

            redirect('PanikMenu/Bencana', $data);
        }
    }

    public function edit_kantorpolisi($id)
    {
        $data['edit'] = $this->m_panikmenu->detail_kantorpolisi($id)->row();
        $data['kecamatan'] = $this->m_panikmenu->kecamatan()->result();
        $data['title'] = 'Edit Kantor Polisi';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('panikmenu/edit_managemendata', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function updateKantorPolisi($id)
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
            $alamat = $this->input->post('alamat');
            $kecamatan = $this->input->post('kecamatan');
            $notelp = $this->input->post('notelp');
            $pj = $this->input->post('pj');

            $data = [
                'id_kantor_polisi' => $id,
                'nama_kantor_polisi' => $nama,
                'alamat' => $alamat,
                'id_kecamatan' => $kecamatan,
                'no_tlp' => $notelp,
                'penanggungjawab' => $pj,
            ];

            $update = $this->m_panikmenu->update_kantorpolisi($data, $id);

            if ($update) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data tidak berhasil diupdate</div>');
            }
            redirect('PanikMenu', $data);
        }
    }

    public function edit_Bencana($id)
    {
        $data['edit'] = $this->m_panikmenu->detail_bpbd($id)->row();
        $data['kecamatan'] = $this->m_panikmenu->kecamatan()->result();
        $data['title'] = 'Edit BPBD';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('panikmenu/edit_managemendata', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function update_Bencana($id)
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
            $this->edit_Bencana($id);
        } else {
            $nama = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $kecamatan = $this->input->post('kecamatan');
            $notelp = $this->input->post('notelp');
            $pj = $this->input->post('pj');

            $data = [
                'id_bpbd' => $id,
                'nama' => $nama,
                'alamat' => $alamat,
                'id_kecamatan' => $kecamatan,
                'no_tlp' => $notelp,
                'penanggungjawab' => $pj,
            ];

            $update = $this->m_panikmenu->update_bpbd($data, $id);

            if ($update) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data tidak berhasil diupdate</div>');
            }

            redirect('PanikMenu/Bencana', $data);
        }
    }

    public function detail_kantorpolisi($id)
    {
        $data['detail'] = $this->m_panikmenu->detail_kantorpolisi($id)->row();
        $data['kecamatan'] = $this->m_panikmenu->kecamatan()->result();
        $data['title'] = 'Detail Kantor Polisi';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('panikmenu/detail_managemendata', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function detail_Bencana($id)
    {
        $data['detail'] = $this->m_panikmenu->detail_bpbd($id)->row();
        $data['kecamatan'] = $this->m_panikmenu->kecamatan()->result();
        $data['title'] = 'Detail BPBD';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('panikmenu/detail_managemendata', $data);
        $this->load->view('admin/templates/footer', $data);
    }
}
