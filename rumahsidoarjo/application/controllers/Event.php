<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Event extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_event');
        $this->load->library('form_validation');
    }


    public function index()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['tampil'] = $this->M_event->tampil()->result();
        $data['title'] = 'Event';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('event/event', $data);
        $this->load->view('admin/templates/footer', $data);
    }


    public function tampilagenda()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['tampil'] = $this->M_event->tampilagenda()->result();
        $data['title'] = 'agenda kota';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('event/event', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function tampillombadanbudaya()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['tampil'] = $this->M_event->tampillombadanbudaya()->result();
        $data['title'] = 'agenda kota';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('event/event', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function tambah_event()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Tambah Event';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('event/tambah_event', $data);
        $this->load->view('admin/templates/footer', $data);
    }


    public function save()
    {
        $model = $this->M_event;

        if ($model->save()) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Tidak Berhasil Ditambah</div>');
        }
        redirect(site_url('Event'));
    }

    // public function simpanlomba()
    // {
    //     $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
    //         'required' => 'Field tidak boleh kosong'
    //     ]);
    //     $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim', [
    //         'required' => 'Field tidak boleh kosong'
    //     ]);

    //     $this->form_validation->set_rules('link', 'Link', 'required|trim', [
    //         'required' => 'Field tidak boleh kosong'
    //     ]);


    //     if ($this->form_validation->run() == false) {
    //         $this->tambah_lomba();
    //     } else {
    //         $nama = $this->input->post('nama');
    //         $deskripsi = $this->input->post('deskripsi');
    //         $foto = $_FILES['gambar']['name'];
    //         $link = $this->input->post('link');

    //         $config['upload_path']        =    './assets/img/';
    //         $config['allowed_types']    =    'jpg|jpeg|png';
    //         $config['max_size']            =    10000;

    //         $this->load->library('upload', $config);

    //         if ($gambar) {
    //             if ($this->upload->do_upload('gambar')) {

    //                 $data = [
    //                     'nama_lomba' => $nama,
    //                     'tgl_publish' => date('Y-M-D'),
    //                     'deskripsi' => $deskripsi,
    //                     'foto' => preg_replace("/\s+/", "_", $gambar),
    //                     'link' => $link,

    //                 ];

    //                 $tambah = $this->M_event->tambah($data);

    //                 if ($tambah) {
    //                     $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambah</div>');
    //                     redirect('LombaDanBudaya', $data);
    //                 } else {
    //                     $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data tidak berhasil ditambah</div>');
    //                     redirect('LombaDanBudaya', $data);
    //                 }
    //             } else {
    //                 $error = array('error' => $this->upload->display_errors());
    //                 $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gambar tidak sesuai format</div>');
    //                 redirect('LombaDanBudaya', $error);
    //             }
    //         } else {
    //             $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Gagal Ditambahkan, Harap Mengupload Gambar</div>');
    //             redirect('LombaDanBudaya');
    //         }
    //     }
    // }

    public function edit_event($id)
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['edit'] = $this->M_event->detail_edit($id)->row();
        $data['title'] = 'Edit Event';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('event/edit_event', $data);
        $this->load->view('admin/templates/footer', $data);
    }




    public function update_event($id)
    {

        $this->form_validation->set_rules('kategori', 'kategori', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('nama_event', 'nama_event', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('tgl_posting', 'tgl_posting', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('penyelenggara', 'penyelenggara', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('tempat_kegiatan', 'tempat_kegiatan', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);


        if ($this->form_validation->run() == false) {
            $this->edit_event($id);
        } else {
            $kategori = $this->input->post('kategori');
            $nama_event = $this->input->post('nama_event');
            $tgl_posting = $this->input->post('tgl_posting');
            $penyelenggara = $this->input->post('penyelenggara');
            $tempat_kegiatan = $this->input->post('tempat_kegiatan');
            $deskripsi = $this->input->post('deskripsi');
            $foto1 = $_FILES['foto1']['name'];
            $foto2 = $_FILES['foto2']['name'];
            $foto3 = $_FILES['foto3']['name'];

            if ($foto1) {
                $data = [
                    'kategori' => $kategori,
                    'nama_event' => $nama_event,
                    'tgl_posting' => $tgl_posting,
                    'penyelenggara' => $penyelenggara,
                    'tempat_kegiatan' => $tempat_kegiatan,
                    'deskripsi' => $deskripsi,
                    'tempat_kegiatan' => $tempat_kegiatan,
                    'foto1' => $foto1,
                    'foto2' => $foto2,
                    'foto3' => $foto3,
                ];

                $update = $this->M_event->update_event($data, $id);

                if ($update) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data tidak berhasil diupdate</div>');
                }
                redirect('Event', $data);
            } else {
                $data = [
                    'kategori' => $kategori,
                    'nama_event' => $nama_event,
                    'tgl_posting' => $tgl_posting,
                    'penyelenggara' => $penyelenggara,
                    'tempat_kegiatan' => $tempat_kegiatan,
                    'deskripsi' => $deskripsi,
                    'tempat_kegiatan' => $tempat_kegiatan,
                    'foto1' => $foto1,
                    'foto2' => $foto2,
                    'foto3' => $foto3,
                ];

                $update = $this->M_event->update_event($data, $id);

                if ($update) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data tidak berhasil diupdate</div>');
                }
                redirect('Event', $data);
            }
        }
    }


    public function detail_event($id)
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['event'] = $this->M_event->detail_event($id)->row();
        $data['title'] = 'Detail Event';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('event/detail_event', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function delete($id)
    {
        $delete = $this->M_event->delete($id);
        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data yang anda pilih telah terhapus</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tidak bisa hapus data</div>');
        }
        redirect('Event');
    }

    public function tampilevent()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['tampil'] = $this->M_event->tampilberita()->result();
        $data['title'] = 'Berita';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('event/event', $data);
        $this->load->view('admin/templates/footer', $data);
    }
}