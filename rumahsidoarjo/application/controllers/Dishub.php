<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dishub extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    if (!$this->session->userdata('username')) {
      redirect('auth');
    }
    $this->load->model('M_dishub');
    $this->load->library('form_validation');
  }

  public function index()
  {
    $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
    $data['tampil'] = $this->M_dishub->tampil()->result();
    $data['title'] = 'Cctv';
    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar', $data);
    $this->load->view('admin/templates/topbar', $data);
    $this->load->view('dishub/cctv', $data);
    $this->load->view('admin/templates/footer', $data);
  }

  public function delete($id)
  {
    $delete = $this->M_dishub->delete($id);
    if ($delete) {
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Cctv Berhasil Dihapus</div>');
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tidak bisa hapus data</div>');
    }
    redirect('Dishub');
  }


  public function addcctv()
  {
    $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
    $data['title'] = 'Tambah CCTV';
    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar', $data);
    $this->load->view('admin/templates/topbar', $data);
    $this->load->view('dishub/addcctv', $data);
    $this->load->view('admin/templates/footer', $data);
  }

  public function savecctv()
  {
    $model = $this->M_dishub;

    if ($model->savecctv()) {
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah</div>');
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Tidak Berhasil Ditambah</div>');
    }
    redirect(site_url('Dishub/index'));
  }

  public function editcctv($id)
  {
    $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
    $data['edit'] = $this->M_dishub->detail($id)->row();
    $data['title'] = 'Edit Cctv';
    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar', $data);
    $this->load->view('admin/templates/topbar', $data);
    $this->load->view('dishub/edit', $data);
    $this->load->view('admin/templates/footer', $data);
  }


  public function updatecctv($id)
  {
    $this->form_validation->set_rules('nama', 'nama', 'required|trim', [
      'required' => 'Field tidak boleh kosong'
    ]);
    $this->form_validation->set_rules('alamat', 'alamat', 'required|trim', [
      'required' => 'Field tidak boleh kosong'
    ]);
    $this->form_validation->set_rules('status', 'status', 'required|trim', [
      'required' => 'Field tidak boleh kosong'
    ]);
    $this->form_validation->set_rules('link', 'link', 'required|trim', [
      'required' => 'Field tidak boleh kosong'
    ]);

    if ($this->form_validation->run() == false) {
      $this->editcctv($id);
    } else {
      $nama = $this->input->post('nama');
      $alamat = $this->input->post('alamat');
      $status = $this->input->post('status');
      $link = $this->input->post('link');

      $data = [
        'nama' => $nama,
        'alamat' => $alamat,
        'status' => $status,
        'link' => $link,
      ];

      $update = $this->M_dishub->update_cctv($data, $id);

      if ($update) {
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data tidak berhasil diupdate</div>');
      }
      redirect('Dishub', $data);
    }
  }

  public function pdf_cctv()
  {
    $this->load->library('dompdf_gen');

    $data['cctv'] = $this->M_dishub->tampil('cctv')->result();

    $this->load->view('dishub/laporan_cctv', $data);

    $paper_size = 'A4';
    $orientation = 'portrait';
    //$orientation = 'landscape';
    $html = $this->output->get_output();
    $this->dompdf->set_paper($paper_size, $orientation);

    $this->dompdf->load_html($html);
    $this->dompdf->render();
    $this->dompdf->stream("Laporan_CCTV.pdf", array('Attachment' => 0));
  }
}