<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		//Validasi akses
		if(!in_array("", $this->session->userdata('akses'))){
			redirect('welcome/logout');
		}

	}

	public function index(){

		$data['isi'] = "dashboard";
		$data['subtitle'] = "Home";
		$data['title'] = 'Dashboard';
		$this->load->view('layout',$data);
	}
}
