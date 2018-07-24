<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('master_model');
	}

	public function index(){
		$data['list_pegawai'] = $this->master_model->list_pegawai();
		$data['isi'] = "pegawai/page-pegawai";
		$data['subtitle'] = "Pegawai";
		$data['title'] = 'Data Pegawai';
		$this->load->view('layout',$data);
	}
	
	public function tambah(){
		$data['list_jabatan'] = $this->master_model->list_jabatan();
		$data['isi'] =  "pegawai/tambah-pegawai";
		$data['subtitle'] = "Pegawai";
		$data['title'] = 'Tambah Data Pegawai';
		$this->load->view('layout',$data);	
	}

	public function edit(){
		$data['detail'] = $this->master_model->detail_pegawai($this->input->post_get('id'));
		$data['list_jabatan'] = $this->master_model->list_jabatan();
		$data['isi'] =  "pegawai/edit-pegawai";
		$data['subtitle'] = "Pegawai";
		$data['title'] = 'Perbarui Data Pegawai';
		$this->load->view('layout',$data);	
	}

	public function tambah_pegawai(){
		$this->master_model->add_pegawai();
		redirect('pegawai');
	}

	public function edit_pegawai(){
		$this->master_model->update_pegawai($this->input->post_get('id'));
		redirect('pegawai');
	}

	public function hapus_pegawai(){
		$this->master_model->delete_pegawai($this->input->post_get('id'));
		redirect('pegawai');
	}

}
