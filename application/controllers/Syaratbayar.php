<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Syaratbayar extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('master_model');
	}

	public function index(){
		$data['list'] = $this->master_model->list_syaratbayar();
		$data['isi'] = "syaratbayar/page-syaratbayar";
		$data['subtitle'] = "Syarat Bayar";
		$data['title'] = 'Data Syarat Bayar';
		$this->load->view('layout',$data);
	}

	public function tambah_syaratbayar(){
		$this->master_model->add_syaratbayar();
		redirect('syaratbayar');
	}

	public function edit_syaratbayar(){
		$this->master_model->update_syaratbayar($this->input->post_get('id'));
		redirect('syaratbayar');
	}

	public function hapus_syaratbayar(){
		$this->master_model->delete_syaratbayar($this->input->post_get('id'));
		redirect('syaratbayar');
	}

}
