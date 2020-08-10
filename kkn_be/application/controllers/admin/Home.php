<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}

	public function index()
	{
		$data['page'] = 'admin/home/index';
		$data['active'] = 'home';
		$data['pengajuan'] = $this->db->where('status =', 0)->get('surat')->result_array();
		$data['dokumen'] = $this->db->get('panduan')->result_array();
		$data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata("email")])->row_array();
		$this->load->view('layouts/backend/main_layout', $data);
		
		// $data['page'] = 'admin/perizinan/index';
  //       $data['active'] = 'perizinan';
  //       $data['pengajuan'] = $this->db->where('status =', 0)->get('surat')->result_array();
  //       $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata("email")])->row_array();
  //       $this->load->view('layouts/backend/main_layout', $data);
	}

	
}
