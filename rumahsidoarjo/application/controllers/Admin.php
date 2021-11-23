<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
        $this->load->model('M_admin');
    }

    public function index()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['data1'] = $this->db->get_where('rule_admin', ['id_role' => $this->session->userdata('id_role')])->row_array();
        $data['user'] = $this->M_admin->tampil()->result();
        $data['title'] = 'Managemen Admin';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('managemenuser/managemenadmin', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function delete($id)
    {
        $delete = $this->M_admin->delete($id);
        if ($delete) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data yang anda pilih telah terhapus</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tidak bisa hapus data</div>');
        }
        redirect('Admin');
    }

    public function tambah()
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['role'] = $this->M_admin->role()->result();
        $data['title'] = 'Tambah Admin';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('managemenuser/tambah_admin', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function tambahadmin()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user_admin.username]', [
            'required' => 'Field tidak boleh kosong',
            'is_unique' => 'Username telah digunakan'
        ]);
        $this->form_validation->set_rules('role', 'Role', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('notelp', 'Notelp', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == false) {
            $this->tambah();
        } else {
            $nip = $this->input->post('nip');
            $username = $this->input->post('username');
            $role = $this->input->post('role');
            $nama = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $notelp = $this->input->post('notelp');
            $email = $this->input->post('email');
            $gambar = $_FILES['gambar']['name'];
            $password = $this->input->post('password');

            $config['upload_path']        =    './assets/img/';
            $config['allowed_types']    =    'jpg|jpeg|png';
            $config['max_size']            =    10000;

            $this->load->library('upload', $config);

            if ($gambar) {
                if ($this->upload->do_upload('gambar')) {

                    $data = [
                        'nip' => $nip,
                        'username' => $username,
                        'id_role' => $role,
                        'nama' => $nama,
                        'alamat' => $alamat,
                        'no_tlp' => $notelp,
                        'email' => $email,
                        'foto' => preg_replace("/\s+/", "_", $gambar),
                        'password' => md5($password),
                    ];

                    $tambah = $this->M_admin->tambah($data);

                    if ($tambah) {
                        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambah</div>');
                        redirect('Admin', $data);
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data tidak berhasil ditambah</div>');
                        redirect('Admin', $data);
                    }
                } else {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gambar tidak sesuai format</div>');
                    redirect('Admin', $error);
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Gagal Ditambahkan, Harap Mengupload Gambar</div>');
                redirect('Admin');
            }
        }
    }

    public function edit($id)
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['role'] = $this->M_admin->role()->result();
        $data['edit'] = $this->M_admin->edit($id)->row();
        $data['title'] = 'Rumah Sakit';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('managemenuser/edit_admin', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function simpanAdmin($id)
    {
        $this->form_validation->set_rules('role', 'Role', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('notelp', 'Notelp', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == false) {
            $this->edit($id);
        } else {
            $nip = $this->input->post('nip');
            $username = $this->input->post('username');
            $role = $this->input->post('role');
            $nama = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $notelp = $this->input->post('notelp');
            $email = $this->input->post('email');
            $gambar = $_FILES['gambar']['name'];
            $password = $this->input->post('password');

            $config['upload_path']        =    './assets/img/';
            $config['allowed_types']    =    'jpg|jpeg|png';
            $config['max_size']            =    10000;

            $this->load->library('upload', $config);

            if ($gambar) {
                if ($this->upload->do_upload('gambar')) {

                    $data = [
                        'nip' => $nip,
                        'username' => $username,
                        'id_role' => $role,
                        'nama' => $nama,
                        'alamat' => $alamat,
                        'no_tlp' => $notelp,
                        'email' => $email,
                        'foto' => preg_replace("/\s+/", "_", $gambar),
                        'password' => $password,
                    ];

                    $tambah = $this->M_admin->update($data, $id);

                    if ($tambah) {
                        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
                        redirect('Admin', $data);
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data tidak berhasil diupdate</div>');
                        redirect('Admin', $data);
                    }
                } else {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gambar tidak sesuai format</div>');
                    redirect('Admin', $error);
                }
            } else {
                $data = [
                    'nip' => $nip,
                    'username' => $username,
                    'id_role' => $role,
                    'nama' => $nama,
                    'alamat' => $alamat,
                    'no_tlp' => $notelp,
                    'email' => $email,
                    'password' => $password,
                ];

                $tambah = $this->M_admin->update($data, $id);

                if ($tambah) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
                    redirect('Admin', $data);
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data tidak berhasil diupdate</div>');
                    redirect('Admin', $data);
                }
            }
        }
    }

    public function detail($id)
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['detail'] = $this->M_admin->edit($id)->row();
        $data['title'] = 'Detail Admin';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('managemenuser/detail_admin', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function profile($id)
    {
        $data['data'] = $this->db->get_where('user_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['user'] = $this->M_admin->tampil_profile($id)->row();
        $data['title'] = 'Profile';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/profile', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function update_profile($id)
    {
        $this->form_validation->set_rules('nip', 'nip', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('nama', 'nama Postingan', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('nama', 'nama', 'required|trim', [
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

        if ($this->form_validation->run() == false) {
            $this->profile($id);
        } else {
            $nip = $this->input->post('nip');
            $nama = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $no_tlp = $this->input->post('no_tlp');
            $email = $this->input->post('email');
            $foto = $_FILES['foto']['name'];

            if ($foto) {
                $data = [
                    'nip' => $nip,
                    'nama' => $nama,
                    'alamat' => $alamat,
                    'no_tlp' => $no_tlp,
                    'email' => $email,
                    'foto' => $foto,
                ];

                $update = $this->M_admin->update($data, $id);

                if ($update) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data tidak berhasil diupdate</div>');
                }
                redirect('Admin/profile/' . $id);
            } else {
                $data = [
                    'nip' => $nip,
                    'nama' => $nama,
                    'alamat' => $alamat,
                    'no_tlp' => $no_tlp,
                    'email' => $email,
                    'foto' => $foto,

                ];

                $update = $this->M_admin->update($data, $id);

                if ($update) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data tidak berhasil diupdate</div>');
                }
                redirect('Admin/profile/' . $id);
            }
        }
    }

    public function ubah_password($id)
    {
        $this->form_validation->set_rules('pabar', 'pabar', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('ulpa', 'ulpa', 'required|trim', [
            'required' => 'Field tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Update Password! Field tidak boleh kosong</div>');
            $this->profile($id);
        } else {
            $pabar = md5($this->input->post('pabar'));
            $ulpa = md5($this->input->post('ulpa'));

            if ($pabar == $ulpa) {
                $data = [
                    'password' => $pabar,
                ];

                $update = $this->M_admin->update_password($data, $id);

                if ($update) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password berhasil diupdate</div>');
                    redirect('Admin/profile/' . $id);
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Password tidak berhasil diupdate</div>');
                    redirect('Admin/profile/' . $id);
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal Update Password! Password baru tidak sama dengan ulang password</div>');
                redirect('Admin/profile/' . $id);
            }
        }
    }
}