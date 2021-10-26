<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Umkm extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_umkm');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['tampil'] = $this->M_umkm->tampil()->result();
        $data['title'] = 'Tampil';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('umkm/umkm', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function tampil_kerajinan()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['tampil'] = $this->M_umkm->tampil_kerajinan()->result();
        $data['title'] = 'Kerajinan';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('umkm/umkm', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function tampil_makanan()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['tampil'] = $this->M_umkm->tampil_makanan()->result();
        $data['title'] = 'Makanan';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('umkm/umkm', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function tampil_pertanian()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['tampil'] = $this->M_umkm->tampil_pertanian()->result();
        $data['title'] = 'Pertanian';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('umkm/umkm', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function edit_umkm($id)
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['edit'] = $this->M_umkm->detail($id)->row();
        $data['title'] = 'Edit Umkm';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('umkm/edit_umkm', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function tambah_umkm()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Tambah Umkm';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('umkm/tambah_umkm', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function detail_umkm($id)
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['detail'] = $this->M_umkm->detail($id)->row();
        $data['title'] = 'Detail Umkm';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('umkm/detail_umkm', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function delete($id)
    {
        $delete = $this->M_umkm->delete($id);
        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data yang anda pilih telah terhapus</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tidak bisa hapus data</div>');
        }
        redirect('Umkm');
    }

    public function save()
    {
        $model = $this->M_umkm;

        if ($model->save()) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Tidak Berhasil Ditambah</div>');
        }
        redirect(site_url('Umkm'));
    }

    public function update($id)
    {
        $this->form_validation->set_rules('kategori', 'kategori', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('nama', 'nama', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('penanggung_jawab', 'penanggung_jawab', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('no_telp', 'no_telp', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);


        if ($this->form_validation->run() == false) {
            $this->edit_umkm($id);
        } else {
            $kategori = $this->input->post('kategori');
            $nama = $this->input->post('nama');
            $penanggung_jawab = $this->input->post('penanggung_jawab');
            $foto1 = $_FILES['foto1']['name'];
            $foto2 = $_FILES['foto2']['name'];
            $foto3 = $_FILES['foto3']['name'];
            $no_telp = $this->input->post('no_telp');
            $deskripsi = $this->input->post('deskripsi');
            $website = $this->input->post('website');
            $lat = $this->input->post('lat');
            $long = $this->input->post('long');

            $config['upload_path']        =    './assets/img/';
            $config['allowed_types']    =    'jpg|jpeg|png';
            $config['max_size']            =    10000;

            $this->load->library('upload', $config);

            if ($foto1 && $foto2 && $foto3) {
                if ($this->upload->do_upload('foto1') && $this->upload->do_upload('foto2') && $this->upload->do_upload('foto3')) {
                    $data = [
                        'kategori' => $kategori,
                        'nama' => $nama,
                        'penanggung_jawab' => $penanggung_jawab,
                        'foto1' => preg_replace("/\s+/", "_", $foto1),
                        'foto2' => preg_replace("/\s+/", "_", $foto2),
                        'foto3' => preg_replace("/\s+/", "_", $foto3),
                        'no_telp' => $no_telp,
                        'deskripsi' => $deskripsi,
                        'website' => $website,
                        'lat' => $lat,
                        'long' => $long,
                    ];

                    $update = $this->M_umkm->update_umkm($data, $id);

                    if ($update) {
                        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data tidak berhasil diupdate</div>');
                    }
                    redirect('Umkm', $data);
                } else {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Gambar tidak sesuai format</div>');
                    redirect('Umkm', $error);
                }
            } elseif ($foto1) {
                if ($this->upload->do_upload('foto1')) {
                    $data = [
                        'kategori' => $kategori,
                        'nama' => $nama,
                        'penanggung_jawab' => $penanggung_jawab,
                        'foto1' => preg_replace("/\s+/", "_", $foto1),
                        'no_telp' => $no_telp,
                        'deskripsi' => $deskripsi,
                        'website' => $website,
                        'lat' => $lat,
                        'long' => $long,
                    ];

                    $update = $this->M_umkm->update_umkm($data, $id);

                    if ($update) {
                        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data tidak berhasil diupdate</div>');
                    }
                    redirect('Umkm', $data);
                } else {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Gambar tidak sesuai format</div>');
                    redirect('Umkm', $error);
                }
            } elseif ($foto2) {
                if ($this->upload->do_upload('foto2')) {
                    $data = [
                        'kategori' => $kategori,
                        'nama' => $nama,
                        'penanggung_jawab' => $penanggung_jawab,
                        'foto2' => preg_replace("/\s+/", "_", $foto2),
                        'no_telp' => $no_telp,
                        'deskripsi' => $deskripsi,
                        'website' => $website,
                        'lat' => $lat,
                        'long' => $long,
                    ];

                    $update = $this->M_umkm->update_umkm($data, $id);

                    if ($update) {
                        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data tidak berhasil diupdate</div>');
                    }
                    redirect('Umkm', $data);
                } else {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Gambar tidak sesuai format</div>');
                    redirect('Umkm', $error);
                }
            } elseif ($foto3) {
                if ($this->upload->do_upload('foto3')) {
                    $data = [
                        'kategori' => $kategori,
                        'nama' => $nama,
                        'penanggung_jawab' => $penanggung_jawab,
                        'foto3' => preg_replace("/\s+/", "_", $foto3),
                        'no_telp' => $no_telp,
                        'deskripsi' => $deskripsi,
                        'website' => $website,
                        'lat' => $lat,
                        'long' => $long,
                    ];

                    $update = $this->M_umkm->update_umkm($data, $id);

                    if ($update) {
                        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data tidak berhasil diupdate</div>');
                    }
                    redirect('Umkm', $data);
                } else {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Gambar tidak sesuai format</div>');
                    redirect('Umkm', $error);
                }
            } else {
                $data = [
                    'kategori' => $kategori,
                    'nama' => $nama,
                    'penanggung_jawab' => $penanggung_jawab,
                    'no_telp' => $no_telp,
                    'deskripsi' => $deskripsi,
                    'website' => $website,
                    'lat' => $lat,
                    'long' => $long,
                ];
                $update = $this->M_umkm->update_umkm($data, $id);

                if ($update) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data tidak berhasil diupdate</div>');
                }
                redirect('Umkm', $data);
            }
        }
    }
}