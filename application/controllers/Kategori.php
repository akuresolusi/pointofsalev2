<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('master_model');
	}

	public function index(){
		$data['list'] = $this->master_model->list_kategori();
		$data['isi'] = "kategori/page-kategori";
		$data['subtitle'] = "Kategori";
		$data['title'] = 'Data Kategori Barang';
		$this->load->view('layout',$data);
	}

	public function tambah_kategori(){
		$this->master_model->add_kategori();
		redirect('kategori');
	}

	public function edit_kategori(){
		$this->master_model->update_kategori($this->input->post_get('id'));
		redirect('kategori');
	}

	public function hapus_kategori(){
		$this->master_model->delete_kategori($this->input->post_get('id'));
		redirect('kategori');
	}
}
