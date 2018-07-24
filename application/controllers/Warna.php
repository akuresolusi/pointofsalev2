<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Warna extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('master_model');
	}

	public function index(){
		$data['list'] = $this->master_model->list_warna();
		$data['isi'] = "warna/page-warna";
		$data['subtitle'] = "Warna";
		$data['title'] = 'Data Warna';
		$this->load->view('layout',$data);
	}

	public function tambah_warna(){
		$this->master_model->add_warna();
		redirect('warna');
	}

	public function edit_warna(){
		$this->master_model->update_warna($this->input->post_get('id'));
		redirect('warna');
	}

	public function hapus_warna(){
		$this->master_model->delete_warna($this->input->post_get('id'));
		redirect('warna');
	}
}
