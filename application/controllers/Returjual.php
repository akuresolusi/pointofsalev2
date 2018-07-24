<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Returjual extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('returjual_model');
		$this->load->model('penjualan_model');
		$this->load->model('master_model');
		$this->load->model('barang_model');
	}

	public function index(){
		$data['list'] = $this->returjual_model->list_retur();
		$data['isi'] = "returjual/page-retur";
		$data['subtitle'] = "Penjualan";
		$data['title'] = 'Data Retur Penjualan';
		$this->load->view('layout',$data);
	}

	public function tambah(){
		if(!empty($this->input->get('faktur'))){
			$faktur = $this->penjualan_model->detail_penjualan($this->input->get('faktur'));
			if(!isset($faktur)){
				redirect(base_url('returjual/tambah'));
			}
			$data['faktur'] = $faktur;
			$data['pelanggan'] = $this->master_model->detail_pelanggan($faktur['idpelanggan']);
			$data['list_items'] = $this->penjualan_model->list_items($this->input->get('faktur'));
			$data['pelunasan'] = $this->returjual_model->jumlah_pelunasan($faktur['faktur']);
			$data['jumlah_retur'] = $this->jumlah_retur($faktur['faktur']);
		}

		$data['isi'] =  "returjual/tambah-retur";
		$data['subtitle'] = "Penjualan";
		$data['title'] = 'Tambah Retur Penjualan';
		$this->load->view('layout',$data);	
	}

	function jumlah_retur($faktur){
		$item = $this->returjual_model->list_retur_penjualan_items($faktur);
		$retur = 0;
		foreach ($item as $value) {
			$retur = $retur + ( $value['qty'] * $value['harga'] );
		}
		$uangkembali = $this->returjual_model->uangkembali($faktur);
		return $retur + $uangkembali;
	}

	function  set_stok_modal($idbarang, $qty, $harga){
		$barang = $this->barang_model->detail_barang($idbarang);
		$a = $barang['stok'] * $barang['modal'];
		$b = $qty * $harga;
		$c = $barang['stok'] + $qty;
		$d = ($a + $b) / $c;
		$this->barang_model->update_modal($idbarang, $d);
		$this->barang_model->update_stok($idbarang, $c);
	}

	function  set_stok_modal_kurang($idbarang, $qty, $harga){
		$barang = $this->barang_model->detail_barang($idbarang);
		$a = $barang['stok'] * $barang['modal'];
		$b = $qty * $harga;
		$c = $barang['stok'] - $qty;
		$d = ($a - $b) / $c;
		$this->barang_model->update_modal($idbarang, $d);
		$this->barang_model->update_stok($idbarang, $c);
	}

	public function selesai(){
		$faktur = $this->input->get('faktur');
		$insert_retur = $this->returjual_model->insert();
		$items = $this->penjualan_model->list_items($faktur);
		$i=0;
		foreach ($items as $value){
			$this->returjual_model->insert_items($insert_retur, 
											 $faktur, 
											 $value['idbarang'], 
											 $this->input->post('retur')[$i], 
											 $value['harga']
											);
			$this->set_stok_modal($value['idbarang'], $this->input->post('retur')[$i],  $value['harga']);
			$i++;
		}
		redirect(base_url('returjual'));
	}

	public function hapus(){
		$retur = $this->returjual_model->detail_retur($this->input->get('id'));
		$items = $this->returjual_model->list_items_retur($retur['id']);
		foreach ($items as $value) {
			$this->set_stok_modal_kurang($value['idbarang'], $value['qty'], $value['harga']);
		}
		$this->returjual_model->hapus_retur($retur['id']);
		$this->returjual_model->hapus_retur_items($retur['id']);
		redirect(base_url('returjual'));
	}	


}
