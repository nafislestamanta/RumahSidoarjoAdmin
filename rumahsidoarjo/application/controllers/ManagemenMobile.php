<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ManagemenMobile extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_mobile');
    }

    public function index()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['user'] = $this->M_mobile->tampil()->result();
        $data['title'] = 'User Mobile';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('managemenmobile/usermobile', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function delete($id)
    {
        $delete = $this->M_mobile->delete($id);
        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun yang anda pilih telah terhapus</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tidak bisa hapus data</div>');
        }
        redirect('ManagemenMobile');
    }

    public function delete_validasi($id)
    {
        $delete = $this->M_mobile->delete($id);
        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun berhasil ditolak</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tidak bisa hapus data</div>');
        }
        redirect('ManagemenMobile/validasi');
    }

    public function detail_usermobile($id)
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['user'] = $this->M_mobile->detail($id)->row();
        $data['title'] = 'User Mobile';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('managemenmobile/detail_mobile', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function validasi()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['user'] = $this->M_mobile->tampil_validasi()->result();
        $data['title'] = 'Validasi Akun';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('managemenmobile/validasiakun', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function detail_validasi($id)
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['user'] = $this->M_mobile->detail($id)->row();
        $data['title'] = 'Validasi Akun';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('managemenmobile/detail_validasi', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function validasi_acc($id)
    {

        $data = [
            'status' => 1,
        ];

        $update = $this->M_mobile->update($data, $id);

        if ($update) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun Berhasil Diakftifkan</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun Berhasil Ditolak, Data Dihapus. </div>');
        }
        redirect('ManagemenMobile/validasi', $data);
    }

    public function pdf()
    {
        $this->load->library('dompdf_gen');

        $data['user'] = $this->M_mobile->tampil('user_mobile')->result();

        $this->load->view('managemenmobile/laporan', $data);

        $paper_size = 'A4';
        $orientation = 'portrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Laporan_User.pdf", array('Attachment' => 0));
    }
}