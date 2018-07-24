<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kota extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('master_model');
	}

	public function index(){
		$data['list'] = $this->master_model->list_kota();
		$data['isi'] = "kota/page-kota";
		$data['subtitle'] = "Kota";
		$data['title'] = 'Data Kota';
		$this->load->view('layout',$data);
	}

	public function tambah_kota(){
		$this->master_model->add_kota();
		redirect('kota');
	}

	public function edit_kota(){
		$this->master_model->update_kota($this->input->post_get('id'));
		redirect('kota');
	}

	public function hapus_kota(){
		$this->master_model->delete_kota($this->input->post_get('id'));
		redirect('kota');
	}
}
