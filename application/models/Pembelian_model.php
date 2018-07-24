<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembelian_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}


	public function list_faktur(){
		$this->db->order_by('id','DESC');
		$this->db->limit(100);
		return $this->db->get('pembelian')->result_array();
	}

	public function add_items(){
		$data = array('faktur'=>$this->input->post_get('faktur'),
					  'idbarang'=>$this->input->post_get('idbarang'),
					  'harga'=>$this->input->post_get('harga'),
					  'qty'=>$this->input->post_get('qty')
				);
		$this->db->insert('pembelian_items',$data);
		return;
	}

	public function add_items_2($faktur,$idbarang,$qty,$harga){
		$data = array('faktur'=>$faktur,
					  'idbarang'=>$idbarang,
					  'harga'=>$harga,
					  'qty'=>$qty
				);
		$this->db->insert('pembelian_items',$data);
		return;
	}

	public function list_items($faktur){
		$this->db->where('faktur', $faktur);
		$this->db->order_by('id','DESC');
		return $this->db->get('pembelian_items')->result_array();
	}

	public function detail_pembelian($faktur){
		$this->db->where('faktur',$faktur);
		return $this->db->get('pembelian')->row_array();
	}

	public function delete_items($id){
		$this->db->where('id',$id);
		$this->db->delete('pembelian_items');
		return;
	}

	public function big_faktur(){
		$this->db->order_by('id','DESC');
		$this->db->limit(1);
		return $this->db->get('pembelian')->row_array();
	}

	public function add_faktur($tempo){
		$iduser = $this->session->userdata('id');
		
		$pajak = $this->input->post('pajak');
		if($pajak < 0){ $pajak = 0; }

		$diskon = $this->input->post('diskon');
		if($diskon < 0){ $diskon = 0; }
		
		$data = array( 	"faktur"=>$this->input->post('faktur'),
						"idsupplier"=>$this->input->post('idsupplier'),
						"referensi"=>$this->input->post('referensi'),
						"tanggal"=>$this->input->post('tanggal'),
						"idsyaratbayar"=>$this->input->post('syaratbayar'),
						"lainya"=>$this->input->post('lainnya'),
						"tempo"=>$tempo,
						"pajak"=>$pajak,
						"diskon"=>$diskon,
						"catatan"=>$this->input->post('catatan'),
						"iduser"=>$iduser
				);
		$this->db->insert('pembelian',$data);
		return;
	}

	public function update_faktur($tempo){
		$pajak = $this->input->post('pajak');
		if($pajak < 0){ $pajak = 0; }

		$diskon = $this->input->post('diskon');
		if($diskon < 0){ $diskon = 0; }

		$lainya = $this->input->post('lainya');
		if($lainya < 0){ $lainya = 0; }
		
		$data = array( 	"idsupplier"=>$this->input->post('idsupplier'),
						"referensi"=>$this->input->post('referensi'),
						"tanggal"=>$this->input->post('tanggal'),
						"idsyaratbayar"=>$this->input->post('syaratbayar'),
						"tempo"=>$tempo,
						"pajak"=>$pajak,
						"diskon"=>$diskon,
						"lainya"=>$lainya,
						"catatan"=>$this->input->post('catatan')
				);
		$this->db->where('faktur', $this->input->post('faktur'));
		$this->db->update('pembelian',$data);
		return;

	}

	public function detail_item_faktur($id){
		$this->db->where('id',$id);
		return $this->db->get('pembelian_items')->row_array();
	}

	public function cek_faktur_item($faktur, $idbarang){
		$this->db->where('faktur', $faktur);
		$this->db->where('idbarang', $idbarang);
		return $this->db->get('pembelian_items')->num_rows();	
	}

	public function delete_faktur($faktur){
		$this->db->where('faktur', $faktur);
		$this->db->delete('pembelian');
		return;
	}


}