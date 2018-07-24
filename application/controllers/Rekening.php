<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekening extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('master_model');
	}

	public function index(){
		$data['list'] = $this->master_model->list_rekening();
		$data['list_bank'] = $this->master_model->list_bank();
		$data['isi'] = "rekening/page-rekening";
		$data['subtitle'] = "Rekening";
		$data['title'] = 'Data Rekening Bank';
		$this->load->view('layout',$data);
	}

	public function tambah_rekening(){
		$this->master_model->add_rekening();
		redirect('rekening');
	}

	public function edit_rekening(){
		$this->master_model->update_rekening($this->input->post_get('id'));
		redirect('rekening');
	}

	public function hapus_rekening(){
		$this->master_model->delete_rekening($this->input->post_get('id'));
		redirect('rekening');
	}
}
