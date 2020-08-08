<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SR extends CI_Controller
{

    public function index()
    {
        $data['page'] = 'user/rekomendasi/index';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layouts/frontend/main_layout', $data);
    }
}
