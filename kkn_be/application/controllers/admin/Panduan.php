<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Panduan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('PanduanModel');
        $this->load->library('form_validation');
        is_logged_in();
    }

    public function index()
    {
        $data['page'] = 'admin/panduan/index';
        $data['active'] = 'panduan';
        $data['dokumen'] = $this->db->get('panduan')->result_array();
        $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata("email")])->row_array();

        $this->load->view('layouts/backend/main_layout', $data);
    }

    public function add()
    {
        $data['page'] = 'admin/panduan/add';
        $data['active'] = 'panduan';
        $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata("email")])->row_array();
        $this->load->view('layouts/backend/main_layout', $data);
    }

    public function save()
    {
        $fileName = $_FILES['file']["name"];
        $fileName =  rand(2112, 9999) . "-" . $fileName;

        $path = "./uploads/" . date("Y/m");
        if (!is_dir($path)) {
            mkdir($path, 0777, TRUE);
        }

        $config['upload_path'] = $path;
        $config['allowed_types'] = 'doc|docx|pdf|xls|xlsx';
        $config['file_name'] = '/' . $fileName;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('file')) {
            print_r($this->upload->display_errors());
        }


        $data = array(
            "judul" => $this->input->post("judul"),
            "jenis" => $this->input->post("jenis"),
            "path" => $path . "/" . $this->upload->data()["file_name"]
        );

        $insert = $this->db->insert('panduan', $data);
        if ($insert) {
            $this->session->set_flashdata('add', '<div class="alert alert-success text-center">Sukses menambah data</div>');
            redirect('admin/panduan');
        } else {
            $this->session->set_flashdata('add', '<div class="alert alert-danger text-center">Gagal menambah data</div>');
            redirect('admin/panduan');
        }
    }

    public function edit($id)
    {
        $data['page'] = 'admin/panduan/edit';
        $data['active'] = 'panduan';
        $data['file'] = $this->db->get_where('panduan', ["panduan_id" => $id])->row_array();
        $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata("email")])->row_array();

        $this->load->view('layouts/backend/main_layout', $data);
    }

    public function update($id)
    {
        $fileName = $_FILES['file']["name"];
        $fileName =  rand(2112, 9999) . "-" . $fileName;

        $path = "./uploads/" . date("Y/m");
        if (!is_dir($path)) {
            mkdir($path, 0777, TRUE);
        }

        $config['upload_path'] = $path;
        $config['allowed_types'] = 'doc|docx|pdf|xls|xlsx';
        $config['file_name'] = '/' . $fileName;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        $oldFile = $this->db->get_where('panduan', ['panduan_id' => $id])->row_array();
        $where = ['panduan_id' => $id];

        if (!$this->upload->do_upload('file')) {
            print_r($this->upload->display_errors());
            $data = [
                "judul" => $this->input->post("judul"),
                "jenis" => $this->input->post("jenis"),
                "path" => $oldFile['path']
            ];
            $update = $this->db->update('panduan', $data, $where);
        } else {
            $data = [
                "judul" => $this->input->post("judul"),
                "jenis" => $this->input->post("jenis"),
                "path" => $path . "/" . $this->upload->data()["file_name"]
            ];
            $update = $this->db->update('panduan', $data, $where);
        }

        if ($update) {
            $this->session->set_flashdata('add', '<div class="alert alert-success text-center">Sukses ubah data</div>');
            redirect('admin/panduan');
        } else {
            $this->session->set_flashdata('add', '<div class="alert alert-danger text-center">Gagal ubah data</div>');
            redirect('admin/panduan');
        }
    }

    public function delete($id)
    {
        $delete = $this->db->delete('panduan', ["panduan_id" => $id]);
        if ($delete) {
            $this->session->set_flashdata('add', '<div class="alert alert-success text-center">Sukses hapus data</div>');
            redirect('admin/panduan');
        } else {
            $this->session->set_flashdata('add', '<div class="alert alert-danger text-center">Gagal hapus data</div>');
            redirect('admin/panduan');
        }
    }
}
