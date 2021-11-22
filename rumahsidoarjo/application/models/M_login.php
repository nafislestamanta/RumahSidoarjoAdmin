<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Model
{
    private $_table = "user_admin";

    public $id_admin;
    public $nip;
    public $username;
    public $id_role;
    public $nama;
    public $alamat;
    public $no_tlp;
    public $email;
    public $foto = "default.jpg";
    public $password;

    public function get($username)
    {
        $this->db->where('username', $username); // Untuk menambahkan Where Clause : username='$username_admin '
        $result = $this->db->get('userl_admin')->row(); // Untuk mengeksekusi dan mengambil data hasil query

        return $result;
    }

    public function register()
    {
        $enc_password = md5($this->input->post('password'));
        $role = "penyewa";
        $post = $this->input->post();
        $this->NIK_pengguna = $post["NIK_pengguna"];
        $this->nama_pengguna = $post["nama_pengguna"];
        $this->alamat_pengguna = $post["alamat_pengguna"];
        $this->no_pengguna = $post["no_pengguna"];
        $this->email = $post["email"];
        $this->username = $post["username"];
        $this->password = $enc_password;
        $this->role = $role;

        return $this->db->insert($this->_table, $this);
    }

    // Check username exists
    public function check_username_exists($username)
    {
        $query = $this->db->get_where('user', array('username' => $username));
        if (empty($query->row_array())) {
            return true;
        } else {
            return false;
        }
    }
}