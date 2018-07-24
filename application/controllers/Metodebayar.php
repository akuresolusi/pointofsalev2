<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Metodebayar extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('master_model');
	}

	public function index(){
		$data['list'] = $this->master_model->list_metode_bayar();
		$data['isi'] = "metodebayar/page-metodebayar";
		$data['subtitle'] = "Metode Bayar";
		$data['title'] = 'Data Metode Pembayaran';
		$this->load->view('layout',$data);
	}

	public function tambah(){
		$data['list_bank'] = $this->master_model->list_bank();
		$data['isi'] = "metodebayar/tambah-metodebayar";
		$data['subtitle'] = "Metode Bayar";
		$data['title'] = 'Tambah Metode Pembayaran';
		$this->load->view('layout',$data);
	}

	public function edit(){
		$data['detail'] = $this->master_model->detail_metode_bayar($this->input->get('id'));
		$data['list_bank'] = $this->master_model->list_bank();
		$data['isi'] = "metodebayar/edit-metodebayar";
		$data['subtitle'] = "Metode Bayar";
		$data['title'] = 'Perbarui Metode Pembayaran';
		$this->load->view('layout',$data);
	}

	public function proses_tambah(){
		$this->master_model->add_metode_bayar();
		redirect('metodebayar');
	}

	public function proses_edit(){
		$this->master_model->update_metode_bayar($this->input->get('id'));
		redirect('metodebayar');
	}

	public function proses_hapus(){
		$this->master_model->delete_metode_bayar($this->input->get('id'));
		redirect('metodebayar');
	}
}
