<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('master_model');
	}

	public function index(){
		$data['list_pelanggan'] = $this->master_model->list_pelanggan();
		$data['isi'] = "pelanggan/page-pelanggan";
		$data['subtitle'] = "Pelanggan";
		$data['title'] = 'Data Pelanggan';
		$this->load->view('layout',$data);
	}

	public function tambah(){
		$data['list_kota'] = $this->master_model->list_kota();
		$data['list_kategori_pelanggan'] = $this->master_model->list_kategori_pelanggan();
		$data['list_kategori_harga'] = $this->master_model->list_kategori_harga();
		$data['isi'] =  "pelanggan/tambah-pelanggan";
		$data['subtitle'] = "Pelanggan";
		$data['title'] = 'Tambah Data Pelanggan';
		$this->load->view('layout',$data);	
	}

	public function edit(){
		$data['detail'] = $this->master_model->detail_pelanggan($this->input->post_get('id'));
		$data['list_kota'] = $this->master_model->list_kota();
		$data['list_kategori_pelanggan'] = $this->master_model->list_kategori_pelanggan();
		$data['list_kategori_harga'] = $this->master_model->list_kategori_harga();
		$data['isi'] =  "pelanggan/edit-pelanggan";
		$data['subtitle'] = "Pelanggan";
		$data['title'] = 'Perbarui Data Pelanggan';
		$this->load->view('layout',$data);	
	}

	public function tambah_pelanggan(){
		$this->master_model->add_pelanggan();
		redirect('pelanggan');
	}

	public function edit_pelanggan(){
		$this->master_model->update_pelanggan($this->input->post_get('id'));
		redirect('pelanggan');
	}

	public function hapus_pelanggan(){
		$this->master_model->delete_pelanggan($this->input->post_get('id'));
		redirect('pelanggan');
	}


	public function cari_pelanggan(){
		if($this->input->is_ajax_request()){
			
			$pelanggan = $this->master_model->list_pelanggan();

			if(count($pelanggan) >= 1){
			
				$json["status"] = 1;
				$json["datanya"] = "<ul id='daftar-autocomplete-pelanggan'>";
				foreach($pelanggan as $row){
					$json["datanya"] .= "
						<li>
							<span id='id' style='display:none;'>".$row['id']."</span>
							<span id='nama' style=' text-transform:uppercase;'>".$row['nama']."</span></br>
							# <span id='alamat' style='font-size:13px;text-transform:capitalize;'>".$row['alamat']."</span>
							<span style='font-size:13px;'> - ".$row['nohp']."</span>
						</li>
					";
				}
				$json["datanya"] .= "</ul>";

			}else{
			
				$json["status"] = 0;
				$json["datanya"] = "<ul id='daftar-autocomplete-pelanggan'>";
				$json["datanya"] .= "<li data-toggle='modal' data-target='#modal-tambah-pelanggan'>
										<span> + Data tidak ditemukan, Klik Untuk Tambah Baru +</span>
									</li>";
				$json["datanya"] .= "</ul>";
			
			}
			echo json_encode($json);
		}
	}


}
