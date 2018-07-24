<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Satuan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('master_model');
	}

	public function index(){
		$data['list'] = $this->master_model->list_satuan();
		$data['isi'] = "satuan/page-satuan";
		$data['subtitle'] = "Satuan";
		$data['title'] = 'Data Satuan Barang';
		$this->load->view('layout',$data);
	}

	public function tambah_satuan(){
		$this->master_model->add_satuan();
		redirect('satuan');
	}

	public function edit_satuan(){
		$this->master_model->update_satuan($this->input->post_get('id'));
		redirect('satuan');
	}

	public function hapus_satuan(){
		$this->master_model->delete_satuan($this->input->post_get('id'));
		redirect('satuan');
	}
}
