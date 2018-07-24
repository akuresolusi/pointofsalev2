<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('master_model');
	}

	public function index(){
		$data['list'] = $this->master_model->list_jabatan();
		$data['isi'] = "jabatan/page-jabatan";
		$data['subtitle'] = "Jabatan";
		$data['title'] = 'Data Jabatan';
		$this->load->view('layout',$data);
	}

	public function tambah_jabatan(){
		$this->master_model->add_jabatan();
		redirect('jabatan');
	}

	public function edit_jabatan(){
		$this->master_model->update_jabatan($this->input->post_get('id'));
		redirect('jabatan');
	}

	public function hapus_jabatan(){
		$this->master_model->delete_jabatan($this->input->post_get('id'));
		redirect('jabatan');
	}
}
