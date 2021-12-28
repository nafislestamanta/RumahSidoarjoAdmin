<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Komunitas extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_komunitas');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['tampil'] = $this->M_komunitas->tampil_komunitas()->result();
        $data['title'] = 'Komunitas';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('komunitas/komunitas', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function delete($id)
    {
        $delete = $this->M_komunitas->delete($id);
        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data yang anda pilih telah terhapus</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tidak bisa hapus data</div>');
        }
        redirect('Komunitas');
    }

    public function tambah_komunitas()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Tambah Komunitas';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('komunitas/tambah_komunitas', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function save()
    {
        $model = $this->M_komunitas;

        if ($model->save()) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Tidak Berhasil Ditambah</div>');
        }
        redirect(site_url('Komunitas'));
    }

    public function edit_komunitas($id)
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['edit'] = $this->M_komunitas->edit_komunitas($id)->row();
        $data['title'] = 'Edit Komunitas';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('komunitas/edit_komunitas', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function detail_komunitas($id)
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['detail'] = $this->M_komunitas->detail_komunitas($id)->row();
        $data['title'] = 'Detail Komunitas';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('komunitas/detail_komunitas', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function update_komunitas($id)
    {
        $this->form_validation->set_rules('nama_komunitas', 'nama_komunitas', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('ketua', 'ketua', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('alamat', 'alamat', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('no_tlp', 'no_tlp', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        if ($this->form_validation->run() == false) {
            $this->edit_komunitas($id);
        } else {
            $nama_komunitas = $this->input->post('nama_komunitas');
            $ketua = $this->input->post('ketua');
            $alamat = $this->input->post('alamat');
            $no_tlp = $this->input->post('no_tlp');
            $deskripsi = $this->input->post('deskripsi');
            $sosialmedia = $this->input->post('sosialmedia');
            $foto1 = $_FILES['foto1']['name'];
            $foto2 = $_FILES['foto2']['name'];
            $foto_profil = $_FILES['foto_profil']['name'];

            if ($foto1) {
                $data = [
                    'nama_komunitas' => $nama_komunitas,
                    'ketua' => $ketua,
                    'alamat' => $alamat,
                    'no_tlp' => $no_tlp,
                    'deskripsi' => $deskripsi,
                    'sosialmedia' => $sosialmedia,
                    'foto1' => $foto1,
                    'foto2' => $foto2,
                    'foto_profil' => $foto_profil,
                ];

                $update = $this->M_komunitas->update_komunitas($data, $id);

                if ($update) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data tidak berhasil diupdate</div>');
                }
                redirect('Komunitas', $data);
            } else {
                $data = [
                    'nama_komunitas' => $nama_komunitas,
                    'ketua' => $ketua,
                    'alamat' => $alamat,
                    'no_tlp' => $no_tlp,
                    'deskripsi' => $deskripsi,
                    'sosialmedia' => $sosialmedia,
                ];

                $update = $this->M_komunitas->update_komunitas($data, $id);

                if ($update) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data tidak berhasil diupdate</div>');
                }
                redirect('Komunitas', $data);
            }
        }
    }

    public function event()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['tampil'] = $this->M_komunitas->tampil_event()->result();
        $data['title'] = 'Event';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('komunitas/event', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function tampil_event_selesai()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['tampil'] = $this->M_komunitas->tampil_event_selesai()->result();
        $data['title'] = 'Event Selesai';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('komunitas/event', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function tampil_event_segera()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['tampil'] = $this->M_komunitas->tampil_event_segera()->result();
        $data['title'] = 'Event Akan Datang';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('komunitas/event', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function detail_event($id)
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['detail'] = $this->M_komunitas->detail_event($id)->row();
        $data['title'] = 'Detail Lowongan';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('komunitas/detail_event', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function delete_event($id)
    {
        $delete = $this->M_komunitas->delete_event($id);
        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data yang anda pilih telah terhapus</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tidak bisa hapus data</div>');
        }
        redirect('Komunitas/event');
    }

    public function tambah_event()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['komunitas'] = $this->M_komunitas->komunitas()->result();
        $data['title'] = 'Tambah Event';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('komunitas/tambah_event', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function save_event()
    {

        $nama_event = $this->input->post('nama_event');
        $nama_komunitas = $this->input->post('nama_komunitas');
        $tanggal = $this->input->post('tanggal');
        $waktu = $this->input->post('waktu');
        $tempat = $this->input->post('tempat');
        $no_tlp = $this->input->post('no_tlp');
        $penanggung_jawab = $this->input->post('penanggung_jawab');
        $deskripsi = $this->input->post('deskripsi');
        $foto1 = $_FILES['foto1']['name'];
        $foto2 = $_FILES['foto2']['name'];
        // $file = $this->input->post('file');

        $config['upload_path']        =    './assets/img/';
        $config['allowed_types']    =    'jpg|jpeg|png';
        $config['max_size']            =    10000;

        $this->load->library('upload', $config);

        if ($foto1) {
            if ($this->upload->do_upload('foto1')) {

                $data = [
                    'nama_event' => $nama_event,
                    'id_komunitas' => $nama_komunitas,
                    'tanggal' => $tanggal,
                    'waktu' => $waktu,
                    'tempat' => $tempat,
                    'no_tlp' => $no_tlp,
                    'penanggung_jawab' => $penanggung_jawab,
                    'deskripsi' => $deskripsi,
                    'foto1' => preg_replace("/\s+/", "_", $foto1),
                    'foto2' =>  preg_replace("/\s+/", "_", $foto2),

                ];

                $tambah_event = $this->M_komunitas->tambah_event($data);

                if ($tambah_event) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambah</div>');
                    redirect('Komunitas/event', $data);
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data tidak berhasil ditambah</div>');
                    redirect('Komunitas/event', $data);
                }
            } else {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gambar tidak sesuai format</div>');
                redirect('Komunitas/event', $error);
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Gagal Ditambahkan, Harap Mengupload Gambar</div>');
            redirect('Komunitas/event');
        }
    }


    public function edit_event($id)
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['edit'] = $this->M_komunitas->edit_event($id)->row();
        $data['komunitas'] = $this->M_komunitas->komunitas($id)->result();
        $data['title'] = 'Edit Lowongan';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('komunitas/edit_event', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function update_event($id)
    {
        $this->form_validation->set_rules('nama_event', 'nama_event', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('tanggal', 'tanggal', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('waktu', 'waktu', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('tempat', 'tempat', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('penanggung_jawab', 'penanggung_jawab', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('no_tlp', 'no_tlp', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        if ($this->form_validation->run() == false) {
            $this->edit_event($id);
        } else {
            $nama_event = $this->input->post('nama_event');
            $nama_komunitas = $this->input->post('nama_komunitas');
            $tanggal = $this->input->post('tanggal');
            $waktu = $this->input->post('waktu');
            $tempat = $this->input->post('tempat');
            $no_tlp = $this->input->post('no_tlp');
            $penanggung_jawab = $this->input->post('penanggung_jawab');
            $deskripsi = $this->input->post('deskripsi');
            $foto1 = $_FILES['foto1']['name'];
            $foto2 = $_FILES['foto2']['name'];

            if ($foto1) {
                $data = [
                    'nama_event' => $nama_event,
                    'id_komunitas' => $nama_komunitas,
                    'tanggal' => $tanggal,
                    'waktu' => $waktu,
                    'tempat' => $tempat,
                    'no_tlp' => $no_tlp,
                    'penanggung_jawab' => $penanggung_jawab,
                    'deskripsi' => $deskripsi,
                    'foto1' => $foto1,
                    'foto2' => $foto2,
                ];

                $update = $this->M_komunitas->update_event($data, $id);

                if ($update) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data tidak berhasil diupdate</div>');
                }
                redirect('Komunitas/event', $data);
            } else {
                $data = [
                    'nama_event' => $nama_event,
                    'id_komunitas' => $nama_komunitas,
                    'tanggal' => $tanggal,
                    'waktu' => $waktu,
                    'tempat' => $tempat,
                    'no_tlp' => $no_tlp,
                    'penanggung_jawab' => $penanggung_jawab,
                    'deskripsi' => $deskripsi,
                ];

                $update = $this->M_komunitas->update_event($data, $id);

                if ($update) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data tidak berhasil diupdate</div>');
                }
                redirect('Komunitas/event', $data);
            }
        }
    }


    public function simpanGambar($id)
    {
        $foto1 = $_FILES['foto1']['name'];
        $foto2 = $_FILES['foto2']['name'];
        $foto_profil = $_FILES['foto_profil']['name'];

        $config['upload_path']        =    './assets/img/';
        $config['allowed_types']    =    'jpg|jpeg|png';
        $config['max_size']            =    10000;

        $this->load->library('upload', $config);

        if ($foto1) {
            if ($this->upload->do_upload('foto1')) {

                $data = [
                    'foto1' => preg_replace("/\s+/", "_", $foto1),
                ];

                $update = $this->M_komunitas->update_gambar($id, $data);

                if ($update) {
                    $this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">Gambar Berhasil di Update</div>');
                    redirect('Komunitas/edit_komunitas/' . $id);
                } else {
                    $this->session->set_flashdata('alert', '<div class="alert alert-warning" role="alert">Gambar tidak berhasil di Update</div>');
                    redirect('Komunitas/edit_komunitas/' . $id);
                }
            } else {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('alert', '<div class="alert alert-danger" role="alert">Gambar tidak sesuai format</div>');
                redirect('Komunitas/edit_komunitas/' . $id);
            }
        } elseif ($foto2) {
            if ($this->upload->do_upload('foto2')) {

                $data = [
                    'foto2' => preg_replace("/\s+/", "_", $foto2),
                ];

                $update = $this->M_komunitas->update_gambar($id, $data);

                if ($update) {
                    $this->session->set_flashdata('alert1', '<div class="alert alert-success" role="alert">Gambar Berhasil di Update</div>');
                    redirect('Komunitas/edit_komunitas/' . $id);
                } else {
                    $this->session->set_flashdata('alert1', '<div class="alert alert-warning" role="alert">Gambar tidak berhasil di Update</div>');
                    redirect('Komunitas/edit_komunitas/' . $id);
                }
            } else {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('alert1', '<div class="alert alert-danger" role="alert">Gambar tidak sesuai format</div>');
                redirect('Komunitas/edit_komunitas/' . $id);
            }
        } elseif ($foto_profil) {
            if ($this->upload->do_upload('foto_profil')) {

                $data = [
                    'foto_profil' => preg_replace("/\s+/", "_", $foto_profil),
                ];

                $update = $this->M_komunitas->update_gambar($id, $data);

                if ($update) {
                    $this->session->set_flashdata('alert2', '<div class="alert alert-success" role="alert">Gambar Berhasil di Update</div>');
                    redirect('Komunitas/edit_komunitas/' . $id);
                } else {
                    $this->session->set_flashdata('alert2', '<div class="alert alert-warning" role="alert">Gambar tidak berhasil di Update</div>');
                    redirect('Komunitas/edit_komunitas/' . $id);
                }
            } else {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('alert2', '<div class="alert alert-danger" role="alert">Gambar tidak sesuai format</div>');
                redirect('Komunitas/edit_komunitas/' . $id);
            }
        } else {
            $this->session->set_flashdata('alert3', '<div class="alert alert-danger" role="alert">Data Gagal Ditambahkan, Harap Mengupload Gambar</div>');
            redirect('Komunitas/edit_komunitas/' . $id);
        }
    }
}