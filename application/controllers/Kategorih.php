<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategorih extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('master_model');
	}

	public function index(){
		$data['list'] = $this->master_model->list_kategori_harga();
		$data['isi'] = "kategorih/page-kategorih";
		$data['subtitle'] = "Kategori Harga";
		$data['title'] = 'Data Kategori Harga';
		$this->load->view('layout',$data);
	}

	public function tambah_kategori_harga(){
		$this->master_model->add_kategori_harga();
		redirect('kategorih');
	}

	public function edit_kategori_harga(){
		$this->master_model->update_kategori_harga($this->input->post_get('id'));
		redirect('kategorih');
	}

	public function hapus_kategori_harga(){
		$this->master_model->delete_kategori_harga($this->input->post_get('id'));
		redirect('kategorih');
	}
}
