<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('master_model');
	}

	public function index(){
		$data['list_supplier'] = $this->master_model->list_supplier();
		$data['isi'] = "supplier/page-supplier";
		$data['subtitle'] = "Supplier";
		$data['title'] = 'Data Supplier';
		$this->load->view('layout',$data);
	}

	public function details(){
		$data['isi'] = "supplier/view-supplier";
		$data['subtitle'] = "Supplier";
		$data['title'] = 'Lihat Data Supplier';
		$this->load->view('layout',$data);
	}

	public function tambah(){
		$data['list_kota'] = $this->master_model->list_kota();
		$data['list_bank'] = $this->master_model->list_bank();
		$data['isi'] =  "supplier/tambah-supplier";
		$data['subtitle'] = "Supplier";
		$data['title'] = 'Tambah Data Supplier';
		$this->load->view('layout',$data);	
	}

	public function tambah2(){
		$data['list_kota'] = $this->master_model->list_kota();
		$data['list_bank'] = $this->master_model->list_bank();
		$this->load->view('supplier/tambah2-supplier',$data);	
	}

	public function edit(){
		$data['detail'] = $this->master_model->detail_supplier($this->input->get('id'));
		$data['list_kota'] = $this->master_model->list_kota();
		$data['list_bank'] = $this->master_model->list_bank();
		$data['isi'] =  "supplier/edit-supplier";
		$data['subtitle'] = "Supplier";
		$data['title'] = 'Perbarui Data Supplier';
		$this->load->view('layout',$data);	
	}

	public function tambah_supplier(){
		$this->master_model->add_supplier();
		redirect('supplier');
	}

	public function tambah_supplier2(){
		$this->master_model->add_supplier();
		echo "Data Supplier Berhasil Ditambahkan
		<meta http-equiv='refresh' content=4;URL='".base_url('supplier/tambah_supplier2')."' /> 
		";
	}

	public function edit_supplier(){
		$this->master_model->update_supplier($this->input->post_get('id'));
		redirect('supplier');
	}

	public function hapus_supplier(){
		$this->master_model->delete_supplier($this->input->post_get('id'));
		redirect('supplier');
	}

	public function cari_supplier(){
		if($this->input->is_ajax_request()){
			
			$supplier = $this->master_model->list_supplier();

			if(count($supplier) >= 1){
			
				$json["status"] = 1;
				$json["datanya"] = "<ul id='daftar-autocomplete-supplier'>";
				foreach($supplier as $row){
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
				$json["datanya"] = "<ul id='daftar-autocomplete-supplier'>";
				$json["datanya"] .= "<li data-toggle='modal' data-target='#modal-tambah-supplier'>
										<span> + Data tidak ditemukan, Klik Untuk Tambah Baru +</span>
									</li>";
				$json["datanya"] .= "</ul>";
			
			}
			echo json_encode($json);
		}
	}


}