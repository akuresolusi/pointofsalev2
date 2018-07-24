<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bank extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('master_model');
	}

	public function index(){
		$data['list'] = $this->master_model->list_bank();
		$data['isi'] = "bank/page-bank";
		$data['subtitle'] = "Bank";
		$data['title'] = 'Data Bank';
		$this->load->view('layout',$data);
	}

	public function tambah_bank(){
		$this->master_model->add_bank();
		redirect('bank');
	}

	public function edit_bank(){
		$this->master_model->update_bank($this->input->post_get('id'));
		redirect('bank');
	}

	public function hapus_bank(){
		$this->master_model->delete_bank($this->input->post_get('id'));
		redirect('bank');
	}
}
