<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Returbeli extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('retur_model');
		$this->load->model('pembelian_model');
		$this->load->model('master_model');
		$this->load->model('barang_model');
	}

	public function index(){
		$data['list'] = $this->retur_model->list_retur();
		$data['isi'] = "returbeli/page-retur";
		$data['subtitle'] = "Pembelian";
		$data['title'] = 'Data Retur Pembelian';
		$this->load->view('layout',$data);
	}

	public function tambah(){
		if(!empty($this->input->get('faktur'))){
			$faktur = $this->pembelian_model->detail_pembelian($this->input->get('faktur'));
			if(!isset($faktur)){
				redirect(base_url('returbeli/tambah'));
			}
			$data['faktur'] = $faktur;
			$data['supplier'] = $this->master_model->detail_supplier($faktur['idsupplier']);
			$data['list_items'] = $this->pembelian_model->list_items($this->input->get('faktur'));
			$data['pelunasan'] = $this->retur_model->jumlah_pelunasan($faktur['faktur']);
			$data['jumlah_retur'] = $this->jumlah_retur($faktur['faktur']);
		}

		$data['isi'] =  "returbeli/tambah-retur";
		$data['subtitle'] = "Pembelian";
		$data['title'] = 'Tambah Retur Pembelian';
		$this->load->view('layout',$data);	
	}

	function jumlah_retur($faktur){
		$item = $this->retur_model->list_retur_pembelian_items($faktur);
		$retur = 0;
		foreach ($item as $value) {
			$retur = $retur + ( $value['qty'] * $value['harga'] );
		}
		$uangkembali = $this->retur_model->uangkembali($faktur);
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
		$insert_retur = $this->retur_model->insert();
		$items = $this->pembelian_model->list_items($faktur);
		$i=0;
		foreach ($items as $value){
			$this->retur_model->insert_items($insert_retur, 
											 $faktur, 
											 $value['idbarang'], 
											 $this->input->post('retur')[$i], 
											 $value['harga']
											);
			$this->set_stok_modal_kurang($value['idbarang'], $this->input->post('retur')[$i],  $value['harga']);
			$i++;
		}
		redirect(base_url('returbeli'));
	}

	public function hapus(){
		$retur = $this->retur_model->detail_retur($this->input->get('id'));
		$items = $this->retur_model->list_items_retur($retur['id']);
		foreach ($items as $value) {
			$this->set_stok_modal($value['idbarang'], $value['qty'], $value['harga']);
		}
		$this->retur_model->hapus_retur($retur['id']);
		$this->retur_model->hapus_retur_items($retur['id']);
		redirect(base_url('returbeli'));
	}	


}
