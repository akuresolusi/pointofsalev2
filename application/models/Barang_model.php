<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

		
	public function add_barang(){
		$data =  array( 'kode' => $this->input->post('kode'),
						'nama' => $this->input->post('nama'),
						'idkategori' => $this->input->post('kategori'),
						'idsatuan' => $this->input->post('satuan'),
						'kontrolstok' => $this->input->post('kontrol'),
						'hargadasar' => $this->input->post('harga'),
						'status' => "Aktif"
					);
		$this->db->insert('barang',$data);
		return $this->db->insert_id();
	}

	public function update_barang(){
		$data =  array( 'nama' => $this->input->post('nama'),
						'idkategori' => $this->input->post('kategori'),
						'hargadasar' => $this->input->post('harga'),
						'idsatuan' => $this->input->post('satuan')
					);
		$this->db->where('id',$this->input->post_get('id'));
		$this->db->update('barang',$data);
		return;
	}

	public function detail_barang($id){
		$this->db->where('id',$id);
		return $this->db->get('barang')->row_array();
	}

	public function detail_harga_jual($idbarang, $idkh, $idkp){
		$this->db->where('idbarang',$idbarang);
		$this->db->where('kategorih',$idkh);
		$this->db->where('kategorip',$idkp);
		return $this->db->get('harga_jual')->row_array();
	}

	public function list_barang(){
		$like = $this->input->post_get('like');
		if(isset($like)){
			$this->db->like('nama',$like);
			$this->db->or_like('kode',$like);
			$this->db->or_like('ukuran',$like);
			$this->db->or_like('status',$like);
		}

		$this->db->order_by('id','DESC');
		$this->db->limit(50);
		return $this->db->get('barang')->result_array();
	}

	public function on_barang($id){
		$data =  array( 'status' => "Aktif");
		$this->db->where('id',$id);
		$this->db->update('barang',$data);
		return;
	}

	public function off_barang($id){
		$data =  array( 'status' => "Tidak Aktif");
		$this->db->where('id',$id);
		$this->db->update('barang',$data);
		return;
	}

	public function delete_barang($id){
		$this->db->where('id',$id);
		$this->db->delete('barang');
		return;
	}

	public function delete_harga_jual($id){
		$this->db->where('idbarang',$id);
		$this->db->delete('harga_jual');
		return;
	}

	public function add_foto($idbarang){
		$data = array('idbarang'=> $idbarang,
					  'file'=>$this->upload->data('file_name')
					);
		$this->db->insert('foto',$data);
		return;
	}

	public function list_foto($id){
		$this->db->where('idbarang',$id);
		return $this->db->get('foto')->result_array();
	}

	public function hapus_foto($id){
		$this->db->where('id',$id);
		$this->db->delete('foto');
		return;
	}

	public function detail_foto($id){
		$this->db->where('id',$id);
		return $this->db->get('foto')->row_array();
	}

	public function jlh_foto($idbarang){
		$this->db->where('idbarang',$idbarang);
		return $this->db->get('foto')->num_rows();
	}

	public function update_stok($id,$stok){
		$data = array('stok' => $stok);
		$this->db->where('id',$id);
		$this->db->update('barang',$data);
		return;
	}

	public function update_modal($id,$modal){
		$data = array('modal' => $modal);
		$this->db->where('id',$id);
		$this->db->update('barang',$data);
		return;
	}


	public function input_harga_jual($id, $idp, $idh, $harga){
		$data =  array( 'idbarang' => $id,
						'kategorip' => $idp,
						'kategorih' => $idh,
						'harga' => $harga
					);
		$this->db->insert('harga_jual',$data);
		return;
	}

}