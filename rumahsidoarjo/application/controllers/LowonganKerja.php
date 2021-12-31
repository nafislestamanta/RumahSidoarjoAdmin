<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LowonganKerja extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
        $this->load->model('M_kerja');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['tampil'] = $this->M_kerja->tampilperusahaan()->result();
        $data['title'] = 'Perusahaan';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('tenagakerja/perusahaan', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function dashboard()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['perusahaan'] = $this->M_kerja->jmlh_perusahaan()->row();
        $data['lowongan'] = $this->M_kerja->jmlh_lowongan()->row();
        $data['title'] = 'Perusahaan';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('tenagakerja/dashboard_kerja', $data);
        $this->load->view('admin/templates/footer', $data);
    }


    public function detailperusahaan($id)
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['detail'] = $this->M_kerja->detail_perusahaan($id)->row();
        $data['title'] = 'Detail Perusahaan';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('tenagakerja/detail_perusahaan', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function delete($id)
    {
        $delete = $this->M_kerja->delete($id);
        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data yang anda pilih telah terhapus</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tidak bisa hapus data</div>');
        }
        redirect('LowonganKerja');
    }

    public function delete_lowongan($id)
    {
        $delete = $this->M_kerja->delete_lowongan($id);
        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data yang anda pilih telah terhapus</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tidak bisa hapus data</div>');
        }
        redirect('LowonganKerja/lowongan');
    }

    public function tambah_perusahaan()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Tambah Perusahaan';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('tenagakerja/tambah_perusahaan', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function save()
    {
        $model = $this->M_kerja;

        if ($model->save()) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Tidak Berhasil Ditambah</div>');
        }
        redirect(site_url('LowonganKerja'));
    }

    public function editperusahaan($id)
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['edit'] = $this->M_kerja->editperusahaan($id)->row();
        $data['title'] = 'Edit Perusahaan';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('tenagakerja/editperusahaan', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function update_perusahaan($id)
    {
        $this->form_validation->set_rules('nama_perusahaan', 'nama_perusahaan', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('kepemilikan', 'kepemilikan', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('alamat', 'alamat', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('no_tlp', 'no_tlp', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('email', 'email', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('penanggung_jawab', 'penanggung_jawab', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == false) {
            $this->editperusahaan($id);
        } else {
            $nama_perusahaan = $this->input->post('nama_perusahaan');
            $kepemilikan = $this->input->post('kepemilikan');
            $alamat = $this->input->post('alamat');
            $no_tlp = $this->input->post('no_tlp');
            $email = $this->input->post('email');
            $lat = $this->input->post('lat');
            $long = $this->input->post('long');
            $website = $this->input->post('website');
            $penanggung_jawab = $this->input->post('penanggung_jawab');
            $deskripsi = $this->input->post('deskripsi');
            $foto = $_FILES['foto']['name'];


            if ($foto) {
                $data = [
                    'nama_perusahaan' => $nama_perusahaan,
                    'kepemilikan' => $kepemilikan,
                    'alamat' => $alamat,
                    'no_tlp' => $no_tlp,
                    'email' => $email,
                    'lat' => $lat,
                    'long' => $long,
                    'website' => $website,
                    'penanggung_jawab' => $penanggung_jawab,
                    'deskripsi' => $deskripsi,

                ];

                $update = $this->M_kerja->update_perusahaan($data, $id);

                if ($update) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data tidak berhasil diupdate</div>');
                }
                redirect('LowonganKerja', $data);
            } else {
                $data = [
                    'nama_perusahaan' => $nama_perusahaan,
                    'kepemilikan' => $kepemilikan,
                    'alamat' => $alamat,
                    'no_tlp' => $no_tlp,
                    'email' => $email,
                    'lat' => $lat,
                    'long' => $long,
                    'website' => $website,
                    'penanggung_jawab' => $penanggung_jawab,
                    'deskripsi' => $deskripsi,

                ];

                $update = $this->M_kerja->update_perusahaan($data, $id);

                if ($update) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data tidak berhasil diupdate</div>');
                }
                redirect('LowonganKerja', $data);
            }
        }
    }

    public function lowongan()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['tampil'] = $this->M_kerja->tampil_lowongan()->result();
        $data['title'] = 'Lowongan Kerja';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('tenagakerja/lowongankerja', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function detail_lowongan($id)
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['detail'] = $this->M_kerja->detail_lowongan($id)->row();
        $data['title'] = 'Detail Lowongan';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('tenagakerja/detail_lowongan', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function tambah_lowongan()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['perusahaan'] = $this->M_kerja->perusahaan()->result();
        $data['title'] = 'Tambah Lowongan';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('tenagakerja/tambah_lowongan', $data);
        $this->load->view('admin/templates/footer', $data);
    }


    // public function save_lowongan()
    // {
    //     $model = $this->M_kerja;

    //     if ($model->save()) {
    //         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah</div>');
    //     } else {
    //         $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Tidak Berhasil Ditambah</div>');
    //     }
    //     redirect(site_url('LowonganKerja'));
    // }

    public function save_lowongan()
    {
        // $this->rules();
        // if ($this->form_validation->run() == false) {
        //     $this->tambah_lowongan();
        // } else {
        $judul_lowongan = $this->input->post('judul_lowongan');
        $nama_perusahaan = $this->input->post('nama_perusahaan');
        $deskripsi_pekerjaan = $this->input->post('deskripsi_pekerjaan');
        $foto_lowongan = $_FILES['foto_lowongan']['name'];
        $file = $_FILES['file']['name'];
        // $file = $this->input->post('file');

        $config['upload_path']        =    './assets/img/';
        $config['allowed_types']    =    'jpg|jpeg|png';
        $config['max_size']            =    10000;

        $this->load->library('upload', $config);

        if ($foto_lowongan) {
            if ($this->upload->do_upload('foto_lowongan')) {

                $data = [
                    'judul_lowongan' => $judul_lowongan,
                    'id' => $nama_perusahaan,
                    'deskripsi_pekerjaan' => $deskripsi_pekerjaan,
                    'foto_lowongan' => preg_replace("/\s+/", "_", $foto_lowongan),
                    'file' =>  preg_replace("/\s+/", "_", $file),



                ];

                $tambah_lowongan = $this->M_kerja->tambah_lowongan($data);

                if ($tambah_lowongan) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambah</div>');
                    redirect('LowonganKerja/lowongan', $data);
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data tidak berhasil ditambah</div>');
                    redirect('LowonganKerja/lowongan', $data);
                }
            } else {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gambar tidak sesuai format</div>');
                redirect('LowonganKerja/lowongan', $error);
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Gagal Ditambahkan, Harap Mengupload Gambar</div>');
            redirect('LowonganKerja/lowongan');
        }
    }
    // }

    public function rules()
    {
        // $this->form_validation->set_rules('judul_lowongan', 'judul_lowongan', 'required|trim', [
        //     'required' => 'Field tidak boleh kosong'
        // ]);
        // $this->form_validation->set_rules('nama_perusahaan', 'nama_perusahaan', 'required|trim', [
        //     'required' => 'Field tidak boleh kosong'
        // ]);
        // $this->form_validation->set_rules('deksripsi_pekerjaan', 'deksripsi_pekerjaan', 'required|trim', [
        //     'required' => 'Field tidak boleh kosong'
        // ]);
        // $this->form_validation->set_rules('foto_lowongan', 'foto_lowongan', 'required|trim', [
        //     'required' => 'Field tidak boleh kosong'
        // ]);

        // $this->form_validation->set_rules('fax', 'Fax', 'required|trim', [
        //     'required' => 'Field tidak boleh kosong'
        // ]);
        // $this->form_validation->set_rules('email', 'Email', 'required|trim', [
        //     'required' => 'Field tidak boleh kosong'
        // ]);
        // $this->form_validation->set_rules('long', 'Long', 'required|trim', [
        //     'required' => 'Field tidak boleh kosong'
        // ]);
        // $this->form_validation->set_rules('lang', 'Lang', 'required|trim', [
        //     'required' => 'Field tidak boleh kosong'
        // ]);
        // $this->form_validation->set_rules('link', 'Link', 'required|trim', [
        //     'required' => 'Field tidak boleh kosong'
        // ]);
        // $this->form_validation->set_rules('gambar', 'Gambar', 'required|trim', [
        //     'required' => 'Field tidak boleh kosong'
        // ]);
    }

    public function editlowongan($id)
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['edit'] = $this->M_kerja->edit_lowongan($id)->row();
        $data['perusahaan'] = $this->M_kerja->perusahaan($id)->result();
        $data['title'] = 'Edit Lowongan';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('tenagakerja/edit_lowongan', $data);
        $this->load->view('admin/templates/footer', $data);
    }


    public function update_lowongan($id)
    {
        $this->form_validation->set_rules('judul_lowongan', 'judul_lowongan', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('nama_perusahaan', 'nama_perusahaan', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('deskripsi_pekerjaan', 'deskripsi_pekerjaan', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        if ($this->form_validation->run() == false) {
            $this->editlowongan($id);
        } else {
            $judul_lowongan = $this->input->post('judul_lowongan');
            $nama_perusahaan = $this->input->post('nama_perusahaan');
            $deskripsi_pekerjaan = $this->input->post('deskripsi_pekerjaan');
            $foto_lowongan = $this->input->post('foto_lowongan');
            // $foto = $_FILES['foto_lowongan']['name'];


            if ($foto_lowongan) {
                $data = [
                    'judul_lowongan' => $judul_lowongan,
                    'id' => $nama_perusahaan,
                    'deskripsi_pekerjaan' => $deskripsi_pekerjaan,
                    //'foto_lowongan' => preg_replace("/\s+/", "_", $foto_lowongan),
                    // 'foto_lowongan' => $foto_lowongan,
                ];

                $update = $this->M_kerja->update_lowongan($data, $id);

                if ($update) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data tidak berhasil diupdate</div>');
                }
                redirect('LowonganKerja/lowongan', $data);
            } else {
                $data = [
                    'judul_lowongan' => $judul_lowongan,
                    'id' => $nama_perusahaan,
                    'deskripsi_pekerjaan' => $deskripsi_pekerjaan,
                    // 'foto_lowongan' => $foto_lowongan,
                    //'foto_lowongan' => preg_replace("/\s+/", "_", $foto_lowongan),
                ];

                $update = $this->M_kerja->update_lowongan($data, $id);

                if ($update) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data tidak berhasil diupdate</div>');
                }
                redirect('LowonganKerja/lowongan', $data);
            }
        }
    }

    public function simpanGambar($id)
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

                $update = $this->M_kerja->update_gambar($id, $data);

                if ($update) {
                    $this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">Gambar Berhasil di Update</div>');
                    redirect('LowonganKerja/editperusahaan/' . $id);
                } else {
                    $this->session->set_flashdata('alert', '<div class="alert alert-warning" role="alert">Gambar tidak berhasil di Update</div>');
                    redirect('LowonganKerja/editperusahaan/' . $id);
                }
            } else {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('alert', '<div class="alert alert-danger" role="alert">Gambar tidak sesuai format</div>');
                redirect('LowonganKerja/editperusahaan/' . $id);
            }
        }
    }

    public function simpanGambarLowongan($id)
    {
        $foto_lowongan = $_FILES['foto_lowongan']['name'];
        $file = $_FILES['file']['name'];


        $config['upload_path']        =    './assets/img/';
        $config['allowed_types']    =    'jpg|jpeg|png';
        $config['max_size']            =    10000;

        $this->load->library('upload', $config);

        if ($foto_lowongan) {
            if ($this->upload->do_upload('foto_lowongan')) {

                $data = [
                    'foto_lowongan' => preg_replace("/\s+/", "_", $foto_lowongan),
                ];

                $update = $this->M_kerja->update_gambar_lowongan($id, $data);

                if ($update) {
                    $this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">Gambar Berhasil di Update</div>');
                    redirect('LowonganKerja/editlowongan/' . $id);
                } else {
                    $this->session->set_flashdata('alert', '<div class="alert alert-warning" role="alert">Gambar tidak berhasil di Update</div>');
                    redirect('LowonganKerja/editlowongan/' . $id);
                }
            } else {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('alert', '<div class="alert alert-danger" role="alert">Gambar tidak sesuai format</div>');
                redirect('LowonganKerja/editlowongan/' . $id);
            }
        } elseif ($file) {
            if ($this->upload->do_upload('file')) {

                $data = [
                    'file' => preg_replace("/\s+/", "_", $file),
                ];

                $update = $this->M_kerja->update_gambar_lowongan($id, $data);

                if ($update) {
                    $this->session->set_flashdata('alert1', '<div class="alert alert-success" role="alert">Gambar Berhasil di Update</div>');
                    redirect('LowonganKerja/editlowongan/' . $id);
                } else {
                    $this->session->set_flashdata('alert1', '<div class="alert alert-warning" role="alert">Gambar tidak berhasil di Update</div>');
                    redirect('LowonganKerja/editlowongan/' . $id);
                }
            } else {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('alert1', '<div class="alert alert-danger" role="alert">Gambar tidak sesuai format</div>');
                redirect('LowonganKerja/editlowongan/' . $id);
            }
        } else {
            $this->session->set_flashdata('alert3', '<div class="alert alert-danger" role="alert">Data Gagal Ditambahkan, Harap Mengupload Gambar</div>');
            redirect('LowonganKerja/editlowongan/' . $id);
        }
    }

    public function pdf_perusahaan()
    {
        $this->load->library('dompdf_gen');

        $data['perusahaan'] = $this->M_kerja->tampilperusahaan('perusahaan')->result();

        $this->load->view('tenagakerja/laporan_perusahaan', $data);

        $paper_size = 'A4';
        $orientation = 'portrait';
        //$orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Laporan_Perusahaan.pdf", array('Attachment' => 0));
    }

    public function pdf_lowongan()
    {
        $this->load->library('dompdf_gen');

        $data['lowongan'] = $this->M_kerja->tampil_lowongan('lowongan')->result();

        $this->load->view('tenagakerja/laporan_lowongan', $data);

        $paper_size = 'A4';
        //$orientation = 'portrait';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Laporan_Lowongan.pdf", array('Attachment' => 0));
    }
}