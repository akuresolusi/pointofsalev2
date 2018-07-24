<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelunasan_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function list_pelunasan(){
		$this->db->order_by('id','DESC');
		$this->db->limit(100);
		return $this->db->get('pelunasan_beli')->result_array();
	}

	public function get_pembelian_pemasok($idsupplier){
		$this->db->where('lunas', null);
		$this->db->or_where('lunas', "");
		$this->db->where('idsupplier',$idsupplier);
		return $this->db->get('pembelian')->result_array();
	}

	public function get_pembelian_items($faktur){
		$this->db->where('faktur', $faktur);
		return $this->db->get('pembelian_items')->result_array();
	}

	public function get_items_retur($faktur){
		$this->db->where('faktur', $faktur);
		return $this->db->get('retur_pembelian_items')->result_array();
	}

	public function input_pelunasan_faktur($kode, $faktur, $jumlah){
		$data = array('kode' => $kode,
					  'faktur' => $faktur,
					  'jumlah' => $jumlah
				);
		$this->db->insert('pelunasan_beli_faktur',$data);
		return;
	}

	public function cek_items_pelunasan($faktur){
		$this->db->where('faktur', $faktur);
		return $this->db->get('pelunasan_beli_faktur')->result_array();
	}

	public function list_pelunasan_kode($kode){
		$this->db->where('kode', $kode);
		return $this->db->get('pelunasan_beli_faktur')->result_array();
	}

	public function input_pelunasan(){
		$uid = $this->session->userdata('id');
		$data = array('kode' => $this->input->post('kode'),
					  'supplier' => $this->input->post('idsupplier'),
					  'jumlah' => $this->input->post('jumlahbayar'),
					  'lainya' => $this->input->post('lainya'),
					  'tanggal' => $this->input->post('tanggal'),
					  'iduser' => $uid,
					  'metode' => $this->input->post('metode'),
					  'norek' => $this->input->post('rekbank'),
					  'nocek' => $this->input->post('nocek'),
					  'tglcek' => $this->input->post('tglcek'),
					  'idbank' => $this->input->post('bank'),
					  'nokartu' => $this->input->post('nokartu'),
					  'namakartu' => $this->input->post('namakartu'),
					  'catatan' => $this->input->post('catatan'),
					  'faktur' => $this->input->post('faktur')
				);
		$this->db->insert('pelunasan_beli',$data);
		return;	
	}

	public function pembelian_set_lunas($faktur, $isi){
		$data = array('lunas'=> $isi);
		$this->db->where('faktur', $faktur);
		$this->db->update('pembelian',$data);
		return;
	}

	public function hapus_pelunasan($kode){
		$this->db->where('kode', $kode);
		$this->db->delete('pelunasan_beli');
		return;
	}

	public function hapus_pelunasan_faktur($kode){
		$this->db->where('kode', $kode);
		$this->db->delete('pelunasan_beli_faktur');
		return;
	}

	public function list_pelunasan_faktur($faktur){
		$this->db->where('faktur', $faktur);
		return $this->db->get('pelunasan_beli')->result_array();
	}

}