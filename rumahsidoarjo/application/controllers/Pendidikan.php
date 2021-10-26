<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendidikan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_pendidikan');
    }

    public function index()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['tampil'] = $this->M_pendidikan->tampilSD()->result();
        $data['title'] = 'Sekolah Dasar';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('pendidikan/sd', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function Slb()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['tampil'] = $this->M_pendidikan->tampilSLB()->result();
        $data['title'] = 'Sekolah Luar Biasa';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('pendidikan/slb', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function smp()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['tampil'] = $this->M_pendidikan->tampilSMP()->result();
        $data['title'] = 'Sekolah Menengah Pertama';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('pendidikan/smp', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function tambah_sd()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['kecamatan'] = $this->M_pendidikan->getKecamatan()->result();
        $data['title'] = 'Sekolah Dasar';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('pendidikan/tambah_sd', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function tambah_slb()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['kecamatan'] = $this->M_pendidikan->getKecamatan()->result();
        $data['title'] = 'Sekolah Dasar';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('pendidikan/tambah_slb', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function tambah_smp()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['kecamatan'] = $this->M_pendidikan->getKecamatan()->result();
        $data['title'] = 'Sekolah Menengah Pertama';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('pendidikan/tambah_smp', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function edit_sd($id)
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['tampil'] = $this->M_pendidikan->editSD($id)->row();
        $tampil = $this->M_pendidikan->editSD($id)->row();
        $kecc = $tampil->id_kecamatan;
        $data['kecamatan'] = $this->M_pendidikan->getKecamatan()->result();
        $data['kelurahan'] = $this->M_pendidikan->getKelurahan($kecc)->result();
        $data['fasilitas'] = $this->M_pendidikan->fasilitas($id)->result();
        $data['ekskul'] = $this->M_pendidikan->ekskul($id)->result();
        $data['title'] = 'Sekolah Dasar';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('pendidikan/edit_sd', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function edit_slb($id)
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['tampil'] = $this->M_pendidikan->editSD($id)->row();
        $tampil = $this->M_pendidikan->editSD($id)->row();
        $kecc = $tampil->id_kecamatan;
        $data['kecamatan'] = $this->M_pendidikan->getKecamatan()->result();
        $data['kelurahan'] = $this->M_pendidikan->getKelurahan($kecc)->result();
        $data['fasilitas'] = $this->M_pendidikan->fasilitas($id)->result();
        $data['ekskul'] = $this->M_pendidikan->ekskul($id)->result();
        $data['title'] = 'Sekolah Luar Biasa';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('pendidikan/edit_slb', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function edit_smp($id)
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['tampil'] = $this->M_pendidikan->editSD($id)->row();
        $tampil = $this->M_pendidikan->editSD($id)->row();
        $kecc = $tampil->id_kecamatan;
        $data['kecamatan'] = $this->M_pendidikan->getKecamatan()->result();
        $data['kelurahan'] = $this->M_pendidikan->getKelurahan($kecc)->result();
        $data['fasilitas'] = $this->M_pendidikan->fasilitas($id)->result();
        $data['ekskul'] = $this->M_pendidikan->ekskul($id)->result();
        $data['title'] = 'Sekolah Menengah Pertama';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('pendidikan/edit_smp', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function detail_sd($id)
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['tampil'] = $this->M_pendidikan->editSD($id)->row();
        $data['fasilitas'] = $this->M_pendidikan->fasilitas($id)->result();
        $data['ekskul'] = $this->M_pendidikan->ekskul($id)->result();
        $data['title'] = 'Sekolah Dasar';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('pendidikan/detail_sd', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function detail_slb($id)
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['tampil'] = $this->M_pendidikan->editSD($id)->row();
        $data['fasilitas'] = $this->M_pendidikan->fasilitas($id)->result();
        $data['ekskul'] = $this->M_pendidikan->ekskul($id)->result();
        $data['title'] = 'Sekolah Luar Biasa';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('pendidikan/detail_sd', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function faskul()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['desc'] = $this->M_pendidikan->tampil_sekolah_desc()->row();
        $desc = $this->M_pendidikan->tampil_sekolah_desc()->row();
        $id = $desc->id_sekolah;
        $data['fasilitas'] = $this->M_pendidikan->fasilitas($id)->result();
        $data['ekskul'] = $this->M_pendidikan->ekskul($id)->result();
        $data['title'] = 'Fasilitas dan Ekstrakulikuler';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('pendidikan/fasilitas_ekskul', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function faskul_slb()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['desc'] = $this->M_pendidikan->tampil_sekolah_desc()->row();
        $desc = $this->M_pendidikan->tampil_sekolah_desc()->row();
        $id = $desc->id_sekolah;
        $data['fasilitas'] = $this->M_pendidikan->fasilitas($id)->result();
        $data['ekskul'] = $this->M_pendidikan->ekskul($id)->result();
        $data['title'] = 'Fasilitas dan Ekstrakulikuler SLB';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('pendidikan/fasilitas_ekskul', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function faskul_smp()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['desc'] = $this->M_pendidikan->tampil_sekolah_desc()->row();
        $desc = $this->M_pendidikan->tampil_sekolah_desc()->row();
        $id = $desc->id_sekolah;
        $data['fasilitas'] = $this->M_pendidikan->fasilitas($id)->result();
        $data['ekskul'] = $this->M_pendidikan->ekskul($id)->result();
        $data['title'] = 'Fasilitas dan Ekstrakulikuler SMP';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('pendidikan/fasilitas_ekskul', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function delete_sekolah($id)
    {
        $delete = $this->M_pendidikan->delete_sekolah($id);
        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data yang anda pilih telah terhapus</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tidak bisa hapus data</div>');
        }
        redirect('Pendidikan');
    }

    public function delete_slb($id)
    {
        $delete = $this->M_pendidikan->delete_slb($id);
        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data yang anda pilih telah terhapus</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tidak bisa hapus data</div>');
        }
        redirect('Pendidikan/slb');
    }

    public function delete_smp($id)
    {
        $delete = $this->M_pendidikan->delete_slb($id);
        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data yang anda pilih telah terhapus</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tidak bisa hapus data</div>');
        }
        redirect('Pendidikan/smp');
    }

    public function delete_fasilitas($id, $fasilitas)
    {
        $delete = $this->M_pendidikan->delete_fasilitas($id);
        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data yang anda pilih telah terhapus</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tidak bisa hapus data</div>');
        }
        redirect('Pendidikan/edit_sd/' . $fasilitas);
    }

    public function delete_fasilitas_slb($id, $fasilitas)
    {
        $delete = $this->M_pendidikan->delete_fasilitas($id);
        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data yang anda pilih telah terhapus</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tidak bisa hapus data</div>');
        }
        redirect('Pendidikan/edit_slb/' . $fasilitas);
    }

    public function delete_fasilitas_smp($id, $fasilitas)
    {
        $delete = $this->M_pendidikan->delete_fasilitas($id);
        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data yang anda pilih telah terhapus</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tidak bisa hapus data</div>');
        }
        redirect('Pendidikan/edit_smp/' . $fasilitas);
    }

    public function delete_ekskul($id, $ekskul)
    {
        $delete = $this->M_pendidikan->delete_ekskul($id);
        if ($delete) {
            $this->session->set_flashdata('ekskul', '<div class="alert alert-success" role="alert">Data yang anda pilih telah terhapus</div>');
        } else {
            $this->session->set_flashdata('ekskul', '<div class="alert alert-danger" role="alert">Tidak bisa hapus data</div>');
        }
        redirect('Pendidikan/edit_sd/' . $ekskul);
    }

    public function delete_ekskul_slb($id, $ekskul)
    {
        $delete = $this->M_pendidikan->delete_ekskul($id);
        if ($delete) {
            $this->session->set_flashdata('ekskul', '<div class="alert alert-success" role="alert">Data yang anda pilih telah terhapus</div>');
        } else {
            $this->session->set_flashdata('ekskul', '<div class="alert alert-danger" role="alert">Tidak bisa hapus data</div>');
        }
        redirect('Pendidikan/edit_slb/' . $ekskul);
    }

    public function delete_ekskul_smp($id, $ekskul)
    {
        $delete = $this->M_pendidikan->delete_ekskul($id);
        if ($delete) {
            $this->session->set_flashdata('ekskul', '<div class="alert alert-success" role="alert">Data yang anda pilih telah terhapus</div>');
        } else {
            $this->session->set_flashdata('ekskul', '<div class="alert alert-danger" role="alert">Tidak bisa hapus data</div>');
        }
        redirect('Pendidikan/edit_smp/' . $ekskul);
    }

    function add_ajax_kel($id_kec)
    {
        // $tampil = $this->M_pendidikan->editSD($id)->row();
        $query = $this->db->get_where('kelurahan', array('id_kecamatan' => $id_kec));
        $data = "<option value=''> - Pilih Kelurahan - </option>";
        foreach ($query->result() as $value) {
            $data .= "<option value='" . $value->id_kelurahan . "'>" . $value->nama . "</option>";
        }
        echo $data;
    }

    function tambah_fasilitas()
    {
        $data = array(
            'id_sekolah' => $this->input->post('id'),
            'nama' => $this->input->post('nama'),
        );

        $tambah = $this->M_pendidikan->tambah_fasilitas($data);

        if ($tambah) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambah</div>');
            redirect('Pendidikan/faskul');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data tidak berhasil ditambah</div>');
            redirect('Pendidikan/faskul');
        }
    }

    function tambah_fasilitasSLB()
    {
        $data = array(
            'id_sekolah' => $this->input->post('id'),
            'nama' => $this->input->post('nama'),
        );

        $tambah = $this->M_pendidikan->tambah_fasilitas($data);

        if ($tambah) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambah</div>');
            redirect('Pendidikan/faskul_slb');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data tidak berhasil ditambah</div>');
            redirect('Pendidikan/faskul_slb');
        }
    }

    function tambah_fasilitasSMP()
    {
        $data = array(
            'id_sekolah' => $this->input->post('id'),
            'nama' => $this->input->post('nama'),
        );

        $tambah = $this->M_pendidikan->tambah_fasilitas($data);

        if ($tambah) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambah</div>');
            redirect('Pendidikan/faskul_smp');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data tidak berhasil ditambah</div>');
            redirect('Pendidikan/faskul_smp');
        }
    }

    function tambah_fasilitass($id)
    {
        $data = array(
            'id_sekolah' => $id,
            'nama' => $this->input->post('nama'),
        );

        $tambah = $this->M_pendidikan->tambah_fasilitas($data);

        if ($tambah) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambah</div>');
            redirect('Pendidikan/edit_sd/' . $id);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data tidak berhasil ditambah</div>');
            redirect('Pendidikan/edit_sd/' . $id);
        }
    }

    function tambah_fasilitass_slb($id)
    {
        $data = array(
            'id_sekolah' => $id,
            'nama' => $this->input->post('nama'),
        );

        $tambah = $this->M_pendidikan->tambah_fasilitas($data);

        if ($tambah) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambah</div>');
            redirect('Pendidikan/edit_slb/' . $id);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data tidak berhasil ditambah</div>');
            redirect('Pendidikan/edit_slb/' . $id);
        }
    }

    function tambah_fasilitass_smp($id)
    {
        $data = array(
            'id_sekolah' => $id,
            'nama' => $this->input->post('nama'),
        );

        $tambah = $this->M_pendidikan->tambah_fasilitas($data);

        if ($tambah) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambah</div>');
            redirect('Pendidikan/edit_smp/' . $id);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data tidak berhasil ditambah</div>');
            redirect('Pendidikan/edit_smp/' . $id);
        }
    }

    function edit_fasilitas($id)
    {
        $id_sekolah = $this->input->post('id');

        $data = array(
            'id_fasilitas' => $id,
            'nama' => $this->input->post('nama'),
        );



        $update = $this->M_pendidikan->update_fasilitas($id, $data);

        if ($update) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
            redirect('Pendidikan/edit_sd/' . $id_sekolah);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data tidak berhasil diupdate</div>');
            redirect('Pendidikan/edit_sd/' . $id_sekolah);
        }
    }

    function edit_fasilitas_slb($id)
    {
        $id_sekolah = $this->input->post('id');

        $data = array(
            'id_fasilitas' => $id,
            'nama' => $this->input->post('nama'),
        );

        $update = $this->M_pendidikan->update_fasilitas($id, $data);

        if ($update) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
            redirect('Pendidikan/edit_slb/' . $id_sekolah);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data tidak berhasil diupdate</div>');
            redirect('Pendidikan/edit_slb/' . $id_sekolah);
        }
    }

    function edit_fasilitas_smp($id)
    {
        $id_sekolah = $this->input->post('id');

        $data = array(
            'id_fasilitas' => $id,
            'nama' => $this->input->post('nama'),
        );

        $update = $this->M_pendidikan->update_fasilitas($id, $data);

        if ($update) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
            redirect('Pendidikan/edit_smp/' . $id_sekolah);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data tidak berhasil diupdate</div>');
            redirect('Pendidikan/edit_smp/' . $id_sekolah);
        }
    }

    function edit_ekskul($id)
    {
        $id_sekolah = $this->input->post('id');

        $data = array(
            'id_ekskul' => $id,
            'nama' => $this->input->post('nama'),
        );



        $update = $this->M_pendidikan->update_ekskul($id, $data);

        if ($update) {
            $this->session->set_flashdata('ekskul', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
            redirect('Pendidikan/edit_sd/' . $id_sekolah);
        } else {
            $this->session->set_flashdata('ekskul', '<div class="alert alert-warning" role="alert">Data tidak berhasil diupdate</div>');
            redirect('Pendidikan/edit_sd/' . $id_sekolah);
        }
    }

    function edit_ekskul_slb($id)
    {
        $id_sekolah = $this->input->post('id');

        $data = array(
            'id_ekskul' => $id,
            'nama' => $this->input->post('nama'),
        );



        $update = $this->M_pendidikan->update_ekskul($id, $data);

        if ($update) {
            $this->session->set_flashdata('ekskul', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
            redirect('Pendidikan/edit_slb/' . $id_sekolah);
        } else {
            $this->session->set_flashdata('ekskul', '<div class="alert alert-warning" role="alert">Data tidak berhasil diupdate</div>');
            redirect('Pendidikan/edit_slb/' . $id_sekolah);
        }
    }

    function edit_ekskul_smp($id)
    {
        $id_sekolah = $this->input->post('id');

        $data = array(
            'id_ekskul' => $id,
            'nama' => $this->input->post('nama'),
        );

        $update = $this->M_pendidikan->update_ekskul($id, $data);

        if ($update) {
            $this->session->set_flashdata('ekskul', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
            redirect('Pendidikan/edit_smp/' . $id_sekolah);
        } else {
            $this->session->set_flashdata('ekskul', '<div class="alert alert-warning" role="alert">Data tidak berhasil diupdate</div>');
            redirect('Pendidikan/edit_smp/' . $id_sekolah);
        }
    }

    function tambah_ekskul()
    {
        $data = array(
            'id_sekolah' => $this->input->post('id'),
            'nama' => $this->input->post('nama'),
        );

        $tambah = $this->M_pendidikan->tambah_ekskul($data);

        if ($tambah) {
            $this->session->set_flashdata('ekskul', '<div class="alert alert-success" role="alert">Data berhasil ditambah</div>');
            redirect('Pendidikan/faskul');
        } else {
            $this->session->set_flashdata('ekskul', '<div class="alert alert-warning" role="alert">Data tidak berhasil ditambah</div>');
            redirect('Pendidikan/faskul');
        }
    }

    function tambah_ekskul_slb()
    {
        $data = array(
            'id_sekolah' => $this->input->post('id'),
            'nama' => $this->input->post('nama'),
        );

        $tambah = $this->M_pendidikan->tambah_ekskul($data);

        if ($tambah) {
            $this->session->set_flashdata('ekskul', '<div class="alert alert-success" role="alert">Data berhasil ditambah</div>');
            redirect('Pendidikan/faskul_slb');
        } else {
            $this->session->set_flashdata('ekskul', '<div class="alert alert-warning" role="alert">Data tidak berhasil ditambah</div>');
            redirect('Pendidikan/faskul_slb');
        }
    }

    function tambah_ekskul_smp()
    {
        $data = array(
            'id_sekolah' => $this->input->post('id'),
            'nama' => $this->input->post('nama'),
        );

        $tambah = $this->M_pendidikan->tambah_ekskul($data);

        if ($tambah) {
            $this->session->set_flashdata('ekskul', '<div class="alert alert-success" role="alert">Data berhasil ditambah</div>');
            redirect('Pendidikan/faskul_smp');
        } else {
            $this->session->set_flashdata('ekskul', '<div class="alert alert-warning" role="alert">Data tidak berhasil ditambah</div>');
            redirect('Pendidikan/faskul_smp');
        }
    }

    function tambah_ekskull($id)
    {
        $data = array(
            'id_sekolah' => $id,
            'nama' => $this->input->post('nama'),
        );

        $tambah = $this->M_pendidikan->tambah_ekskul($data);

        if ($tambah) {
            $this->session->set_flashdata('ekskul', '<div class="alert alert-success" role="alert">Data berhasil ditambah</div>');
            redirect('Pendidikan/edit_sd/' . $id);
        } else {
            $this->session->set_flashdata('ekskul', '<div class="alert alert-warning" role="alert">Data tidak berhasil ditambah</div>');
            redirect('Pendidikan/edit_sd/' . $id);
        }
    }

    function tambah_ekskull_slb($id)
    {
        $data = array(
            'id_sekolah' => $id,
            'nama' => $this->input->post('nama'),
        );

        $tambah = $this->M_pendidikan->tambah_ekskul($data);

        if ($tambah) {
            $this->session->set_flashdata('ekskul', '<div class="alert alert-success" role="alert">Data berhasil ditambah</div>');
            redirect('Pendidikan/edit_slb/' . $id);
        } else {
            $this->session->set_flashdata('ekskul', '<div class="alert alert-warning" role="alert">Data tidak berhasil ditambah</div>');
            redirect('Pendidikan/edit_slb/' . $id);
        }
    }

    function tambah_ekskull_smp($id)
    {
        $data = array(
            'id_sekolah' => $id,
            'nama' => $this->input->post('nama'),
        );

        $tambah = $this->M_pendidikan->tambah_ekskul($data);

        if ($tambah) {
            $this->session->set_flashdata('ekskul', '<div class="alert alert-success" role="alert">Data berhasil ditambah</div>');
            redirect('Pendidikan/edit_smp/' . $id);
        } else {
            $this->session->set_flashdata('ekskul', '<div class="alert alert-warning" role="alert">Data tidak berhasil ditambah</div>');
            redirect('Pendidikan/edit_smp/' . $id);
        }
    }

    public function simpanSD()
    {
        $this->rules();
        if ($this->form_validation->run() == false) {
            $this->tambah_sd();
        } else {
            $nama = $this->input->post('nama');
            $kelurahan = $this->input->post('kelurahan');
            $alamat = $this->input->post('alamat');
            $notelp = $this->input->post('notelp');
            $akreditasi = $this->input->post('akreditasi');
            $npsn = $this->input->post('npsn');
            $status = $this->input->post('status');
            $lat = $this->input->post('lat');
            $long = $this->input->post('long');
            $website = $this->input->post('website');
            $gambar = $_FILES['gambar']['name'];

            $config['upload_path']        =    './assets/img/';
            $config['allowed_types']    =    'jpg|jpeg|png';
            $config['max_size']            =    10000;

            $this->load->library('upload', $config);

            if ($gambar) {
                if ($this->upload->do_upload('gambar')) {

                    $data = [
                        'nama_sekolah' => $nama,
                        'id_kelurahan' => $kelurahan,
                        'alamat' => $alamat,
                        'no_telepon' => $notelp,
                        'akreditasi' => $akreditasi,
                        'npsn' => $npsn,
                        'status' => $status,
                        'jenjang' => "SD",
                        'lat' => $lat,
                        'long' => $long,
                        'website' => $website,
                        'foto' => preg_replace("/\s+/", "_", $gambar),
                    ];

                    $tambah = $this->M_pendidikan->tambahSD($data);

                    if ($tambah) {
                        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambah</div>');
                        redirect('Pendidikan/faskul', $data);
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data tidak berhasil ditambah</div>');
                        redirect('Pendidikan', $data);
                    }
                } else {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gambar tidak sesuai format</div>');
                    redirect('Pendidikan', $error);
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Gagal Ditambahkan, Harap Mengupload Gambar</div>');
                redirect('Pendidikan');
            }
        }
    }

    public function simpanSLB()
    {
        $this->rules();
        if ($this->form_validation->run() == false) {
            $this->tambah_slb();
        } else {
            $nama = $this->input->post('nama');
            $kelurahan = $this->input->post('kelurahan');
            $alamat = $this->input->post('alamat');
            $notelp = $this->input->post('notelp');
            $akreditasi = $this->input->post('akreditasi');
            $npsn = $this->input->post('npsn');
            $status = $this->input->post('status');
            $lat = $this->input->post('lat');
            $long = $this->input->post('long');
            $website = $this->input->post('website');
            $gambar = $_FILES['gambar']['name'];

            $config['upload_path']        =    './assets/img/';
            $config['allowed_types']    =    'jpg|jpeg|png';
            $config['max_size']            =    10000;

            $this->load->library('upload', $config);

            if ($gambar) {
                if ($this->upload->do_upload('gambar')) {

                    $data = [
                        'nama_sekolah' => $nama,
                        'id_kelurahan' => $kelurahan,
                        'alamat' => $alamat,
                        'no_telepon' => $notelp,
                        'akreditasi' => $akreditasi,
                        'npsn' => $npsn,
                        'status' => $status,
                        'jenjang' => "SLB",
                        'lat' => $lat,
                        'long' => $long,
                        'website' => $website,
                        'foto' => preg_replace("/\s+/", "_", $gambar),
                    ];

                    $tambah = $this->M_pendidikan->tambahSD($data);

                    if ($tambah) {
                        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambah</div>');
                        redirect('Pendidikan/faskul_slb', $data);
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data tidak berhasil ditambah</div>');
                        redirect('Pendidikan/slb', $data);
                    }
                } else {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gambar tidak sesuai format</div>');
                    redirect('Pendidikan/slb', $error);
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Gagal Ditambahkan, Harap Mengupload Gambar</div>');
                redirect('Pendidikan/slb');
            }
        }
    }

    public function simpanSMP()
    {
        $this->rules();
        if ($this->form_validation->run() == false) {
            $this->tambah_smp();
        } else {
            $nama = $this->input->post('nama');
            $kelurahan = $this->input->post('kelurahan');
            $alamat = $this->input->post('alamat');
            $notelp = $this->input->post('notelp');
            $akreditasi = $this->input->post('akreditasi');
            $npsn = $this->input->post('npsn');
            $status = $this->input->post('status');
            $lat = $this->input->post('lat');
            $long = $this->input->post('long');
            $website = $this->input->post('website');
            $gambar = $_FILES['gambar']['name'];

            $config['upload_path']        =    './assets/img/';
            $config['allowed_types']    =    'jpg|jpeg|png';
            $config['max_size']            =    10000;

            $this->load->library('upload', $config);

            if ($gambar) {
                if ($this->upload->do_upload('gambar')) {

                    $data = [
                        'nama_sekolah' => $nama,
                        'id_kelurahan' => $kelurahan,
                        'alamat' => $alamat,
                        'no_telepon' => $notelp,
                        'akreditasi' => $akreditasi,
                        'npsn' => $npsn,
                        'status' => $status,
                        'jenjang' => "SMP",
                        'lat' => $lat,
                        'long' => $long,
                        'website' => $website,
                        'foto' => preg_replace("/\s+/", "_", $gambar),
                    ];

                    $tambah = $this->M_pendidikan->tambahSD($data);

                    if ($tambah) {
                        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambah</div>');
                        redirect('Pendidikan/faskul_smp', $data);
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data tidak berhasil ditambah</div>');
                        redirect('Pendidikan/smp', $data);
                    }
                } else {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gambar tidak sesuai format</div>');
                    redirect('Pendidikan/smp', $error);
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Gagal Ditambahkan, Harap Mengupload Gambar</div>');
                redirect('Pendidikan/smp');
            }
        }
    }

    public function saveSD($id)
    {
        $this->rules();
        if ($this->form_validation->run() == false) {
            $this->edit_sd($id);
        } else {
            $jenjang = $this->input->post('jenjang');
            $nama = $this->input->post('nama');
            $kelurahan = $this->input->post('kelurahan');
            $alamat = $this->input->post('alamat');
            $notelp = $this->input->post('notelp');
            $akreditasi = $this->input->post('akreditasi');
            $npsn = $this->input->post('npsn');
            $status = $this->input->post('status');
            $lat = $this->input->post('lat');
            $long = $this->input->post('long');
            $website = $this->input->post('website');
            $gambar = $_FILES['gambar']['name'];

            $config['upload_path']        =    './assets/img/';
            $config['allowed_types']    =    'jpg|jpeg|png';
            $config['max_size']            =    10000;

            $this->load->library('upload', $config);

            if ($gambar) {
                if ($this->upload->do_upload('gambar')) {

                    $data = [
                        'nama_sekolah' => $nama,
                        'id_kelurahan' => $kelurahan,
                        'alamat' => $alamat,
                        'no_telepon' => $notelp,
                        'akreditasi' => $akreditasi,
                        'npsn' => $npsn,
                        'status' => $status,
                        'lat' => $lat,
                        'long' => $long,
                        'website' => $website,
                        'foto' => preg_replace("/\s+/", "_", $gambar),
                    ];

                    $update = $this->M_pendidikan->updateSD($id, $data);

                    if ($update) {
                        $this->session->set_flashdata('sd', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
                        redirect('Pendidikan/edit_sd/' . $id);
                    } else {
                        $this->session->set_flashdata('sd', '<div class="alert alert-warning" role="alert">Data tidak berhasil diupdate</div>');
                        redirect('Pendidikan/edit_sd/' . $id);
                    }
                } else {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('sd', '<div class="alert alert-danger" role="alert">Gambar tidak sesuai format</div>');
                    redirect('Pendidikan/edit_sd/' . $id);
                }
            }
            $data = [
                'nama_sekolah' => $nama,
                'id_kelurahan' => $kelurahan,
                'alamat' => $alamat,
                'no_telepon' => $notelp,
                'akreditasi' => $akreditasi,
                'npsn' => $npsn,
                'status' => $status,
                'jenjang' => "SD",
                'lat' => $lat,
                'long' => $long,
                'website' => $website,
            ];

            $update = $this->M_pendidikan->updateSD($id, $data);

            if ($update) {
                $this->session->set_flashdata('sd', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
                redirect('Pendidikan/edit_sd/' . $id);
            } else {
                $this->session->set_flashdata('sd', '<div class="alert alert-warning" role="alert">Data tidak berhasil diupdate</div>');
                redirect('Pendidikan/edit_sd/' . $id);
            }
        }
    }

    public function saveSLB($id)
    {
        $this->rules();
        if ($this->form_validation->run() == false) {
            $this->edit_slb($id);
        } else {
            $nama = $this->input->post('nama');
            $kelurahan = $this->input->post('kelurahan');
            $alamat = $this->input->post('alamat');
            $notelp = $this->input->post('notelp');
            $akreditasi = $this->input->post('akreditasi');
            $npsn = $this->input->post('npsn');
            $status = $this->input->post('status');
            $lat = $this->input->post('lat');
            $long = $this->input->post('long');
            $website = $this->input->post('website');
            $gambar = $_FILES['gambar']['name'];

            $config['upload_path']        =    './assets/img/';
            $config['allowed_types']    =    'jpg|jpeg|png';
            $config['max_size']            =    10000;

            $this->load->library('upload', $config);

            if ($gambar) {
                if ($this->upload->do_upload('gambar')) {

                    $data = [
                        'nama_sekolah' => $nama,
                        'id_kelurahan' => $kelurahan,
                        'alamat' => $alamat,
                        'no_telepon' => $notelp,
                        'akreditasi' => $akreditasi,
                        'npsn' => $npsn,
                        'status' => $status,
                        'lat' => $lat,
                        'long' => $long,
                        'website' => $website,
                        'foto' => preg_replace("/\s+/", "_", $gambar),
                    ];

                    $update = $this->M_pendidikan->updateSD($id, $data);

                    if ($update) {
                        $this->session->set_flashdata('sd', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
                        redirect('Pendidikan/edit_slb/' . $id);
                    } else {
                        $this->session->set_flashdata('sd', '<div class="alert alert-warning" role="alert">Data tidak berhasil diupdate</div>');
                        redirect('Pendidikan/edit_slb/' . $id);
                    }
                } else {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('sd', '<div class="alert alert-danger" role="alert">Gambar tidak sesuai format</div>');
                    redirect('Pendidikan/edit_slb/' . $id);
                }
            }
            $data = [
                'nama_sekolah' => $nama,
                'id_kelurahan' => $kelurahan,
                'alamat' => $alamat,
                'no_telepon' => $notelp,
                'akreditasi' => $akreditasi,
                'npsn' => $npsn,
                'status' => $status,
                'lat' => $lat,
                'long' => $long,
                'website' => $website,
            ];

            $update = $this->M_pendidikan->updateSD($id, $data);

            if ($update) {
                $this->session->set_flashdata('sd', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
                redirect('Pendidikan/edit_slb/' . $id);
            } else {
                $this->session->set_flashdata('sd', '<div class="alert alert-warning" role="alert">Data tidak berhasil diupdate</div>');
                redirect('Pendidikan/edit_slb/' . $id);
            }
        }
    }

    public function saveSMP($id)
    {
        $this->rules();
        if ($this->form_validation->run() == false) {
            $this->edit_smp($id);
        } else {
            $nama = $this->input->post('nama');
            $kelurahan = $this->input->post('kelurahan');
            $alamat = $this->input->post('alamat');
            $notelp = $this->input->post('notelp');
            $akreditasi = $this->input->post('akreditasi');
            $npsn = $this->input->post('npsn');
            $status = $this->input->post('status');
            $lat = $this->input->post('lat');
            $long = $this->input->post('long');
            $website = $this->input->post('website');
            $gambar = $_FILES['gambar']['name'];

            $config['upload_path']        =    './assets/img/';
            $config['allowed_types']    =    'jpg|jpeg|png';
            $config['max_size']            =    10000;

            $this->load->library('upload', $config);

            if ($gambar) {
                if ($this->upload->do_upload('gambar')) {

                    $data = [
                        'nama_sekolah' => $nama,
                        'id_kelurahan' => $kelurahan,
                        'alamat' => $alamat,
                        'no_telepon' => $notelp,
                        'akreditasi' => $akreditasi,
                        'npsn' => $npsn,
                        'status' => $status,
                        'lat' => $lat,
                        'long' => $long,
                        'website' => $website,
                        'foto' => preg_replace("/\s+/", "_", $gambar),
                    ];

                    $update = $this->M_pendidikan->updateSD($id, $data);

                    if ($update) {
                        $this->session->set_flashdata('sd', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
                        redirect('Pendidikan/edit_smp/' . $id);
                    } else {
                        $this->session->set_flashdata('sd', '<div class="alert alert-warning" role="alert">Data tidak berhasil diupdate</div>');
                        redirect('Pendidikan/edit_smp/' . $id);
                    }
                } else {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('sd', '<div class="alert alert-danger" role="alert">Gambar tidak sesuai format</div>');
                    redirect('Pendidikan/edit_smp/' . $id);
                }
            }
            $data = [
                'nama_sekolah' => $nama,
                'id_kelurahan' => $kelurahan,
                'alamat' => $alamat,
                'no_telepon' => $notelp,
                'akreditasi' => $akreditasi,
                'npsn' => $npsn,
                'status' => $status,
                'lat' => $lat,
                'long' => $long,
                'website' => $website,
            ];

            $update = $this->M_pendidikan->updateSD($id, $data);

            if ($update) {
                $this->session->set_flashdata('sd', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
                redirect('Pendidikan/edit_smp/' . $id);
            } else {
                $this->session->set_flashdata('sd', '<div class="alert alert-warning" role="alert">Data tidak berhasil diupdate</div>');
                redirect('Pendidikan/edit_smp/' . $id);
            }
        }
    }

    public function rules()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        // $this->form_validation->set_rules('kelurahan', 'Kelurahan', 'required|trim', [
        //     'required' => 'Field tidak boleh kosong'
        // ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('notelp', 'Notelp', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('akreditasi', 'Akreditasi', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('npsn', 'Npsn', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('status', 'Status', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('long', 'Long', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('lat', 'Lat', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('website', 'Website', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
    }
}