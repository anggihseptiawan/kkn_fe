<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }


    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('home');
        }

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Masuk';
            $data['page'] = 'user/auth/login';
            $this->load->view('layouts/frontend/auth_layout', $data);
        } else {
            // validasi success
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        // ambil data user lalu kita cocokan
        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        // jika user ada di database
        if ($user) {
            // cek password
            if (password_verify($password, $user['password'])) {
                $data = [
                    'email' => $user['email']
                ];
                $this->session->set_userdata($data);
                redirect('home');
            } else {
                $this->session->set_flashdata('message', '
                    <div class="alert alert-danger" role="alert">Password Salah!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '
                <div class="alert alert-danger" role="alert">Email tidak terdaftar!</div>');
            redirect('auth');
        }
    }

    public function register()
    {

        if ($this->session->userdata('email')) {
            redirect('home');
        }
        // rules
        // params 1 (name), params 2 (alias), params 3 (rules nya)
        // rules is_unique digunakan untuk mengecek apakah email yg diinput sudah terdaftar di databse apa belum.
        // $this->form_validation->set_rules('username', 'Username', 'required|trim');
        // $this->form_validation->set_rules('nik', 'NIK', 'required|trim');
        // $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required|trim');
        // $this->form_validation->set_rules('gender', 'Jenis Kelamin', 'required|trim');
        // $this->form_validation->set_rules('tmp_lahir', 'Tempat Lahir', 'required|trim');
        // $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email sudah terdaftar '
        ]);
        $this->form_validation->set_rules('nohp', 'No Handphone', 'required|trim|max_length[13]');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
            'matches' => 'Password tidak cocok!',
            'min_length' => 'Password terlalu pendek'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Pendaftaran Akun';
            $data['page'] = 'user/auth/register';
            $this->load->view('layouts/frontend/auth_layout', $data);
        } else {
            $data = [
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'username' => htmlspecialchars($this->input->post('username', true)),
                'nohp' => htmlspecialchars($this->input->post('nohp', true)),
                'nik' => htmlspecialchars($this->input->post('nik', true)),
                'nama_lengkap' => htmlspecialchars($this->input->post('nama_lengkap', true)),
                'gender' => htmlspecialchars($this->input->post('gender', true)),
                'tmp_lahir' => htmlspecialchars($this->input->post('tmp_lahir', true)),
                'tgl_lahir' => htmlspecialchars($this->input->post('tgl_lahir', true)),
                'alamat' => htmlspecialchars($this->input->post('alamat', true))
            ];

            // insert ke database
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '
            <div class="alert alert-success" role="alert">Selamat, akun anda telah terdaftar</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        redirect('home');
    }
}
