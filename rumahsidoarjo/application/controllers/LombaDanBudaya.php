<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LombaDanBudaya extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_lombadanbudaya');
    }


    public function index()
    {
        $data['lomba'] = $this->M_lombadanbudaya->tampil()->result();
        $data['title'] = 'Lomba Dan Budaya';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('lombadanbudaya/lombadanbudaya', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function tambah_lomba()
    {
        $data['title'] = 'Tambah Lomba';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('lombadanbudaya/tambah_lomba', $data);
        $this->load->view('admin/templates/footer', $data);
    }


    public function simpanlomba()
    {
        $model = $this->M_lombadanbudaya;

        if ($model->save()) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Tidak Berhasil Ditambah</div>');
        }
        redirect(site_url('LombaDanBudaya'));
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

    //                 $tambah = $this->M_lombadanbudaya->tambah($data);

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

    public function edit_lomba($id)
    {
        $data['edit'] = $this->M_lombadanbudaya->detail_edit($id)->row();
        $data['title'] = 'Edit Lomba';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('lombadanbudaya/edit_lomba', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    // public function update_lomba($id)
    // {
    //     // $this->rules();
    //     if ($this->form_validation->run() == false) {
    //         $this->edit_lomba($id);
    //     } else {
    //         $nama_lomba = $this->input->post('nama_lomba');
    //         $tgl_publish = $this->input->post('tgl_publish');
    //         $deskripsi = $this->input->post('deskripsi');
    //         $foto = $_FILES['foto']['name'];
    //         $link = $this->input->post('link');

    //         $config['upload_path']        =    './assets/img/';
    //         $config['allowed_types']    =    'jpg|jpeg|png';
    //         $config['max_size']            =    10000;

    //         $this->load->library('upload', $config);

    //         if ($foto) {
    //             if ($this->upload->do_upload('foto')) {

    //                 $data = [
    //                     'nama_lomba' => $nama_lomba,
    //                     'deskripsi' => $deskripsi,
    //                     'foto' => preg_replace("/\s+/", "_", $foto),
    //                     'link' => $link,
    //                 ];

    //                 $update = $this->M_lombadanbudaya->update($data, $id);

    //                 if ($update) {
    //                     $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
    //                     redirect('LombaDanBudaya/lombadanbudaya', $data);
    //                 } else {
    //                     $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data tidak berhasil diupdate</div>');
    //                     redirect('LombaDanBudaya/lombadanbudaya', $data);
    //                 }
    //             } else {
    //                 $error = array('error' => $this->upload->display_errors());
    //                 $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">foto tidak sesuai format</div>');
    //                 redirect('LombaDanBudaya/lombadanbudaya', $error);
    //             }
    //         } else {
    //             $data =
    //                 [
    //                     'nama_lomba' => $nama_lomba,
    //                     'deskripsi' => $deskripsi,
    //                     'foto' => preg_replace("/\s+/", "_", $foto),
    //                     'link' => $link,
    //                 ];

    //             $update = $this->M_lombadanbudaya->update($data, $id);

    //             if ($update) {
    //                 $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
    //                 redirect('LombaDanBudaya/lombadanbudaya', $data);
    //             } else {
    //                 $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data tidak berhasil diudpate</div>');
    //                 redirect('LombaDanBudaya/lombadanbudaya', $data);
    //             }
    //         }
    //     }
    // }



    public function update_lomba($id)
    {
        $this->form_validation->set_rules('nama_lomba', 'nama_lomba', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('tgl_publish', 'tgl_publish Postingan', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('link', 'Link', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == false) {
            $this->edit_lomba($id);
        } else {
            $nama_lomba = $this->input->post('nama_lomba');
            $tgl_publish = $this->input->post('tgl_publish');
            $deskripsi = $this->input->post('deskripsi');
            $foto = $this->input->post('foto');
            $link = $this->input->post('link');

            if ($foto) {
                $data = [
                    'nama_lomba' => $nama_lomba,
                    'tgl_publish' => $tgl_publish,
                    'deskripsi' => $deskripsi,
                    'foto' => $foto,
                    'link' => $link,
                ];

                $update = $this->M_lombadanbudaya->update_lomba($data, $id);

                if ($update) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data tidak berhasil diupdate</div>');
                }
                redirect('LombaDanBudaya', $data);
            } else {
                $data = [
                    'nama_lomba' => $nama_lomba,
                    'tgl_publish' => $tgl_publish,
                    'deskripsi' => $deskripsi,
                    'foto' => $foto,
                    'link' => $link,
                ];

                $update = $this->M_lombadanbudaya->update_lomba($data, $id);

                if ($update) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data tidak berhasil diupdate</div>');
                }
                redirect('LombaDanBudaya', $data);
            }
        }
    }


    public function detail_lomba($id)
    {
        $data['lomba'] = $this->M_lombadanbudaya->detail_lomba($id)->row();
        $data['title'] = 'Detail Lomba';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('lombadanbudaya/detail_lomba', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function delete($id)
    {
        $delete = $this->M_lombadanbudaya->delete($id);
        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data yang anda pilih telah terhapus</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tidak bisa hapus data</div>');
        }
        redirect('LombaDanBudaya');
    }

    public function tampillomba()
    {
        $data['tampil'] = $this->M_lombadanbudaya->tampilberita()->result();
        $data['title'] = 'Berita';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('beritainformasi/beritainformasi', $data);
        $this->load->view('admin/templates/footer', $data);
    }
}