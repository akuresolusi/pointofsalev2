<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transfer extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
	}

	public function index(){
		$data['isi'] = "transfer/page-transfer";
		$data['subtitle'] = "Transfer";
		$data['title'] = 'Data Transfer Barang';
		$this->load->view('layout',$data);
	}
	public function tambah(){
		$data['isi'] = "transfer/tambah-transfer";
		$data['subtitle'] = "Transfer";
		$data['title'] = 'Tambah Data Transfer';
		$this->load->view('layout',$data);
	}

}
