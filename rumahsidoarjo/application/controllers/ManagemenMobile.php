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
        $wa = $this->db->get_where("user_mobile", ["NIK" => $id])->row();
        $waUser = $wa->no_telepon;

        $data = [
            'status' => 1,
        ];

        $update = $this->M_mobile->update($data, $id);

        if ($update) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun Berhasil Diakftifkan</div>');
            $this->_sendEmail($emailUser); // Mengirimkan Email
            $this->_sendWA($waUser); // Mengirim Pesan Via WA
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

    private function _sendWA($waUser)
    {
        $waUser; //Menangkap Inputan Dari Form
        // cek apakah no hp mengandung karakter + dan 0-9
        if (!preg_match('/[^+0-9]/', trim($waUser))) {
            // cek apakah no hp karakter 1-3 adalah +62
            if (substr(trim($waUser), 0, 2) == '62') {
                $hp = trim($waUser);

                $curl = curl_init();
                $sender = "6285778055363"; // nomor Server 
                $dest = $hp; // nomor tujuan, pake kode negara 
                $isiPesan = "Terimakasih sudah membeli produk kami. Saat ini kami sedang menunggu pembayaran dari anda sebelum kami memprosesnya.*";

                curl_setopt_array($curl, array(

                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_URL => "https://whapi.io/api/send",
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "POST",
                    CURLOPT_POSTFIELDS => "{\r\n  \"app\": {\r\n    \"id\": \"$sender\",\r\n    \"time\": \"1605326773\",\r\n    \"data\": {\r\n      \"recipient\": {\r\n        \"id\": \"$dest\"\r\n      },\r\n      \"message\": [\r\n        {\r\n          \"time\": \"1605326773\",\r\n          \"type\": \"text\",\r\n          \"value\": \"$isiPesan\"\r\n        }\r\n      ]\r\n    }\r\n  }\r\n}",
                    CURLOPT_HTTPHEADER => array(
                        "Content-Type: text/plain",
                        "Cookie: __cfduid=d424776e2d5021b158f1e64c99f2d7fce1604293254; ci_session=3b712ap59vc924a9o15j5rti70gif6k0"
                    ),
                ));

                $response = curl_exec($curl);

                curl_close($curl);
                echo $response;
            }
            // cek apakah no hp karakter 1 adalah 0
            elseif (substr(trim($waUser), 0, 1) == '0') {
                $hp = '62' . substr(trim($waUser), 1);

                $curl = curl_init();
                $sender = "6285778055363"; // nomor Server 
                $dest = $hp; // nomor tujuan, pake kode negara 
                $isiPesan = "Terimakasih sudah membeli produk kami. Saat ini kami sedang menunggu pembayaran dari anda sebelum kami memprosesnya.*"; // isi pesan ente

                curl_setopt_array($curl, array(

                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_URL => "https://whapi.io/api/send",
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "POST",
                    CURLOPT_POSTFIELDS => "{\r\n  \"app\": {\r\n    \"id\": \"$sender\",\r\n    \"time\": \"1605326773\",\r\n    \"data\": {\r\n      \"recipient\": {\r\n        \"id\": \"$dest\"\r\n      },\r\n      \"message\": [\r\n        {\r\n          \"time\": \"1605326773\",\r\n          \"type\": \"text\",\r\n          \"value\": \"$isiPesan\"\r\n        }\r\n      ]\r\n    }\r\n  }\r\n}",
                    CURLOPT_HTTPHEADER => array(
                        "Content-Type: text/plain",
                        "Cookie: __cfduid=d424776e2d5021b158f1e64c99f2d7fce1604293254; ci_session=3b712ap59vc924a9o15j5rti70gif6k0"
                    ),
                ));

                $response = curl_exec($curl);

                curl_close($curl);
                echo $response;
            }
        }
    }

}