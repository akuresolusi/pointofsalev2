<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategorip extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('master_model');
	}

	public function index(){
		$data['list'] = $this->master_model->list_kategori_pelanggan();
		$data['isi'] = "kategorip/page-kategorip";
		$data['subtitle'] = "Kategori Pelanggan";
		$data['title'] = 'Data Kategori Pelanggan';
		$this->load->view('layout',$data);
	}

	public function tambah_kategori_pelanggan(){
		$this->master_model->add_kategori_pelanggan();
		redirect('kategorip');
	}

	public function edit_kategori_pelanggan(){
		$this->master_model->update_kategori_pelanggan($this->input->post_get('id'));
		redirect('kategorip');
	}

	public function hapus_kategori_pelanggan(){
		$this->master_model->delete_kategori_pelanggan($this->input->post_get('id'));
		redirect('kategorip');
	}

}
