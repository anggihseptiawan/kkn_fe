<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perizinan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        logged_in();
    }

    public function index()
    {
        $data['page'] = 'user/perizinan/index';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['pengajuan'] = $this->db->get_where('surat', ['user_id' => $data['user']['user_id']])->result_array();

        $this->load->view('layouts/frontend/main_layout', $data);
    }

    public function submit()
    {
        $fileName = $_FILES["files"]["name"];
        $fileName =  rand(2112, 9999) . "-" . $fileName;

        $path = "./uploads/perizinan/" . date("Y/m");
        if (!is_dir($path)) {
            mkdir($path, 0777, TRUE);
        }

        $config['upload_path'] = $path;
        $config['allowed_types'] = 'doc|docx|pdf|xls|xlsx';
        $config['file_name'] = '/' . $fileName;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('files')) {
            print_r($this->upload->display_errors());
        }

        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data =  [
            "user_id" => $user['user_id'],
            "jenis" => $_POST["jenis"],
            "keterangan" => $_POST["keterangan"],
            "path" => $path . "/" . $fileName,
            "status" => 0
        ];
        $insert = $this->db->insert('surat', $data);
        if ($insert) {
            die(json_encode(['success' => true, 'error' => false, 'message' => $_FILES["files"]["name"]]));
        }
    }
}
