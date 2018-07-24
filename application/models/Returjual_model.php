<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Returjual_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function list_retur(){
		$like = $this->input->post_get('like');
		if(!empty($like)){
			$this->db->like('faktur', $like);
			$this->db->or_like('catatan', $like);
		}
		$this->db->order_by('id','DESC');
		$this->db->limit(100);
		return $this->db->get('retur_penjualan')->result_array();
	}

	public function retur_penjualan_item($faktur, $idbarang){
		$this->db->select('SUM(qty) as jumlah');
		$this->db->where('faktur', $faktur);
		$this->db->where('idbarang', $idbarang);
		return $this->db->get('retur_penjualan_items')->row_array();
	}

	public function jumlah_pelunasan($faktur){
		$this->db->select('SUM(jumlah) as total');
		$this->db->where('faktur', $faktur);
		return $this->db->get('pelunasan_jual_faktur')->row()->total;
	}

	public function list_retur_penjualan_items($faktur){
		$this->db->where('faktur', $faktur);
		return $this->db->get('retur_penjualan_items')->result_array();
	}

	public function insert(){
		$data = array('faktur'=>$this->input->get('faktur'),
					  'tanggal'=>$this->input->post('tanggal'),
					  'uang_kembali'=>$this->input->post('uangkembali'),
					  'catatan'=>$this->input->post('catatan'),
					  'iduser'=>$this->session->userdata('id')
				);
		$this->db->insert('retur_penjualan',$data);
		return $this->db->insert_id();
	}

	public function insert_items($idretur, $faktur, $idbarang, $qty, $harga){
		$data = array('idretur' => $idretur,
					  'faktur' => $faktur,
					  'idbarang' => $idbarang,
					  'qty' => $qty,
					  'harga' => $harga
				);
		$this->db->insert('retur_penjualan_items', $data);
		return;
	}

	public function uangkembali($faktur){
		$this->db->select('SUM(uang_kembali) as kembali');
		$this->db->where('faktur', $faktur);
		return $this->db->get('retur_penjualan')->row()->kembali;
	}

	public function total_retur($idretur){
		$this->db->where('idretur', $idretur);
		return $this->db->get('retur_penjualan_items')->result_array();
	}

	public function detail_retur($id){
		$this->db->where('id', $id);
		return $this->db->get('retur_penjualan')->row_array();
	}

	public function list_items_retur($idretur){
		$this->db->where('idretur', $idretur);
		return $this->db->get('retur_penjualan_items')->result_array();
	}

	public function hapus_retur($id){
		$this->db->where('id', $id);
		$this->db->delete('retur_penjualan');
		return;
	}

	public function hapus_retur_items($idretur){
		$this->db->where('idretur', $idretur);
		$this->db->delete('retur_penjualan_items');
		return;
	}

}