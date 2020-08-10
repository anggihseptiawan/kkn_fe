<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		$data['page'] = 'user/home/index';
		$data['active'] = 'home';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('layouts/frontend/main_layout', $data);
	}
	
	
}
