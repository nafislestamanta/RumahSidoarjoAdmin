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
        $email = $this->db->get_where("user_mobile", ["NIK" => $id])->row();
        $emailUser = $email->email;

        $data = [
            'status' => 1,
        ];

        $update = $this->M_mobile->update($data, $id);

        if ($update) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun Berhasil Diakftifkan</div>');
            $this->_sendEmail($emailUser); // Mengirimkan Email
            //$this->_sendWA(); // Mengirim Pesan Via WA
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun Ditolak, Data Dihapus. </div>');
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

    private function _sendEmail($emailUser)
    {
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'rumahsidoarjo50@gmail.com',
            'smtp_pass' => 'rumahsidoarjo',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        ];

        $this->load->library('email', $config);

        $this->email->initialize($config);
        $this->email->from('rumahsidoarjo50@gmail.com', 'Konfirmasi Pendaftaran Akun');
        $this->email->to($emailUser);
        $this->email->subject('Konfirmasi Pendaftaran Akun');
        $this->email->message('Akun Rumah Sidoarjo anda sudah Aktif. Silahkan Login Dengan Akun Anda.');

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
      
    }


    // private function _sendEmaill()
    // {
    //     $config = [
    //         'protocol' => 'smtp',
    //         'smtp_host' => 'ssl://smtp.googlemail.com',
    //         'smtp_user' => 'amaliacollection87@gmail.com',
    //         'smtp_pass' => 'indah12345',
    //         'smtp_port' => '465',
    //         'mailtype' => 'html',
    //         'charset' => 'utf-8',
    //         'newline' => "\r\n"
    //     ];

    //     $this->load->library('email', $config);

    //     $this->email->from('amaliacollection87@gmail.com', 'Amalia Collection');
    //     $this->email->to($this->input->post('email_penerima'));

    //     $this->email->subject('Konfirmasi Pemesanan');
    //     //$this->email->message('click : <a href="' . base_url() . 'Lupa_Password/resetpassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">activate</a>');

    //     // Data Array ini untuk mengirim data ke halaman kirim email
    //     $data = array(
    //         'id_order' => $_POST["id_order"],
    //         'total' => $_POST["total"],
    //         'biaya_ongkir' => $_POST["biaya_ongkir"],
    //         'jasa_pengiriman' => $_POST["jasa_pengiriman"],
    //         'nama_penerima' => $_POST["nama_penerima"],
    //         'no_penerima' => $_POST["no_penerima"],
    //         'alamat_penerima' => $_POST["alamat_penerima"],

    //     );

    //     $body = $this->load->view('Frontend/v_konfirmasi_pemesanan', $data, true); // Untuk Menggabungkan halaman view ke body pesan

    //     $this->email->message($body); // Isi Pesan dari Email

    //     // Cek Apakah Email Berhasil dikirim apa tidak
    //     if ($this->email->send()) {
    //         return true;
    //     } else {
    //         echo $this->email->print_debugger();
    //         die;
    //     }
    //}

}