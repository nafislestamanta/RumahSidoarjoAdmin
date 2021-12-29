<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kesehatan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
        $this->load->model('m_kesehatan');
        $this->load->model('m_panikmenu');
    }

    public function index()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['pkmp'] = $this->m_kesehatan->pkmp()->result();
        $data['title'] = 'Pkm Pembantu';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('kesehatan/pkmpembantu', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function dashboard()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['pkmu'] = $this->m_kesehatan->jmlh_pkmu()->row();
        $data['pkmp'] = $this->m_kesehatan->jmlh_pkmp()->row();
        $data['rs'] = $this->m_kesehatan->jmlh_rs()->row();
        $data['title'] = 'Dashboard';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('kesehatan/dashboard_kesehatan', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function pkmutama()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
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
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
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
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
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
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Pkm Utama';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('kesehatan/pkmp', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function tambahpkmp()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
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
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
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
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
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
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
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
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
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
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
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
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
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
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
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

    public function laporan()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['laporan'] = $this->m_kesehatan->laporan()->result();
        $data['title'] = 'Laporan';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('kesehatan/laporan_proses', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function edit_pengaduan($id)
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['edit'] = $this->m_kesehatan->detail($id)->row();
        $data['title'] = 'Edit Pengaduan';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('Kesehatan/edit_pengaduan', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function updatepengaduan($id)
    {
        $status = $this->input->post('status');

        $data = [
            'status' => $status,
        ];

        $update = $this->m_kesehatan->update_pengaduan($data, $id);

        if ($update) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data tidak berhasil diupdate</div>');
        }
        redirect('Kesehatan/laporan', $data);
    }

    public function riwayat()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['riwayat'] = $this->m_kesehatan->riwayat()->result();
        //$data['riwayat'] = $this->m_kesehatan->riwayat_semua()->result();
        $data['title'] = 'Riwayat';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('kesehatan/riwayat_pengaduan', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function riwayat_selesai()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['selesai'] = $this->m_kesehatan->riwayat_selesai()->result();
        $data['title'] = 'Selesai';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('kesehatan/riwayat_pengaduan', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function riwayat_tolak()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['tolak'] = $this->m_kesehatan->riwayat_tolak()->result();
        $data['title'] = 'Tolak';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('kesehatan/riwayat_pengaduan', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function delete_riwayat($id)
    {
        $delete_riwayat = $this->m_kesehatan->delete_riwayat($id);
        if ($delete_riwayat) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data yang anda pilih telah terhapus</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tidak bisa hapus data</div>');
        }
        redirect('Kesehatan/riwayat');
    }

    public function detail_riwayat($id)
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['detail'] = $this->m_kesehatan->detail_riwayat($id)->row();
        $data['title'] = 'Detail Riwayat';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('kesehatan/detail_riwayat', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function simpanGambar1($id)
    {
        $foto = $_FILES['foto']['name'];

        $config['upload_path']        =    './assets/img/';
        $config['allowed_types']    =    'jpg|jpeg|png';
        $config['max_size']            =    10000;

        $this->load->library('upload', $config);

        if ($foto) {
            if ($this->upload->do_upload('foto')) {

                $data = [
                    'foto' => preg_replace("/\s+/", "_", $foto),
                ];

                $update = $this->m_kesehatan->update_gambar($id, $data);

                if ($update) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
                    redirect('Kesehatan/pkmutama', $data);
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data tidak berhasil di Update</div>');
                    redirect('Kesehatan/pkmutama', $data);
                }
            } else {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gambar tidak sesuai format</div>');
                redirect('Kesehatan/pkmutama');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Gagal Ditambahkan, Harap Mengupload Gambar</div>');
            redirect('Kesehatan/pkmutama');
        }
    }


    public function simpanGambar2($id)
    {
        $foto = $_FILES['foto']['name'];

        $config['upload_path']        =    './assets/img/';
        $config['allowed_types']    =    'jpg|jpeg|png';
        $config['max_size']            =    10000;

        $this->load->library('upload', $config);

        if ($foto) {
            if ($this->upload->do_upload('foto')) {

                $data = [
                    'foto' => preg_replace("/\s+/", "_", $foto),
                ];

                $update = $this->m_kesehatan->update_gambar($id, $data);

                if ($update) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
                    redirect('Kesehatan', $data);
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data tidak berhasil di Update</div>');
                    redirect('Kesehatan', $data);
                }
            } else {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gambar tidak sesuai format</div>');
                redirect('Kesehatan');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Gagal Ditambahkan, Harap Mengupload Gambar</div>');
            redirect('Kesehatan');
        }
    }

    public function simpanGambar3($id)
    {
        $foto = $_FILES['foto']['name'];

        $config['upload_path']        =    './assets/img/';
        $config['allowed_types']    =    'jpg|jpeg|png';
        $config['max_size']            =    10000;

        $this->load->library('upload', $config);

        if ($foto) {
            if ($this->upload->do_upload('foto')) {

                $data = [
                    'foto' => preg_replace("/\s+/", "_", $foto),
                ];

                $update = $this->m_kesehatan->update_gambar($id, $data);

                if ($update) {
                    $this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">Gambar berhasil diupdate</div>');
                    redirect('Kesehatan/edit_rsu/' . $id);
                } else {
                    $this->session->set_flashdata('alert', '<div class="alert alert-warning" role="alert">Gambar tidak berhasil di Update</div>');
                    redirect('Kesehatan/edit_rsu/' . $id);
                }
            } else {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('alert', '<div class="alert alert-danger" role="alert">Gambar tidak sesuai format</div>');
                redirect('Kesehatan/edit_rsu/' . $id);
            }
        } else {
            $this->session->set_flashdata('alert', '<div class="alert alert-danger" role="alert">Gambar Gagal Ditambahkan, Harap Mengupload Gambar</div>');
            redirect('Kesehatan/edit_rsu/' . $id);
        }
    }

    public function pdf_pkmutama()
    {
        $this->load->library('dompdf_gen');

        $data['pkmu'] = $this->m_kesehatan->pkmu('kesehatan')->result();

        $this->load->view('kesehatan/laporan_pkmu', $data);

        $paper_size = 'A4';
        //$orientation = 'portrait';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Laporan_PKMU.pdf", array('Attachment' => 0));
    }

    public function pdf_pkmPembantu()
    {
        $this->load->library('dompdf_gen');

        $data['pkmpembantu'] = $this->m_kesehatan->pkmp('kesehatan')->result();

        $this->load->view('kesehatan/laporan_pkmp', $data);

        $paper_size = 'A4';
        //$orientation = 'portrait';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Laporan_PKMP.pdf", array('Attachment' => 0));
    }

    public function pdf_rsu()
    {
        $this->load->library('dompdf_gen');

        $data['rsu'] = $this->m_kesehatan->rumahsakit('kesehatan')->result();

        $this->load->view('kesehatan/laporan_rsu', $data);

        $paper_size = 'A4';
        //$orientation = 'portrait';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Laporan_RSU.pdf", array('Attachment' => 0));
    }

    public function pdf_pengaduan()
    {
        $this->load->library('dompdf_gen');

        $data['pengaduan'] = $this->m_kesehatan->laporan('kesehatan')->result();

        $this->load->view('kesehatan/laporan_pengaduan', $data);

        $paper_size = 'A4';
        //$orientation = 'portrait';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Laporan_Pengaduan.pdf", array('Attachment' => 0));
    }

    public function pdf_riwayat()
    {
        $this->load->library('dompdf_gen');

        $data['riwayat'] = $this->m_kesehatan->riwayat('kesehatan')->result();

        $this->load->view('kesehatan/laporan_riwayat', $data);

        $paper_size = 'A4';
        //$orientation = 'portrait';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Laporan_RiwayatPengaduan.pdf", array('Attachment' => 0));
    }
}