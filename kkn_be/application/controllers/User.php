<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        logged_in();
    }

    public function index()
    {
        $data['page'] = 'user/member/index';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nik'] = $data['user']['nik'];
        $data['nama'] = $data['user']['nama_lengkap'];
        $data['gender'] = $data['user']['gender'];
        $data['tmp_lahir'] = $data['user']['tmp_lahir'];
        $data['tgl_lahir'] = $data['user']['tgl_lahir'];
        $data['alamat'] = $data['user']['alamat'];
        $data['username'] = $data['user']['username'];
        $data['nohp'] = $data['user']['nohp'];
        $data['email'] = $data['user']['email'];

        $this->load->view('layouts/frontend/main_layout', $data);
    }

    public function edit()
    {
        $data['page'] = 'user/member/edit';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nik'] = $data['user']['nik'];
        $data['nama'] = $data['user']['nama_lengkap'];
        $data['gender'] = $data['user']['gender'];
        $data['tmp_lahir'] = $data['user']['tmp_lahir'];
        $data['tgl_lahir'] = $data['user']['tgl_lahir'];
        $data['alamat'] = $data['user']['alamat'];
        $data['username'] = $data['user']['username'];
        $data['nohp'] = $data['user']['nohp'];
        $data['email'] = $data['user']['email'];

        $this->load->view('layouts/frontend/main_layout', $data);
    }

    public function update()
    {
    }
}
