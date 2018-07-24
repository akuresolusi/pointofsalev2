<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index(){
		$this->load->view('page-login');
	}

	public function login(){
		$this->load->view('page-login');
	}

	public function proses_login(){
		$nohp = $this->input->post('nohp');
		$password = $this->input->post('password'); 
		$data = $this->login_model->cek_pegawai($nohp, $password);
		if(count($data) > 0){
			$data_session = array(
				'nama' => $data['nama'],
				'password' => $data['password'],
				'akses' => explode("#", $data['akses']),
				'nohp' => $data['nohp'],
				'id' => $data['id']);

			$this->session->set_userdata($data_session);
			redirect('dashboard');
		}else{
			redirect('welcome/logout');
		}

	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url(''));
	}
}
