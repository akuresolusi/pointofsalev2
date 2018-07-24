<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pos extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
	}

	public function index(){
		$data['content'] =  "pos/page-pos";
		$data['title'] = 'Point Of Sale';
		$this->load->view('layout-pos',$data);
	}

	public function all(){
		$data['content'] =  "pos/all-transaksi";
		$data['title'] = 'Daftar Transaksi';
		$this->load->view('layout-pos',$data);
	}
	public function today(){
		$data['content'] =  "pos/today-transaksi";
		$data['title'] = 'Pendapatan Hari Ini';
		$this->load->view('layout-pos',$data);
	}

}
