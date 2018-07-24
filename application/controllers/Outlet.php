<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Outlet extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('master_model');
	}

	public function index(){
		$data['list'] = $this->master_model->list_outlet();
		$data['isi'] = "outlet/page-outlet";
		$data['subtitle'] = "Outlet";
		$data['title'] = 'Data Outlet';
		$this->load->view('layout',$data);
	}

	public function tambah_outlet(){
		$this->master_model->add_outlet();
		redirect('outlet');
	}

	public function edit_outlet(){
		$this->master_model->update_outlet($this->input->post_get('id'));
		redirect('outlet');
	}

	public function on_outlet(){
		$this->master_model->on_outlet($this->input->get('id'));
		redirect('outlet');
	}
	public function off_outlet(){
		$this->master_model->off_outlet($this->input->get('id'));
		redirect('outlet');
	}

	public function hapus_outlet(){
		$this->master_model->delete_outlet($this->input->get('id'));
		redirect('outlet');
	}

}
