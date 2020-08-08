<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SK extends CI_Controller
{

    public function index()
    {
        $data['page'] = 'user/keterangan/index';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['panduan'] = $this->db->get("panduan")->result_array();
        $this->load->view('layouts/frontend/main_layout', $data);
    }
}
