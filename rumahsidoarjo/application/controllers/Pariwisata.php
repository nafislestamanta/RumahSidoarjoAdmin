<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pariwisata extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_pariwisata');
    }

    public function index()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['tampil'] = $this->M_pariwisata->tampil_wisata()->result();
        $data['title'] = 'Tempat Wisata';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('pariwisata/tempatwisata', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function dashboard()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['kategori'] = $this->M_pariwisata->jmlh_kategori()->row();
        $data['wisata'] = $this->M_pariwisata->jmlh_wisata()->row();
        $data['title'] = 'Tempat Wisata';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('pariwisata/dashboard_pariwisata', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function tambah_wisata()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['kategori'] = $this->M_pariwisata->tampil()->result();
        $data['title'] = 'Tempat Wisata';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('pariwisata/tambah_wisata', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function tambah_wisata_sidoarjo($id)
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['desc'] = $this->M_pariwisata->tampilwisataid($id)->row();
        $data['kategori'] = $this->M_pariwisata->tampil()->result();
        $data['tampil'] = $this->M_pariwisata->tampil_tarif($id)->result();
        $data['count'] = $this->M_pariwisata->tampilCount($id)->row();
        $data['title'] = 'Tambah Wisata Sidoarjo';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('pariwisata/tambah_wisata', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function tambah_wisata_kuliner($id)
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['desc'] = $this->M_pariwisata->tampilwisataid($id)->row();
        $data['kategori'] = $this->M_pariwisata->tampil()->result();
        $data['tampil'] = $this->M_pariwisata->tampil_kuliner($id)->result();
        $data['count'] = $this->M_pariwisata->tampilCountKuliner($id)->row();
        $data['title'] = 'Tambah Wisata Kuliner';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('pariwisata/tambah_wisata', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    function tambah_tarif()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data = array(
            'id_wisata' => $this->input->post('id'),
            'tarif'  => $this->input->post('tarif'),
            'nama_tiket' => $this->input->post('nama'),
        );

        $id = $this->input->post('id');

        $tambah = $this->M_pariwisata->tambah_tarif($data);

        if ($tambah) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambah</div>');
            redirect('Pariwisata/tambah_wisata_sidoarjo/' . $id);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data tidak berhasil ditambah</div>');
            redirect('Pariwisata/tambah_wisata_sidoarjo/' . $id);
        }
    }

    function tambah_kuliner()
    {
        $data = array(
            'id_wisata' => $this->input->post('id'),
            'nama'  => $this->input->post('nama'),
            'harga' => $this->input->post('harga'),
        );

        $id = $this->input->post('id');

        $tambah = $this->M_pariwisata->tambah_kuliner($data);

        if ($tambah) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambah</div>');
            redirect('Pariwisata/tambah_wisata_kuliner/' . $id);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data tidak berhasil ditambah</div>');
            redirect('Pariwisata/tambah_wisata_kuliner/' . $id);
        }
    }


    function tambah_tarif_wisata()
    {
        $data = array(
            'id_wisata' => $this->input->post('id'),
            'tarif'  => $this->input->post('tarif'),
            'nama_tiket' => $this->input->post('nama'),
        );

        $id = $this->input->post('id');

        $tambah = $this->M_pariwisata->tambah_tarif($data);

        if ($tambah) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambah</div>');
            redirect('Pariwisata/edit_wisata/' . $id);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data tidak berhasil ditambah</div>');
            redirect('Pariwisata/edit_wisata/' . $id);
        }
    }

    function tambah_kuliner_wisata()
    {
        $data = array(
            'id_wisata' => $this->input->post('id'),
            'nama'  => $this->input->post('nama'),
            'harga' => $this->input->post('harga'),
        );

        $id = $this->input->post('id');

        $tambah = $this->M_pariwisata->tambah_kuliner($data);

        if ($tambah) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambah</div>');
            redirect('Pariwisata/edit_wisata/' . $id);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data tidak berhasil ditambah</div>');
            redirect('Pariwisata/edit_wisata/' . $id);
        }
    }

    public function delete_tarif($id)
    {
        $delete = $this->M_pariwisata->delete_tarif($id);
        $desc = $this->M_pariwisata->tampil_wisata_desc()->row();
        $ids = $desc->id_wisata;
        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data yang anda pilih telah terhapus</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tidak bisa hapus data</div>');
        }
        redirect('Pariwisata/tambah_wisata_sidoarjo/' . $ids);
    }

    public function simpanWisata()
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
        $this->form_validation->set_rules('jambuka', 'Jambuka', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('jamtutup', 'Jamtutup', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('lat', 'Lat', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('long', 'Long', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        if ($this->form_validation->run() == false) {
            $this->tambah_wisata();
        } else {
            $nama = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $notelp = $this->input->post('notelp');
            $jambuka = $this->input->post('jambuka');
            $jamtutup = $this->input->post('jamtutup');
            $lat = $this->input->post('lat');
            $long = $this->input->post('long');
            $kategori = $this->input->post('kategori');
            $gambar = $_FILES['gambar']['name'];
            $gambar1 = $_FILES['gambar1']['name'];
            $gambar2 = $_FILES['gambar2']['name'];

            $config['upload_path']        =    './assets/img/';
            $config['allowed_types']    =    'jpg|jpeg|png';
            $config['max_size']            =    10000;

            $this->load->library('upload', $config);

            if ($gambar) {
                if ($this->upload->do_upload('gambar')) {

                    $data = [
                        'nama_wisata' => $nama,
                        'alamat' => $alamat,
                        'no_telepon' => $notelp,
                        'jam_buka' => $jambuka,
                        'jam_tutup' => $jamtutup,
                        'foto1' => preg_replace("/\s+/", "_", $gambar),
                        'foto2' => preg_replace("/\s+/", "_", $gambar1),
                        'foto3' => preg_replace("/\s+/", "_", $gambar2),
                        'lat' => $lat,
                        'long' => $long,
                        'pengelola' => 'Dinas Pariwisata',
                        'id_kategori_wisata' => $kategori
                    ];

                    $tambah = $this->M_pariwisata->tambah_wisata($data);


                    if ($tambah) {
                        if ($kategori == 3) {
                            $desc = $this->M_pariwisata->tampil_wisata_desc()->row();
                            $id = $desc->id_wisata;
                            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Harap Melengkapi Menu Kuliner</div>');
                            redirect('Pariwisata/tambah_wisata_kuliner/' . $id);
                        } else {
                            $desc = $this->M_pariwisata->tampil_wisata_desc()->row();
                            $id = $desc->id_wisata;
                            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Harap Melengkapi Tarif Wisata</div>');
                            redirect('Pariwisata/tambah_wisata_sidoarjo/' . $id);
                        }
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data tidak berhasil ditambah</div>');
                        redirect('Pariwisata', $data);
                    }
                } else {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gambar tidak sesuai format</div>');
                    redirect('Pariwisata', $error);
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Gagal Ditambahkan, Harap Mengupload Gambar</div>');
                redirect('Pariwisata');
            }
        }
    }

    public function saveEdit($id)
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
        $this->form_validation->set_rules('jambuka', 'Jambuka', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('jamtutup', 'Jamtutup', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('lat', 'Lat', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('long', 'Long', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        if ($this->form_validation->run() == false) {
            $this->tambah_wisata();
        } else {
            $nama = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $notelp = $this->input->post('notelp');
            $jambuka = $this->input->post('jambuka');
            $jamtutup = $this->input->post('jamtutup');
            $lat = $this->input->post('lat');
            $long = $this->input->post('long');
            $kategori = $this->input->post('kategori');

            $data = [
                'nama_wisata' => $nama,
                'alamat' => $alamat,
                'no_telepon' => $notelp,
                'jam_buka' => $jambuka,
                'jam_tutup' => $jamtutup,
                'lat' => $lat,
                'long' => $long,
                'id_kategori_wisata' => $kategori
            ];

            $update = $this->M_pariwisata->update_gambar1($id, $data);

            if ($update) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
                redirect('Pariwisata');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data tidak berhasil diupdate</div>');
                redirect('Pariwisata');
            }
        }
    }

    public function saveWisata($id)
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
        $this->form_validation->set_rules('jambuka', 'Jambuka', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('jamtutup', 'Jamtutup', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('lat', 'Lat', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('long', 'Long', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        if ($this->form_validation->run() == false) {
            $this->tambah_wisata();
        } else {
            $nama = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $notelp = $this->input->post('notelp');
            $jambuka = $this->input->post('jambuka');
            $jamtutup = $this->input->post('jamtutup');
            $lat = $this->input->post('lat');
            $long = $this->input->post('long');
            $kategori = $this->input->post('kategori');
            $gambar = $_FILES['gambar']['name'];
            $gambar1 = $_FILES['gambar1']['name'];
            $gambar2 = $_FILES['gambar2']['name'];

            $config['upload_path']        =    './assets/img/';
            $config['allowed_types']    =    'jpg|jpeg|png';
            $config['max_size']            =    10000;

            $this->load->library('upload', $config);

            if ($gambar) {
                if ($this->upload->do_upload('gambar')) {

                    $data = [
                        'nama_wisata' => $nama,
                        'alamat' => $alamat,
                        'no_telepon' => $notelp,
                        'jam_buka' => $jambuka,
                        'jam_tutup' => $jamtutup,
                        'foto1' => preg_replace("/\s+/", "_", $gambar),
                        'foto2' => preg_replace("/\s+/", "_", $gambar1),
                        'foto3' => preg_replace("/\s+/", "_", $gambar2),
                        'lat' => $lat,
                        'long' => $long,
                        'id_kategori_wisata' => $kategori
                    ];

                    $tambah = $this->M_pariwisata->tambah_wisata($data);


                    if ($tambah) {
                        $desc = $this->M_pariwisata->tampil_wisata_desc()->row();
                        $id = $desc->id_wisata;
                        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Harap Melengkapi Tarif Wisata</div>');
                        redirect('Pariwisata/tambah_wisata_sidoarjo/' . $id);
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data tidak berhasil ditambah</div>');
                        redirect('Pariwisata', $data);
                    }
                } else {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gambar tidak sesuai format</div>');
                    redirect('Pariwisata/tambah_wisata_pemancingan', $error);
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Gagal Ditambahkan, Harap Mengupload Gambar</div>');
                redirect('Pariwisata');
            }
        }
    }

    public function tambah_wisata_sejarah()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Tempat Wisata Sejarah';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('pariwisata/tambah_wisata', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function edit_wisata($id)
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['edit'] = $this->M_pariwisata->tampilwisataid($id)->row();
        $data['edits'] = $this->M_pariwisata->tampil_tarif($id)->result();
        $data['kuliner'] = $this->M_pariwisata->tampil_kuliner($id)->result();
        $data['editss'] = $this->M_pariwisata->tampil_tarif($id)->row();
        $data['count'] = $this->M_pariwisata->tampilCount($id)->row();
        $data['countku'] = $this->M_pariwisata->tampilCountKuliner($id)->row();
        $data['kategori'] = $this->M_pariwisata->tampil()->result();
        $data['title'] = 'Edit Tempat Wisata';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('pariwisata/edit_wisata', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function detail_wisata($id)
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['edit'] = $this->M_pariwisata->tampilwisataid($id)->row();
        $data['tarif'] = $this->M_pariwisata->tampil_tarif($id)->result();
        $data['kuliner'] = $this->M_pariwisata->tampil_kuliner($id)->result();
        $data['title'] = 'Tempat Wisata';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('pariwisata/detail_wisata', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function kategoriwisata()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['kategori'] = $this->M_pariwisata->tampil()->result();
        $data['title'] = 'Kategori Wisata';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('pariwisata/kategoriwisata', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function tambah_kategori()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Kategori Wisata';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('pariwisata/tambah_kategori', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function simpankategori()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        if ($this->form_validation->run() == false) {
            $this->tambah_kategori();
        } else {
            $nama = $this->input->post('nama');

            $data = [
                'kategori' => $nama
            ];

            $tambah = $this->M_pariwisata->tambah($data);

            if ($tambah) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambah</div>');
                redirect('Pariwisata/kategoriwisata', $data);
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data tidak berhasil ditambah</div>');
                redirect('Pariwisata/kategoriwisata', $data);
            }
        }
    }

    public function edit_kategori($id)
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['edit'] = $this->M_pariwisata->edit($id)->row();
        $data['title'] = 'Edit Kategori Wisata';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('pariwisata/edit_kategori', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function savekategori($id)
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        if ($this->form_validation->run() == false) {
            $this->edit_kategori($id);
        } else {
            $nama = $this->input->post('nama');

            $data = [
                'kategori' => $nama
            ];

            $tambah = $this->M_pariwisata->update($id, $data);

            if ($tambah) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
                redirect('Pariwisata/kategoriwisata', $data);
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data tidak berhasil diupdate</div>');
                redirect('Pariwisata/kategoriwisata', $data);
            }
        }
    }

    public function simpanGambar1($id)
    {
        $gambar = $_FILES['gambar']['name'];

        $config['upload_path']        =    './assets/img/';
        $config['allowed_types']    =    'jpg|jpeg|png';
        $config['max_size']            =    10000;

        $this->load->library('upload', $config);

        if ($gambar) {
            if ($this->upload->do_upload('gambar')) {

                $data = [
                    'foto1' => preg_replace("/\s+/", "_", $gambar),
                ];

                $update = $this->M_pariwisata->update_gambar1($id, $data);

                if ($update) {
                    $this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">Data Berhasil di Update</div>');
                    redirect('Pariwisata/edit_wisata/' . $id);
                } else {
                    $this->session->set_flashdata('alert', '<div class="alert alert-warning" role="alert">Data tidak berhasil di Update</div>');
                    redirect('Pariwisata/edit_wisata/' . $id);
                }
            } else {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('alert', '<div class="alert alert-danger" role="alert">Gambar tidak sesuai format</div>');
                redirect('Pariwisata/edit_wisata/' . $id);
            }
        } else {
            $this->session->set_flashdata('alert', '<div class="alert alert-danger" role="alert">Data Gagal Ditambahkan, Harap Mengupload Gambar</div>');
            redirect('Pariwisata/edit_wisata/' . $id);
        }
    }

    public function simpanGambar2($id)
    {
        $gambar2 = $_FILES['gambar2']['name'];

        $config['upload_path']        =    './assets/img/';
        $config['allowed_types']    =    'jpg|jpeg|png';
        $config['max_size']            =    10000;

        $this->load->library('upload', $config);
        if ($gambar2) {
            if ($this->upload->do_upload('gambar2')) {

                $data = [
                    'foto2' => preg_replace("/\s+/", "_", $gambar2),
                ];

                $update = $this->M_pariwisata->update_gambar1($id, $data);

                if ($update) {
                    $this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">Data Berhasil di Update</div>');
                    redirect('Pariwisata/edit_wisata/' . $id);
                } else {
                    $this->session->set_flashdata('alert', '<div class="alert alert-warning" role="alert">Data tidak berhasil di Update</div>');
                    redirect('Pariwisata/edit_wisata/' . $id);
                }
            } else {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('alert', '<div class="alert alert-danger" role="alert">Gambar tidak sesuai format</div>');
                redirect('Pariwisata/edit_wisata/' . $id);
            }
        } else {
            $this->session->set_flashdata('alert', '<div class="alert alert-danger" role="alert">Data Gagal Ditambahkan, Harap Mengupload Gambar</div>');
            redirect('Pariwisata/edit_wisata/' . $id);
        }
    }

    public function simpanGambar3($id)
    {
        $gambar3 = $_FILES['gambar3']['name'];

        $config['upload_path']        =    './assets/img/';
        $config['allowed_types']    =    'jpg|jpeg|png';
        $config['max_size']            =    10000;

        $this->load->library('upload', $config);
        if ($gambar3) {
            if ($this->upload->do_upload('gambar3')) {

                $data = [
                    'foto3' => preg_replace("/\s+/", "_", $gambar3),
                ];

                $update = $this->M_pariwisata->update_gambar1($id, $data);

                if ($update) {
                    $this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">Data Berhasil di Update</div>');
                    redirect('Pariwisata/edit_wisata/' . $id);
                } else {
                    $this->session->set_flashdata('alert', '<div class="alert alert-warning" role="alert">Data tidak berhasil di Update</div>');
                    redirect('Pariwisata/edit_wisata/' . $id);
                }
            } else {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('alert', '<div class="alert alert-danger" role="alert">Gambar tidak sesuai format</div>');
                redirect('Pariwisata/edit_wisata/' . $id);
            }
        } else {
            $this->session->set_flashdata('alert', '<div class="alert alert-danger" role="alert">Data Gagal Ditambahkan, Harap Mengupload Gambar</div>');
            redirect('Pariwisata/edit_wisata/' . $id);
        }
    }

    public function simpanTarif($id)
    {
        $this->form_validation->set_rules('nama_tiket', 'Nama_tiket', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('tarif', 'Tarif', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        if ($this->form_validation->run() == false) {
            $this->edit_wisata($id);
        } else {
            $id_tarif = $this->input->post('id_tarif');
            $nama_tiket = $this->input->post('nama_tiket');
            $tarif = $this->input->post('tarif');

            $data = [
                'id_tarif' => $id_tarif,
                'nama_tiket' => $nama_tiket,
                'tarif' => $tarif,
            ];

            $edit = $this->M_pariwisata->update_wisata($id_tarif, $data);

            if ($edit) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
                redirect('Pariwisata/edit_wisata/' . $id);
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data tidak berhasil diupdate</div>');
                redirect('Pariwisata/edit_wisata/' . $id);
            }
        }
    }

    public function simpanKuliner($id)
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('harga', 'Harga', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        if ($this->form_validation->run() == false) {
            $this->edit_wisata($id);
        } else {
            $id_kuliner = $this->input->post('id_kuliner');
            $nama = $this->input->post('nama');
            $harga = $this->input->post('harga');

            $data = [
                'id_kuliner' => $id_kuliner,
                'nama' => $nama,
                'harga' => $harga,
            ];

            $edit = $this->M_pariwisata->update_kuliner($id_kuliner, $data);

            if ($edit) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
                redirect('Pariwisata/edit_wisata/' . $id);
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data tidak berhasil diupdate</div>');
                redirect('Pariwisata/edit_wisata/' . $id);
            }
        }
    }

    public function delete_kategori($id)
    {
        $delete = $this->M_pariwisata->delete($id);
        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data yang anda pilih telah terhapus</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tidak bisa hapus data</div>');
        }
        redirect('Pariwisata/kategoriwisata');
    }

    public function delete($id_tarif, $id)
    {
        $delete = $this->M_pariwisata->delete_wisata($id_tarif);
        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data yang anda pilih telah terhapus</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tidak bisa hapus data</div>');
        }
        redirect('Pariwisata/edit_wisata/' . $id);
    }

    public function delete_wisata($id)
    {
        $delete = $this->M_pariwisata->delete_pariwisata($id);
        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data yang anda pilih telah terhapus</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tidak bisa hapus data</div>');
        }
        redirect('Pariwisata');
    }

    public function delete_kuliner($id_kuliner, $id)
    {
        $delete = $this->M_pariwisata->delete_kuliner($id_kuliner);
        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data yang anda pilih telah terhapus</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tidak bisa hapus data</div>');
        }
        redirect('Pariwisata/edit_wisata/' . $id);
    }
}