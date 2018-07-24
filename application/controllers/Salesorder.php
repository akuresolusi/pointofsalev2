<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salesorder extends CI_Controller {

	public function __construct(){
		parent::__construct();

	}

	public function index(){
		$data['content'] = "salesorder/home-salesorder";
		$data['title'] = 'HOME';
		$this->load->view('layout-so',$data);
	}

	public function tambahso(){
		$data['content'] = "salesorder/tambah-salesorder";
		$data['title'] = 'TAMBAH SALES ORDER';
		$this->load->view('layout-so',$data);
	}
	public function history(){
		$data['content'] = "salesorder/history-salesorder";
		$data['title'] = 'HISTORY';
		$this->load->view('layout-so',$data);
	}
	public function pendapatan(){
		$data['content'] = "salesorder/profit-salesorder";
		$data['title'] = 'PENDAPATAN';
		$this->load->view('layout-so',$data);
	}
	public function so(){
		$data['content'] = "salesorder/page-salesorder";
		$data['title'] = 'Sales Order';
		$this->load->view('layout-so',$data);
	}
}
