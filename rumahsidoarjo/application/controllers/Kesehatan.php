<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kesehatan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_kesehatan');
    }

    public function index()
    {
        $data['pkmp'] = $this->m_kesehatan->pkmp()->result();
        $data['title'] = 'Pkm Pembantu';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('kesehatan/pkmpembantu', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function pkmutama()
    {
        $data['pmu'] = $this->m_kesehatan->pkmu()->result();
        $data['title'] = 'Pkm Utama';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('kesehatan/pkmutama', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function tambahpkmu()
    {
        $data['kecamatan'] = $this->m_kesehatan->kecamatan()->result();
        $data['title'] = 'Pkm Utama';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('kesehatan/tambahpkmu', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function simpanpkmu()
    {
        $this->rules();
        if ($this->form_validation->run() == false) {
            $this->tambahpkmu();
        } else {
            $nama = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $kecamatan = $this->input->post('kecamatan');
            $pengelola = $this->input->post('pengelola');
            $pj = $this->input->post('pj');
            $notelp = $this->input->post('notelp');
            $fax = $this->input->post('fax');
            $email = $this->input->post('email');
            $long = $this->input->post('long');
            $lat = $this->input->post('lat');
            $website = $this->input->post('website');
            $gambar = $_FILES['gambar']['name'];
            $link = $this->input->post('link');

            $config['upload_path']        =    './assets/img/';
            $config['allowed_types']    =    'jpg|jpeg|png';
            $config['max_size']            =    10000;

            $this->load->library('upload', $config);

            if ($gambar) {
                if ($this->upload->do_upload('gambar')) {

                    $data = [
                        'nama' => $nama,
                        'alamat' => $alamat,
                        'id_kecamatan' => $kecamatan,
                        'kepemilikan' => $pengelola,
                        'penanggung_jawab' => $pj,
                        'no_telepon' => $notelp,
                        'fax' => $fax,
                        'email' => $email,
                        'long' => $long,
                        'lat' => $lat,
                        'website' => $website,
                        'foto' => preg_replace("/\s+/", "_", $gambar),
                        'link' => $link,
                        'kategori' => 'PKM UTAMA'
                    ];

                    $tambah = $this->m_kesehatan->tambah($data);

                    if ($tambah) {
                        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambah</div>');
                        redirect('Kesehatan/pkmutama', $data);
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data tidak berhasil ditambah</div>');
                        redirect('Kesehatan/pkmutama', $data);
                    }
                } else {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gambar tidak sesuai format</div>');
                    redirect('Kesehatan/pkmutama', $error);
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Gagal Ditambahkan, Harap Mengupload Gambar</div>');
                redirect('Kesehatan/pkmutama');
            }
        }
    }

    public function editpkmu($id)
    {
        $data['pkmu'] = $this->m_kesehatan->pkm_u($id)->row();
        $data['kecamatan'] = $this->m_kesehatan->kecamatan()->result();
        $data['title'] = 'Pkm Utama';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('kesehatan/editpkmu', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function savepkmu($id)
    {
        $this->rules();
        if ($this->form_validation->run() == false) {
            $this->editpkmu($id);
        } else {
            $nama = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $kecamatan = $this->input->post('kecamatan');
            $pengelola = $this->input->post('pengelola');
            $pj = $this->input->post('pj');
            $notelp = $this->input->post('notelp');
            $fax = $this->input->post('fax');
            $email = $this->input->post('email');
            $long = $this->input->post('long');
            $lat = $this->input->post('lat');
            $website = $this->input->post('website');
            $gambar = $_FILES['gambar']['name'];
            $link = $this->input->post('link');

            $config['upload_path']        =    './assets/img/';
            $config['allowed_types']    =    'jpg|jpeg|png';
            $config['max_size']            =    10000;

            $this->load->library('upload', $config);

            if ($gambar) {
                if ($this->upload->do_upload('gambar')) {

                    $data = [
                        'nama' => $nama,
                        'alamat' => $alamat,
                        'id_kecamatan' => $kecamatan,
                        'kepemilikan' => $pengelola,
                        'penanggung_jawab' => $pj,
                        'no_telepon' => $notelp,
                        'fax' => $fax,
                        'email' => $email,
                        'long' => $long,
                        'lat' => $lat,
                        'website' => $website,
                        'foto' => preg_replace("/\s+/", "_", $gambar),
                        'link' => $link,
                    ];

                    $update = $this->m_kesehatan->update($data, $id);

                    if ($update) {
                        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
                        redirect('Kesehatan/pkmutama', $data);
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data tidak berhasil diupdate</div>');
                        redirect('Kesehatan/pkmutama', $data);
                    }
                } else {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Gambar tidak sesuai format</div>');
                    redirect('Kesehatan/pkmutama', $error);
                }
            } else {
                $data = [
                    'nama' => $nama,
                    'alamat' => $alamat,
                    'id_kecamatan' => $kecamatan,
                    'kepemilikan' => $pengelola,
                    'penanggung_jawab' => $pj,
                    'no_telepon' => $notelp,
                    'fax' => $fax,
                    'email' => $email,
                    'long' => $long,
                    'lat' => $lat,
                    'website' => $website,
                    'link' => $link,
                ];

                $update = $this->m_kesehatan->update($data, $id);

                if ($update) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
                    redirect('Kesehatan/pkmutama', $data);
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data tidak berhasil diudpate</div>');
                    redirect('Kesehatan/pkmutama', $data);
                }
            }
        }
    }

    public function pkmp()
    {
        $data['title'] = 'Pkm Utama';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('kesehatan/pkmp', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function tambahpkmp()
    {
        $data['kecamatan'] = $this->m_kesehatan->kecamatan()->result();
        $data['title'] = 'Pkm Utama';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('kesehatan/tambahpkmp', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function simpanpkmp()
    {
        $this->rules();
        if ($this->form_validation->run() == false) {
            $this->tambahpkmp();
        } else {
            $nama = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $kecamatan = $this->input->post('kecamatan');
            $pengelola = $this->input->post('pengelola');
            $pj = $this->input->post('pj');
            $notelp = $this->input->post('notelp');
            $fax = $this->input->post('fax');
            $email = $this->input->post('email');
            $long = $this->input->post('long');
            $lat = $this->input->post('lat');
            $website = $this->input->post('website');
            $gambar = $_FILES['gambar']['name'];
            $link = $this->input->post('link');

            $config['upload_path']        =    './assets/img/';
            $config['allowed_types']    =    'jpg|jpeg|png';
            $config['max_size']            =    10000;

            $this->load->library('upload', $config);

            if ($gambar) {
                if ($this->upload->do_upload('gambar')) {

                    $data = [
                        'nama' => $nama,
                        'alamat' => $alamat,
                        'id_kecamatan' => $kecamatan,
                        'kepemilikan' => $pengelola,
                        'penanggung_jawab' => $pj,
                        'no_telepon' => $notelp,
                        'fax' => $fax,
                        'email' => $email,
                        'long' => $long,
                        'lat' => $lat,
                        'website' => $website,
                        'foto' => preg_replace("/\s+/", "_", $gambar),
                        'link' => $link,
                        'kategori' => 'PKM PEMBANTU'
                    ];

                    $tambah = $this->m_kesehatan->tambah($data);

                    if ($tambah) {
                        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambah</div>');
                        redirect('Kesehatan', $data);
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data tidak berhasil ditambah</div>');
                        redirect('Kesehatan', $data);
                    }
                } else {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gambar tidak sesuai format</div>');
                    redirect('Kesehatan', $error);
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Gagal Ditambahkan, Harap Mengupload Gambar</div>');
                redirect('Kesehatan');
            }
        }
    }

    public function editpkmp($id)
    {
        $data['pkmp'] = $this->m_kesehatan->pkm_p($id)->row();
        $data['kecamatan'] = $this->m_kesehatan->kecamatan()->result();
        $data['title'] = 'Pkm Pembantu';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('kesehatan/editpkmp', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function savepkmp($id)
    {
        $this->rules();
        if ($this->form_validation->run() == false) {
            $this->editpkmp($id);
        } else {
            $nama = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $kecamatan = $this->input->post('kecamatan');
            $pengelola = $this->input->post('pengelola');
            $pj = $this->input->post('pj');
            $notelp = $this->input->post('notelp');
            $fax = $this->input->post('fax');
            $email = $this->input->post('email');
            $long = $this->input->post('long');
            $lat = $this->input->post('lat');
            $website = $this->input->post('website');
            $gambar = $_FILES['gambar']['name'];
            $link = $this->input->post('link');

            $config['upload_path']        =    './assets/img/';
            $config['allowed_types']    =    'jpg|jpeg|png';
            $config['max_size']            =    10000;

            $this->load->library('upload', $config);

            if ($gambar) {
                if ($this->upload->do_upload('gambar')) {

                    $data = [
                        'nama' => $nama,
                        'alamat' => $alamat,
                        'id_kecamatan' => $kecamatan,
                        'kepemilikan' => $pengelola,
                        'penanggung_jawab' => $pj,
                        'no_telepon' => $notelp,
                        'fax' => $fax,
                        'email' => $email,
                        'long' => $long,
                        'lat' => $lat,
                        'website' => $website,
                        'foto' => preg_replace("/\s+/", "_", $gambar),
                        'link' => $link,
                    ];

                    $update = $this->m_kesehatan->update($data, $id);

                    if ($update) {
                        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
                        redirect('Kesehatan', $data);
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data tidak berhasil diupdate</div>');
                        redirect('Kesehatan', $data);
                    }
                } else {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Gambar tidak sesuai format</div>');
                    redirect('Kesehatan', $error);
                }
            } else {
                $data = [
                    'nama' => $nama,
                    'alamat' => $alamat,
                    'id_kecamatan' => $kecamatan,
                    'kepemilikan' => $pengelola,
                    'penanggung_jawab' => $pj,
                    'no_telepon' => $notelp,
                    'fax' => $fax,
                    'email' => $email,
                    'long' => $long,
                    'lat' => $lat,
                    'website' => $website,
                    'link' => $link,
                ];

                $update = $this->m_kesehatan->update($data, $id);

                if ($update) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
                    redirect('Kesehatan', $data);
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data tidak berhasil diudpate</div>');
                    redirect('Kesehatan', $data);
                }
            }
        }
    }

    public function rs()
    {
        $data['rsu'] = $this->m_kesehatan->rumahsakit()->result();
        $data['title'] = 'Rumah Sakit';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('kesehatan/rsu', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function tambahrsu()
    {
        $data['kecamatan'] = $this->m_kesehatan->kecamatan()->result();
        $data['title'] = 'Rumah Sakit';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('kesehatan/tambahrsu', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function simpanrsu()
    {
        $this->rules();
        if ($this->form_validation->run() == false) {
            $this->tambahrsu();
        } else {
            $nama = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $kecamatan = $this->input->post('kecamatan');
            $pengelola = $this->input->post('pengelola');
            $pj = $this->input->post('pj');
            $notelp = $this->input->post('notelp');
            $fax = $this->input->post('fax');
            $email = $this->input->post('email');
            $long = $this->input->post('long');
            $lat = $this->input->post('lat');
            $website = $this->input->post('website');
            $gambar = $_FILES['gambar']['name'];
            $link = $this->input->post('link');

            $config['upload_path']        =    './assets/img/';
            $config['allowed_types']    =    'jpg|jpeg|png';
            $config['max_size']            =    10000;

            $this->load->library('upload', $config);

            if ($gambar) {
                if ($this->upload->do_upload('gambar')) {

                    $data = [
                        'nama' => $nama,
                        'alamat' => $alamat,
                        'id_kecamatan' => $kecamatan,
                        'kepemilikan' => $pengelola,
                        'penanggung_jawab' => $pj,
                        'no_telepon' => $notelp,
                        'fax' => $fax,
                        'email' => $email,
                        'long' => $long,
                        'lat' => $lat,
                        'website' => $website,
                        'foto' => preg_replace("/\s+/", "_", $gambar),
                        'link' => $link,
                        'kategori' => 'RSU'
                    ];

                    $tambah = $this->m_kesehatan->tambah($data);

                    if ($tambah) {
                        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambah</div>');
                        redirect('Kesehatan/rs', $data);
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data tidak berhasil ditambah</div>');
                        redirect('Kesehatan/rs', $data);
                    }
                } else {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gambar tidak sesuai format</div>');
                    redirect('Kesehatan/rs', $error);
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Gagal Ditambahkan, Harap Mengupload Gambar</div>');
                redirect('Kesehatan/rs');
            }
        }
    }

    public function edit_rsu($id)
    {
        $data['rsu'] = $this->m_kesehatan->rsu($id)->row();
        $data['kecamatan'] = $this->m_kesehatan->kecamatan()->result();
        $data['title'] = 'Rumah Sakit';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('kesehatan/editrsu', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function saversu($id)
    {
        $this->rules();
        if ($this->form_validation->run() == false) {
            $this->edit_rsu($id);
        } else {
            $nama = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $kecamatan = $this->input->post('kecamatan');
            $pengelola = $this->input->post('pengelola');
            $pj = $this->input->post('pj');
            $notelp = $this->input->post('notelp');
            $fax = $this->input->post('fax');
            $email = $this->input->post('email');
            $long = $this->input->post('long');
            $lat = $this->input->post('lat');
            $website = $this->input->post('website');
            $gambar = $_FILES['gambar']['name'];
            $link = $this->input->post('link');

            $config['upload_path']        =    './assets/img/';
            $config['allowed_types']    =    'jpg|jpeg|png';
            $config['max_size']            =    10000;

            $this->load->library('upload', $config);

            if ($gambar) {
                if ($this->upload->do_upload('gambar')) {

                    $data = [
                        'nama' => $nama,
                        'alamat' => $alamat,
                        'id_kecamatan' => $kecamatan,
                        'kepemilikan' => $pengelola,
                        'penanggung_jawab' => $pj,
                        'no_telepon' => $notelp,
                        'fax' => $fax,
                        'email' => $email,
                        'long' => $long,
                        'lat' => $lat,
                        'website' => $website,
                        'foto' => preg_replace("/\s+/", "_", $gambar),
                        'link' => $link,
                        'kategori' => 'RSU'
                    ];

                    $update = $this->m_kesehatan->update($data, $id);

                    if ($update) {
                        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
                        redirect('Kesehatan/rs', $data);
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data tidak berhasil diupdate</div>');
                        redirect('Kesehatan/rs', $data);
                    }
                } else {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Gambar tidak sesuai format</div>');
                    redirect('Kesehatan/rs', $error);
                }
            } else {
                $data = [
                    'nama' => $nama,
                    'alamat' => $alamat,
                    'id_kecamatan' => $kecamatan,
                    'kepemilikan' => $pengelola,
                    'penanggung_jawab' => $pj,
                    'no_telepon' => $notelp,
                    'fax' => $fax,
                    'email' => $email,
                    'long' => $long,
                    'lat' => $lat,
                    'website' => $website,
                    'link' => $link,
                    'kategori' => 'RSU'
                ];

                $update = $this->m_kesehatan->update($data, $id);

                if ($update) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
                    redirect('Kesehatan/rs', $data);
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data tidak berhasil diudpate</div>');
                    redirect('Kesehatan/rs', $data);
                }
            }
        }
    }

    public function detail_rsu($id)
    {
        $data['rsu'] = $this->m_kesehatan->rsu($id)->row();
        $data['title'] = 'Rumah Sakit';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('kesehatan/detailrsu', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function detail_pkmu($id)
    {
        $data['pkmu'] = $this->m_kesehatan->pkm_u($id)->row();
        $data['title'] = 'PKM Utama';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('kesehatan/detailpkmu', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function detail_pkmp($id)
    {
        $data['pkmp'] = $this->m_kesehatan->pkm_p($id)->row();
        $data['title'] = 'PKM Pembantu';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('kesehatan/detailpkmp', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function delete_rsu($id)
    {
        $delete = $this->m_kesehatan->delete($id);
        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data yang anda pilih telah terhapus</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tidak bisa hapus data</div>');
        }
        redirect('Kesehatan/rs');
    }

    public function delete_pkmu($id)
    {
        $delete = $this->m_kesehatan->delete($id);
        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data yang anda pilih telah terhapus</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tidak bisa hapus data</div>');
        }
        redirect('Kesehatan/pkmutama');
    }

    public function delete_pkmp($id)
    {
        $delete = $this->m_kesehatan->delete($id);
        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data yang anda pilih telah terhapus</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tidak bisa hapus data</div>');
        }
        redirect('Kesehatan');
    }

    public function rules()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('pengelola', 'Pengelola', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('pj', 'Pj', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('notelp', 'Notelp', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('fax', 'Fax', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('long', 'Long', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('lat', 'Lat', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('link', 'Link', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        // $this->form_validation->set_rules('gambar', 'Gambar', 'required|trim', [
        //     'required' => 'Field tidak boleh kosong'
        // ]);
    }
}